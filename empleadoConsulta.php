<<?php 
include 'vista/html/empleadosConsulta-view.php';

$conexion = new mysqli("localhost","root","","tiendabendicion");

if ($conexion) {
   echo "<script type=\"text/javascript\"> alert ('Conectado a la DB');";
   echo "</script>";
} else{
    echo "<script type=\"text/javascript\"> alert ('No se Puedo establecer conexion a la DB');";
    echo "</script>";
}

$selectDB = mysqli_select_db($conexion,'tiendabendicion');

if ($selectDB) {
    echo "<script type=\"text/javascript\"> alert ('Se selecciono correctamente la DB');";
    echo "</script>";
} else {
    echo "<script type=\"text/javascript\"> alert ('No se encontro la DB');";
    echo "</script>";
}


if (isset($_POST['buscarEmp'])) {
    $doc = $_POST['doc'];

    $sql = "SELECT * FROM empleados WHERE cedulaEmpl = $doc";

    $resultado = mysqli_query($conexion, $sql);

    mysqli_data_seek ($resultado, 0);

    $extraido = mysqli_fetch_array($resultado);

    if ($extraido) {
        echo "<table border=\"1\"><tr>";

        echo "<td>NOMBRES</br>".$extraido['nombresEmpl']."</td>";

        echo "<td>APELLIDOS</br>".$extraido['apellidosEmpl']."<br/></td>";

        echo "<td>CEDULA</br>".$extraido['cedulaEmpl']."</td>";

        echo "<td>GENERO</br>".$extraido['generoEmpl']."</td>";

        echo "<td>TELEFONO</br>".$extraido['telefonoEmpl']."</td>";

        echo "<td>DIRECCION</br>".$extraido['direccionEmpl']."</td>";

        echo "<td>EMAIL</br>".$extraido['emailEmpl']."</td>";

        echo "<td>CARGO</br>".$extraido['cargoEmpl']."</td>";

        echo "<td>SUELDO</br>".$extraido['sueldoEmpl']."</td>";

        echo "<td>ESP</br>".$extraido['espEmpl']."</td>";

        echo "<td>FONDO PENSION</br>".$extraido['fondPenEmpl']."</td>";

        echo "<td>ARL</br>".$extraido['arlEmpl']."</td>";

        echo "</table></tr>";

        mysqli_free_result($resultado);

        mysqli_close($conexion);
    } else {
        echo "<script type=\"text/javascript\"> alert ('NO SE ENCONTRO NINGUN REGISTRO');";
        echo "</script>";

        mysqli_free_result($resultado);

        mysqli_close($conexion);
    }

} else {
    echo "<script type=\"text/javascript\"> alert ('ERROR EN LA EJECUCION DE LA CONSULTA');";
    echo "</script>";
}


 ?>