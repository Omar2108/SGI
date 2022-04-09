<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SGI-Consulta de Almacen</title>
	<link href="vista/css/estilo.css" rel="stylesheet" />
</head>
<body>
	<header class="encabezado2">
		<h1 class="titulo2">Sistema de Gestion de Inventario <img class="imagen3" src="https://i.ibb.co/TTtMQ3F/encabezado.png">
		<label class="admin">Administrador<a href="" name="cerrarSesion" class="btn-exit-system">Cerrar Sesion</a> </label>
		
		</h1>
	</header>
	<div class="barra2" action="almacenConsulta.php" method="post">
		<nav class="navegacion3">
			<ul class="menu3">
				<li><a href="inicioAlmacen.php">Inicio</a></li>
				<li><a href="almacenConsulta.php">Consulta Almacen</a></li>
				<li><a href="inicioAlmacen.php">Registro Almacen</a></li>
			</ul>
		</nav>
	</div>
	<div class="clearfix"></div>
	<section action="almacenConsulta.php" method="post">
		<div>
			<h2 class="subtitulo2">Consulta de Productos</h2>
		</div>
		<div class="buscador" action="almacenConsulta.php" method="post">
			<form action="almacenConsulta.php" method="post">
				<tr>
					<td>
						<input class="form-control is-valid" type="text" name="doc" placeholder="Ingrese el Numero de Documento" id="doc" aria-describedby="inputGroupPrepend3 docFeedback" required>
			            <input type="submit" name="submit" value="Buscar Producto" action="almacenConsulta.php">
					</td>
				</tr>
			</form>
			
		</div>
	</section>
</body>
</html>