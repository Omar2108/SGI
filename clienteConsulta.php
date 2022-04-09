<<?php session_start();

require_once 'vista/html/consultaCliente-view.php';

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

if (isset($_POST['buscador'])) {
    $doc = $_POST['doc'];

    $sql = "SELECT * FROM clientes WHERE numeroDocClient = $doc;";

    $resultado = mysqli_query($conexion, $sql);

    mysqli_data_seek ($resultado, 0);

    $extraido = mysqli_fetch_array($resultado);

    if ($extraido) {

        echo "<table border=\"1\"><tr>";

        echo "<td>NOMBRES</br>".$extraido['nombresClient']."</td>";

        echo "<td>TIPO DOC</br>".$extraido['tipoDocClient']."<br/></td>";

        echo "<td>NUMERO DOC</br>".$extraido['numeroDocClient']."</td>";

        echo "<td>TELEFONO</br>".$extraido['telefonoClient']."</td>";

        echo "<td>DIRECCION</br>".$extraido['direccionClient']."</td>";

        echo "<td>EMAIL</br>".$extraido['emailClient']."</td>";

        echo "</table></tr>";

        mysqli_free_result($resultado);

        mysqli_close($conexion);
    } else {

        echo "<script type=\"text/javascript\"> alert ('NO SE ENCONTRO NINGUN REGISTRO CON EL NUMERO DE DOCUMENTO INGRESADO');";
        echo "</script>";

        mysqli_free_result($resultado);

        mysqli_close($conexion);
    }

} else {
    echo "<script type=\"text/javascript\"> alert ('ERROR EN LA EJECUCION DE LA CONSULTA');";
    echo "</script>";
}

 


 ?>