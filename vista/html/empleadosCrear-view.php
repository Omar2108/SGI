<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="vista/css/estilo.css" rel="stylesheet" />
	<title>SGI-Registro Empleado</title>
	
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
			    <li><a href="empleadoCrear.php">Registro de Empleados</a></li>
			    <li><a href="empleadoConsulta.php">Consulta de Empleados</a></li>
		    </ul>
	    </nav>
	</div>

	<div class="clearfix"></div>

	<section>
		<h2 class="subtitulo">Registro de Empleados</h2>

		<div>
			<form class="formulario" action="empleadoCrear.php" method="post">
				<table border="1" class="tabla">
					<tr> 
						<td>Nombres</td>
						<td><input class="form-control is-valid" type="text" name="nombresEmp" required></td>
					</tr>
					<tr>
						<td>Apellidos</td>
						<td><input class="form-control is-valid" type="text" name="apellidosEmp" required></td>
					</tr>
					<tr>
						<td>Cedula</td>
						<td><input class="form-control is-valid" type="int" name="cedulaEmp" required></td>
					</tr>
					<tr>
						<td>Genero</td>
						<td>
							<select name="generoEmp" required>
								<option value="1"></option>
								<option value="2">Femenino</option>
								<option value="3">Masculino</option>
								<option value="4">LGTBIQ+</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Telefono</td>
						<td><input class="form-control is-valid" type="utf-8" name="telefonoEmp" required></td>
					</tr>
					<tr>
						<td>Direccion</td>
						<td><input class="form-control is-valid" type="utf-8" name="direccionEmp" required></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input class="form-control is-valid" type="text" name="emailEmp" required></td>
					</tr>
					<tr>
						<td>Cargo</td>
						<td>
							<input class="form-control is-valid" type="text" name="cargoEmp" required>
						</td>
					</tr>
					<tr>
						<td>Sueldo</td>
						<td><input class="form-control is-valid" type="text" name="sueldoEmp" required></td>
					</tr>
					<tr>
						<td>EPS</td>
						<td>
							<input class="form-control is-valid" type="text" name="espEmp" required=>
						</td>						
					</tr>
					<tr>
						<td>Fondo de Pesion</td>
						<td>
			           		<input class="form-control is-valid" type="text" name="fondoPEmp" required></td>
   					</tr>
					<tr>
						<td>ARL</td>
						<td>
							<input class="form-control is-valid" type="text" name="arlEmp" required>
						</td>			
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" name="regEmpleado" value="Registrar Empleado" action="empleadoCrear.php"></input>
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