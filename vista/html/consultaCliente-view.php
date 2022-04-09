<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SGI-Consulta de Clientes</title>
	<link href="vista/css/estilo.css" rel="stylesheet" />
</head>
<body>
	<header class="encabezado2">
		<h1 class="titulo2">Sistema de Gestion de Inventario <img class="imagen3" src="https://i.ibb.co/TTtMQ3F/encabezado.png">
			<label class="admin">Administrador<a href="close.php" name="cerrarSesion">Cerrar Sesion</a> </label>
		</h1>
	</header>
	<div class="barra2">
		<nav class="navegacion3">
			<ul class="menu3">
				<li><a href="inicioVendedor.php">Inicio</a></li>
				<li><a href="clienteConsulta.php">Consulta Clientes</a></li>
				<li><a href="clienteCrear.php">Registro Clientes</a></li>
				<li><a href="consultaFactura.php">Consulta Factura</a></li>
				<li><a href="inicioVendedor.php">Generar Factura</a></li>
			</ul>
		</nav>
	</div>
	<div class="clearfix"></div>
	<section>
		<div>
			<h2 class="subtitulo2"><b>Consulta de Clientes</b></h2>
		</div>
		<div class="buscador">
			<form action="clienteConsulta.php" method="post">
				<tr>
					<td>
						<input class="form-control is-valid" type="text" name="doc" placeholder="Ingrese el Numero de Documento" id="doc" aria-describedby="inputGroupPrepend3 docFeedback" required>
			            <input type="submit" name="buscador" value="Buscar" action="clienteConsulta.php">						
					</td>
				</tr>
			</form>
			
		</div>
	
	</section>
</body>
</html>