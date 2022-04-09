<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="vista/css/estilo.css" rel="stylesheet" />
	<title>SGI-Creacion Usuario</title>
	
</head>
<body>
	<header class="encabezado">
		<h1 class="titulo">Sistema de Gestiòn de Inventario<img class="imagen2" src="https://i.ibb.co/TTtMQ3F/encabezado.png">
			<label class="admin">Administrador<a href="close.php" name="cerrarSesion">Cerrar Sesion</a> </label>
		</h1>
		
	</header>
	<div class="barra">
		<nav class="navegacion2">
		    <ul class="menu2">
			    <li><a href="inicioAdmin.php">Incio</a></li>
			    <li><a href="registroUsuario.php">Registro de Usuario</a></li>
			    <li><a href="consultaUsuario.php">Consulta de Usuario</a></li>
		    </ul>
	    </nav>
	</div>

	<div class="clearfix"></div>

	<section>
		<h2 class="subtitulo">Registro de Usuario</h2>

		<div>
			<form class="formulario FormularioAjax" action="registroUsuario.php" method="post">
				<table border="1" class="tabla">
					<tr>
						<td>Nombres</td>
						<td><input type="text" class="form-control is-valid" aria-describedby="inputGroupPrepend3 nombresFeedback" required name="nombres"></td>
					</tr>
					<tr>
						<td>Apellidos</td>
						<td><input class="form-control is-valid" type="int" name="apellidos" id="ape" aria-describedby="inputGroupPrepend3 apeFeedback" required></td>
					</tr>
					<tr>
						<td>Cedula</td>
						<td><input class="form-control is-valid" type="int" name="cedula" id="ced" aria-describedby="inputGroupPrepend3 cedFeedback" required></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input class="form-control is-valid" type="utf-8" name="email" id="email" aria-describedby="inputGroupPrepend3 cedFeedback" required></td>
					</tr>
					<tr>
						<td>Usuario</td>
						<td>
							<input class="form-control is-valid" type="text" name="usuario" id="user" aria-describedby="inputGroupPrepend3 userFeedback" required>
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input class="form-control is-valid" type="text" name="password" id="pass" aria-describedby="inputGroupPrepend3 passFeedback" required></td>
					</tr>
					<tr>
						<td>Rol</td>
						<td>
							<select class="form-control is-valid" name="rol" required="">
								<option>--Selecionar--</option>
								<option name="admin">Administrador</option>
								<option name="almacen">Almacen</option>
								<option name="vendedor">Vendedor</option>	
							</select>
						</td>						
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit_usuario_agregar" name="submit" value="Registrar Usuario" action="RegistroUsuario.php">
						</td>
					</tr>	
				</table>
				
			</form>
		</div>
	</section>

	<div class="clearfix"></div>

	<footer class="piepagina2">
		<p>Contactenos</p>
		<p>Telefono: 302 414 83 24</p>
		<p>Correo: SoporteSGI@gmail.com</p>
	</footer>


</body>
</html>