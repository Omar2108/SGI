<<?php


require_once './modelo/modeloPrincipal.php';


class loginModelo extends modeloPrincipal {
	
	/*-----modelo para iniciar sesion----*/

	protected static function iniciar_sesion_modelo($datos){

		$sql=modeloPrincipal::conectar()->prepare("SELECT * FROM usuarios WHERE usuario=:usuario AND password=:password");

		$sql->bindParam(":usuario", $datos['usuario']);
		$sql->bindParam(":password", $datos['password']);
		$sql->execute();
		return $sql;
	}
	
}