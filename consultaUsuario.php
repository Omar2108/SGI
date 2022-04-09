<<?php session_start();

require './vista/html/usuariosConsulta-view.php';
require_once "./config/APP.php";
require_once "./config/SERVER.php";
require_once "./modelo/modeloPrincipal.php";


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


if (isset($_POST['submit_usuario_consulta'])) {
	$doc = $_POST['documento'];

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





?>