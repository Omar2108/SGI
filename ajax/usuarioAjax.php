<<?php

$peticionAjax=true;

require_once '../config/APP.php';

if (isset($POST_['submit_usuario_agregar'])) {
	
	/*-----Instancia al controlador----*/

	require_once '../controladores/insertControlador.php';

	$ins_usuario = new usuarioControlador();

	/*-----PARA AGREGAR USUARIO----*/

	if (isset($_POST['nombres']) && isset($_POST['apellidos'])) {
		echo $ins_usuario->agregar_usuario_controlador();
		
	}
} else {
	session_start(['name'=>'SPM']);
	session_unset();
	session_destroy();
	header('location'.SERVERURL.'login/');
	exit();

}


if (isset($_POST['submit_usuario_consulta'])) {
	
	/*-----Instancia al controlador----*/

	require_once '../controladores/consultasControlador.php';

	$ins_usuario = new usuario_controlador_consulta();

	/*-----Para consultar usuario----*/

	if (isset($_POST['documento'])) {
		echo $ins_usuario->consulta_usuario_controlador();

	}
} else {
	session_start(['name'=>'SPM']);
	session_unset();
	session_destroy();
	header('location'.SERVERURL.'login/');
	exit();
}


