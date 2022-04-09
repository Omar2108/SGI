<<?php session_start();
include 'vista/html/proveedoresCrear-view.php';

$server = "localhost";
$user = "root";
$password = "";
$dbname = "tiendabendicion";

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


if (isset($_POST['regProveedor'])) {
    $NombresProv = $_POST['NombresProv'];
    $tipoDocProv = $_POST['tipoDocProv'];
    $numDocProv = $_POST['numDocProv'];
    $telefonoProv = $_POST['telefonoProv'];
    $direccionProv = $_POST['direccionProv'];
    $emailProv = $_POST['emailProv'];


    $consulta = '';

    $consulta = "INSERT INTO proveedores(nombresProv, tipoDocProv, numeroDocProv, telefonoProv, direccionProv, emailProv) VALUES ('$NombresProv', '$tipoDocProv', '$numDocProv', '$telefonoProv', '$direccionProv', '$emailProv')";

        
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "<script type=\"text/javascript\"> alert ('REGISTRO DE PROVEEDOR EXITOSO');";
        echo "</script>";

            
    } else {
        echo "<script type=\"text/javascript\"> alert ('NO SE PUEDO REALIZAR EL REGISTRO');";
        echo "</script>";
    }

    if (mysqli_close($conexion)) {
        echo "<script type=\"text/javascript\"> alert ('DESCONEXION EXITOSA');";
        echo "</script>";
    } else {
        echo "<script type=\"text/javascript\"> alert ('ERROR EN LA DESCONEXION');";
        echo "</script>";
    }

    
        

} else {
    echo "<script type=\"text/javascript\"> alert ('ERROR EN EL REGISTRO');";
    echo "</script>";
}




 ?>