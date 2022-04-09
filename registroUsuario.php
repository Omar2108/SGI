<<?php session_start();

require 'vista/html/crearUsuario-view.php';
require_once 'modelo/conexion.php';

$server = "localhost";
$user = "root";
$password = "";
$dbname = "tiendabendicion";

$conexion = new mysqli("localhost","root","","tiendabendicion");

if ($conexion) {
	echo "Conectado a la  DB.</br>";
} else {
	echo "No se Puedo establecer conexion a la DB.</br>";
}

$selectDB = mysqli_select_db($conexion,'tiendabendicion');

if ($selectDB) {
	echo "Se selecciono correctamente la base de datos.</br>";
} else {
	echo "No se encontro la base de datos.</br>";
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$cedula = $_POST['cedula'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$rol = $_POST['rol'];
	

	$consulta = '';

	$consulta = "INSERT INTO usuarios(IDUsu, nombreUsu, apellidosUsu, cedulaUsu, emailUsu, usuario, password, rol) VALUES (null, '$nombres', '$apellidos', '$cedula', '$email', '$usuario', '$password', '$rol')";

		
	$resultado = mysqli_query($conexion, $consulta);

	if ($resultado) {
		echo "<script type=\"text/javascript\"> alert ('REGISTRO EXITOSO');";
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
	echo "<script type=\"text/javascript\"> alert ('NO SE PUEDO REALIZAR EL REGISTRO');";
    echo "</script>";
}









 ?>