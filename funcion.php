<<?php 
require_once 'admin/config.php';
 

function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = htmlspecialchars($datos);
	$datos = filter_var($datos,FILTER_SANITIZE_STRING);

	return $datos;

}





 ?>