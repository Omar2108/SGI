<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Recuperar Contraseña</title>
	<link rel="stylesheet" type="text/css" href="vista/css/estilo.css">
</head>
<body>
	<header class="encabezado2">
    <h1 class="titulo2">Sistema de Gestion de Inventario <img class="imagen3" src="https://i.ibb.co/TTtMQ3F/encabezado.png">
    </h1>
  </header>
    <div class="barra2">
    <nav class="navegacion3">
      <ul class="menu3">
        <li><a href="index.php">Volver</a></li>
      </ul>
    </nav>
  </div>
  <h2 class="subtitulo2">Recuperar Contraseña</h2>

  <form class="formulario">
  	<table class="tabla" border="1">
  		<tr>
  			<td><label>Usuario</label></td>
  			<td><input class="form-control is-valid" type="text" name="usuario" required></td>
  		</tr>
  		<tr>
  			<td><label>Cedula</label></td>
  			<td><input class="form-control is-valid" type="text" name="cedula" required></td>
  		</tr>
  		<tr>
  			<td><label>Correo Eletronico</label></td>
  			<td><input class="form-control is-valid" type="utf-8" name="correo" required></td>
  		</tr>
  		<tr>
  			<td colspan="2"><input type="submit" name="recuperar" value="Recuperar Contraseña"></td>
  		</tr>
  	</table>
  </form>

</body>
</html>