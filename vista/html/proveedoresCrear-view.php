<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="vista/css/estilo.css" rel="stylesheet" />
	<title>SGI-Registro Proveedores</title>
	
</head>
<body>
	<header class="encabezado">
		<h1 class="titulo">Sistema de Gestiòn de Inventario<img class="imagen2" src="https://i.ibb.co/TTtMQ3F/encabezado.png">
			<label class="admin2">Administrador<a href="close.php" name="cerrarSesion">Cerrar Sesion</a> </label>
		</h1>
		
	</header>
	<div class="barra">
		<nav class="navegacion2">
		    <ul class="menu2">
			    <li><a href="inicioAdmin.php">Incio</a></li>
			    <li><a href="proveedoresCrear.php">Registrar Proveedores</a></li>
				<li><a href="proveedoresConsulta.php">Consulta Proveedores</a></li>
		    </ul>
	    </nav>
	</div>

	<div class="clearfix"></div>

	<section>
		<h2 class="subtitulo">Registro de Proveedores</h2>

		<div>
			<form class="formulario" action="proveedoresCrear.php" method="post">
				<table border="1" class="tabla">
					<tr> 
						<td>Nombres</td>
						<td><input class="form-control is-valid" type="text" name="NombresProv" required></td>
					</tr>
					<tr>
						<td>Tipo de Identificacion</td>
						<td>
							<select name="tipoDocProv" required>
								<option value="1">--Selecionar--</option>
								<option value="cedula/personaNatural">Cedula/Persona Natural</option>
								<option value="NIT/PersonaJuridica">NIT/Persona Juridica</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Numero de Identificacion</td>
						<td><input class="form-control is-valid" type="int" name="numDocProv" required></td>
					</tr>
					<tr>
						<td>Telefono</td>
						<td><input class="form-control is-valid" type="utf-8" name="telefonoProv" required></td>
					</tr>
					<tr>
						<td>Direccion</td>
						<td><input class="form-control is-valid" type="utf-8" name="direccionProv" required></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input class="form-control is-valid" type="text" name="emailProv" required></td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" name="regProveedor" value="Registrar Proveedor" onclick="proveedoresCrear.php"></input>
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