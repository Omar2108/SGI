<<?php session_start();
include 'vista/html/clientesCrear-view.php';

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


if (isset($_POST['regCliente'])) {
    $nombresCli = $_POST['nombresCli'];
    $tipoDocCli = $_POST['tipoDocCli'];
    $NumDocCli = $_POST['NumDocCli'];
    $telefonoCli = $_POST['telefonoCli'];
    $direccionCli = $_POST['direccionCli'];
    $emailCli = $_POST['emailCli'];


    $consulta = '';

    $consulta = "INSERT INTO 'clientes'('nombresClient', 'tipoDocClient', 'numeroDocClient', 'telefonoClient', 'direccionClient', 'emailClient') VALUES ('[$nombresCli]','[$tipoDocCli]','[$NumDocCli]','[$telefonoCli]','[$direccionCli]','[$emailCli]');";

        
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "<script type=\"text/javascript\"> alert ('REGISTRO DE CLIENTE EXITOSO');";
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