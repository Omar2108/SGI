<<?php 
include 'vista/html/empleadosCrear-view.php';

$server = "localhost";
$user = "root";
$password = "";
$dbname = "tiendabendicion";

$conexion = new mysqli("localhost","root","","tiendabendicion");

if ($conexion) {
     echo "<script type=\"text/javascript\"> alert ('CONEXION EXITOSA');";
    echo "</script>";
} else {
     echo "<script type=\"text/javascript\"> alert ('NO SE PUEDO ESTABLECER CONEXION');";
    echo "</script>";
}

$selectDB = mysqli_select_db($conexion,'tiendabendicion');

if ($selectDB) {
     echo "<script type=\"text/javascript\"> alert ('CONECTADO A LA BD');";
    echo "</script>";
} else {
     echo "<script type=\"text/javascript\"> alert ('NO SE ENCONTRO BD');";
    echo "</script>";
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nombresEmp = $_POST['nombresEmp'];
    $apellidosEmp = $_POST['apellidosEmp'];
    $cedulaEmp = $_POST['cedulaEmp'];
    $generoEmp = $_POST['generoEmp'];
    $telefonoEmp = $_POST['telefonoEmp'];
    $direccionEmp = $_POST['direccionEmp'];
    $emailEmp = $_POST['emailEmp'];
    $cargoEmp = $_POST['cargoEmp'];
    $sueldoEmp = $_POST['sueldoEmp'];
    $espEmp = $_POST['espEmp'];
    $fondoPEmp = $_POST['fondoPEmp'];
    $arlEmp  = $_POST['arlEmp'];


    $sql = '';

    $sql = "INSERT INTO 'empleados'('nombresEmpl', 'apellidosEmpl', 'cedulaEmpl', 'generoEmpl', 'telefonoEmpl', 'direccionEmpl', 'emailEmpl', 'cargoEmpl', 'sueldoEmpl', 'espEmpl', 'fondPenEmpl', 'arlEmpl') VALUES ('[$nombresEmp]','[$apellidosEmp]','[$cedulaEmp]','[$generoEmp]','[$telefonoEmp]','[$direccionEmp]','[$emailEmp]','[$cargoEmp]','[$sueldoEmp]','[$espEmp]','[$fondoPEmp]','[$arlEmp]');";

        
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        echo "<script type=\"text/javascript\"> alert ('REGISTRO DE EMPLEADO EXITOSO');";
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