<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="vista/css/estilo.css" rel="stylesheet" />
	<title>SGI-Registro Almacen</title>
	
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
			    <li><a href="inicioAlmacen.php">Incio</a></li>
			    <li><a href="inicioAlmacen.php">Registro de Producto</a></li>
			    <li><a href="almacenConsulta.php">Consulta de Producto</a></li>
		    </ul>
	    </nav>
	</div>

	<div class="clearfix"></div>

	<section action = "inicioAlmacen.php" method = "post" >
		<h2 class="subtitulo">Registro de Producto</h2>

		<div>
			<form class="formulario" action="inicioAlmacen.php" method="post">
				<table border="1" class="tabla">
					<tr>
						<td>Nombre Producto</td>
						<td><input class="form-control is-valid" type="text" name="nombreProd" required></td>
					</tr>
					<tr>
						<td>Marca Producto</td>
						<td><input class="form-control is-valid" type="int" name="marcaProd" required></td>
					</tr>
					<tr>
						<td>Fecha Vencimiento</td>
						<td><input class="form-control is-valid" type="date" name="fechaVen" required></td>
					</tr>
					<tr>
						<td>Cantidad Entrada(und, lb, lt)</td>
						<td><input class="form-control is-valid" type="utf-8" name="cantEnt" required></td>
					</tr>
					<tr>
						<td>Fecha de Entrega</td>
						<td><input class="form-control is-valid" type="date" name="fechaEnt" required></td>
					</tr>
					<tr>
						<td>Valor Unitario Entrada</td>
						<td><input class="form-control is-valid" type="int" name="valorUnEnt" required></td>
					</tr>
					<tr>
						<td>Cantidad Vendidad</td>
						<td>
							<input class="form-control is-valid" type="int" name="cantVen" required=>
						</td>
					</tr>
					<tr>
						<td>Valor Unitario Cormercial</td>
						<td><input class="form-control is-valid" type="int" name="valorUCom" required></td>
					</tr>
					<tr>
						<td>Fecha de Salida</td>
						<td>
							<input class="form-control is-valid" type="date" name="fechaSa" required>
						</td>						
					</tr>
					<tr>
						<td>Cantidad Disponible</td>
						<td>
			           		<input class="form-control is-valid" type="int" name="cantidadD" required>
			           	</td>
   					</tr>
					<tr>
						<td>Utilidad</td>
						<td>
							<input class="form-control" type="int" name="utilidad" required>
						</td>			
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" name="regProducto" value="Registrar Producto" action = "inicioAlmacen.php" method = "post">
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