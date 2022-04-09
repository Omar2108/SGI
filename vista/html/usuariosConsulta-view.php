<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SGI-Consulta de Usuario</title>
	<link href="vista/css/estilo.css" rel="stylesheet" />
	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./vista/css/normalize.css">

	<!-- Bootstrap V4.3 -->
    <link rel="stylesheet" href="./vista/css/bootstrap.min.css">

    <!-- Bootstrap Material Design V4.0 -->
    <link rel="stylesheet" href="./vista/css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="./vista/css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="./vista/css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="./vista/js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./vista/css/jquery.mCustomScrollbar.css">

	<!-- General Styles -->
	<link rel="stylesheet" href="./vista/css/style.css">
</head>
<body>
	<header class="encabezado2">
		<h1 class="titulo2">Sistema de Gestion de Inventario <img class="imagen3" src="https://i.ibb.co/TTtMQ3F/encabezado.png">
			<label class="admin2">Administrador<a href="close.php" name="cerrarSesion">Cerrar Sesion</a> </label>
		</h1>
	</header>
	<div class="barra2">
		<nav class="navegacion3">
			<ul class="menu3">
				<li><a href="inicioAdmin.php">Inicio</a></li>
				<li><a href="consultaUsuario.php">Consulta Usuario</a></li>
				<li><a href="registroUsuario.php">Registro Usuario</a></li>
			</ul>
		</nav>
	</div>
	<div class="clearfix"></div>
	<section action = "consultaUsuario.php" method="post">
		<div>
			<h2 class="subtitulo2">Consulta de Usuarios</h2>
		</div>
		<div class="buscador">
			<form class="FormularioAjax" action="consultaUsuario.php" method="post">
				<tr>
					<td>
						<input class="" type="text" name="documento" placeholder="Ingrese el Numero de Documento" id="doc" aria-describedby="inputGroupPrepend3 docFeedback" required>
				        <input type="submit" name="submit_usuario_consulta" value="Buscar" ></input>
					</td>
				</tr>
			</form>
		</div>
		
		
	</section>
	
</body>
</html>