<<?php
   class vistasModelo{

		/*--------- Modelo obtener vistas ---------*/
		protected static function obtener_vistas_modelo($vistas){
			$listaBlanca=["almacenConsulta","clienteConsulta","clienteCrear","facturaConsulta","usuarioConsulta","empleadosCrear","inicio","almacenRegistro","facturaCrear","proveedoresConsulta","proveedoresCrear","recuperarContraseña","registroUsuario","crearUsuario","empleadosConsulta"];
			if(in_array($vistas, $listaBlanca)){
				if(is_file("./vista/html".$vistas."-view.php")){
					$contenido="./vista/html/".$vistas."-view.php";
				}else{
					$contenido="error-404";
				}
			}elseif($vistas=="loguin" || $vistas=="index"){
				$contenido="loguin";
			}else{
				$contenido="error-404";
			}
			return $contenido;
		}
	}