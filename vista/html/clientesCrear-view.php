<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="vista/css/estilo.css" rel="stylesheet" />
	<title>SGI-Registro Clientes</title>
	
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
			    <li><a href="inicioVendedor.php">Incio</a></li>
			    <li><a href="clienteCrear.php">Registro de Clientes</a></li>
			    <li><a href="clienteConsulta.php">Consulta de Clientes</a></li>
			    <li><a href="consultaFactura.php">Consulta Factura</a></li>
				<li><a href="inicioVendedor.php">Generar Factura</a></li>
		    </ul>
	    </nav>
	</div>

	<div class="clearfix"></div>

	<section>
		<h2 class="subtitulo">Registro de Clientes</h2>

		<div>
			<form class="formulario" action="clienteCrear.php" method="post">
				<table border="1" class="tabla">
					<tr> 
						<td>Nombres</td>
						<td><input class="form-control is-valid" type="text" name="nombresCli" required>
						</td>
					</tr>
					<tr>
						<td>Tipo Documento</td>
						<td>
							<select name="tipoDocCli" required>
								<option value="1">--Seleccionar--</option>
								<option value="2">NIT(Persona Juridica)</option>
								<option value="3">Cedula(Persona Natural)</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Numero Documento</td>
						<td><input class="form-control is-valid" type="int" name="NumDocCli" required>
						</td>
					</tr>
					<tr>
						<td>Telefono</td>
						<td><input class="form-control is-valid" type="utf-8" name="telefonoCli" required></td>
					</tr>
					<tr>
						<td>Direccion</td>
						<td><input class="form-control is-valid" type="utf-8" name="direccionCli" required></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input class="form-control is-valid" type="text" name="emailCli" required></td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" name="regCliente" value="Registrar Cliente"></input>
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