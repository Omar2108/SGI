<!DOCTYPE html>
<html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sistema Gestion Inventario-SGI</title>
		<link href="vista/css/estilo.css" rel="stylesheet" />
		<!-- Normalize V8.0.1 -->
	    <link rel="stylesheet" href="vista/css/normalize.css">

	    <!-- Bootstrap V4.3 -->
	    <link rel="stylesheet" href="vista/css/bootstrap.min.css">

	    <!-- Bootstrap Material Design V4.0 -->
	    <link rel="stylesheet" href="vista/css/bootstrap-material-design.min.css">

	    <!-- Font Awesome V5.9.0 -->
	    <link rel="stylesheet" href="vista/css/all.css">

	    <!-- Sweet Alerts V8.13.0 CSS file -->
	    <link rel="stylesheet" href="vista/css/sweetalert2.min.css">

	    <!-- Sweet Alert V8.13.0 JS file-->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	    <!-- Sweet Alert V8.13.0 JS file-->
	    <script src="vista/js/sweetalert2.min.js" ></script>

	    <!-- jQuery Custom Content Scroller V3.1.5 -->
	    <link rel="stylesheet" href="vista/css/jquery.mCustomScrollbar.css">
	
	</head>
	<body>

		<?php
			$peticionAjax=false;
			require_once "./controlador/vistasControlador.php";
			$IV = new vistasControlador();

			$vistas=$IV->obtener_vistas_controlador();

			if($vistas=="loguin" || $vistas=="error-404"){
				require_once "./vista/html/".$vistas.".php";

			}else{
				require_once "./vista/html/inicio.php";

			}
			include "./vista/inc/logOut.php"; 
		?>



		
		 <!--=============================================
	    =            Include JavaScript files           =
	    ==============================================-->
	    <!-- jQuery V3.4.1 -->
	    <script src="vista/js/jquery-3.4.1.min.js" ></script>

	    <!-- popper -->
	    <script src="vista/js/popper.min.js" ></script>

	    <!-- Bootstrap V4.3 -->
	    <script src="vista/js/bootstrap.min.js" ></script>

	    <!-- jQuery Custom Content Scroller V3.1.5 -->
	    <script src="vista/js/jquery.mCustomScrollbar.concat.min.js" ></script>

	    <!-- Bootstrap Material Design V4.0 -->
	    <script src="vista/js/bootstrap-material-design.min.js" ></script>
	    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	    <script src="vista/js/main.js" ></script>


	</body>
</html>