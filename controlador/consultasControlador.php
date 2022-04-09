<<?php 

if ($peticionAjax) {
	require_once '../modelo/usuario.php';
} else {
	require_once './modelo/usuario.php';
}

/*-----Controlador para el  modulo de usuarios----*/


class usuario_controlador_consulta extends usuario{

    /*-----Controlador para consultar usuarios----*/

    public function consulta_usuario_controlador(){

    	$doc_usuario = modeloPrincipal::limpiar_cadena($_POST['documento']);
	
	    /*-----Comprobamos campos vacios----*/

	    if ($doc_usuario=="") {
			echo "<script>
			    Swal.fire({
                    title: 'Ocurrio un error inesperado!',
                    text: 'No has llenado todos los campos que son requeridos',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });

			</script>";

			exit();
		}

	    /*-----Verificar integridad de los datos----*/

		if (modeloPrincipal::verificar_datos("[a-zA-Z0-9]{1,35}",$doc_usuario)) {
			echo "<script>
			    Swal.fire({
                    title: 'Ocurrio un error inesperado',
                    text: 'El nombre de usuario no coincide con el formato solicitado',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });

			</script>";
			exit();
		}

	    if (isset($_POST['submit_usuario_consulta'])) {

	        $doc = modeloPrincipal::limpiar_cadena($_POST['documento']);
    
	        $sql = "SELECT * FROM usuarios WHERE cedulaUsu = $doc;";

            $resultado = mysqli_query($conexion, $sql);

            mysqli_data_seek($resultado, 0);

            $extraido = mysqli_fetch_array($resultado);

           if ($extraido) {
	            $extraido=$extraido;
	            $tabla='';

	            echo $tabla.= '<div class="table-responsive">
	                <table class="table table-dark table-sm">
	                    <thead>
	                        <tr class="text-center roboto-medium">
	                            <th>#</th>
	                            <th>NOMBRE</th>
	                            <th>APELLIDO</th>
	                            <th>CEDULA</th>
	                            <th>EMAIL</th>
	                            <th>USUARIO</th>
	                            <th>PASSWORD</th>
	                            <th>ROL</th>
	                            <th>ACTUALIZAR</th>
	                            <th>ELIMINAR</th>
	                        </tr>
	                    </thead>
	                <tbody>';

	           echo '<tr class="text-center" >
	                <td>'.$extraido['IDUsu'].'</td>
	                <td>'.$extraido['nombreUsu'].'</td>
	                <td>'.$extraido['apellidosUsu'].'</td>
	                <td>'.$extraido['cedulaUsu'].'</td>
	                <td>'.$extraido['emailUsu'].'</td>
	                <td>'.$extraido['usuario'].'</td>
	                <td>'.$extraido['password'].'</td>
	                <td>'.$extraido['rol'].'</td>
	                <td>
	                   <a href="./vista/html/crearUsuario-view/'.modeloPrincipal::encryption($extraido['IDUsu']).'/" class="btn btn-success">
	                       <i class="fas fa-sync-alt"></i> 
	                    </a>
	                </td>
	                <td>
	                   <form class="FormularioAjax" action="./ajax/usuarioAjax.php" method="POST" data-form="eliminar" autocomplete="off">
	                        <input type="hidden" name="usuario_id_delete" value="'.modeloPrincipal::encryption($extraido['IDUsu']).'">
	                        <button type="submit" class="btn btn-warning">
	                            <i class="far fa-trash-alt"></i>
	                        </button>
	                    </form>
	                </td>
	            </tr>';
	            echo '</tbody></table></div>';

	        mysqli_free_result($resultado);

	        mysqli_close($conexion);

            } else {
                echo "<script type=\"text/javascript\"> alert ('NO SE ENCONTRO NINGUN REGISTRO');";
                echo "</script>";

                mysqli_free_result($resultado);

               mysqli_close($conexion);
            }


        } else {
            echo "<script type=\"text/javascript\"> alert ('NO SE PUEDO EJECUTAR LA CONSULTA');";
            echo "</script>";

	        exit();
	        mysql_close($conexion);
        }
    }

	
}