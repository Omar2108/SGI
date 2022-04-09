<<?php 

/**
 * 
 */
class usuario extends modeloPrincipal{

	protected static function consulta_usuario_modelo($datos){

		$sql=modeloPrincipal::conectar()->prepare("SELECT * FROM usuarios WHERE cedulaUsu=:doc_usuario");

		$sql->bindParam(":doc_usuario", $datos['usuario']);
		$sql->execute();
		return $sql;
	}


}


 ?>