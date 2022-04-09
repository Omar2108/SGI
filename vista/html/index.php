<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>SGI-Loguin</title>
  <link href="vista/css/estilo.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	
</head>
<body class="bodyContenedor">
  <div class="login-box">
    <img class="avatar" src="https://i.ibb.co/f4KsxM9/logoinicio.jpg" alt="logo">
    <h1>Sistema de Gestion de Inventario</h1>
    <h2> Inicio de Sesiòn</h2>

    <form  action="index.php" method="post">
      
      <label for="username" class="form-label">Usuario</label>
      <input type="text" class="form-control is-valid" placeholder="Ingrese Usuario" name="usuario" id="user" aria-describedby="inputGroupPrepend3 userFeedback" required autocomplete="off">
      <div id="userFeedback" class="invalid-feedback">
          Please choose a username.
      </div>
      
      <label for="password">Contraseña</label>
      <input type="password" class="form-control is-valid" placeholder="Ingrese Contraseña" name="password" id="password" aria-describedby="inputGroupPrepend3 passwordFeedback" required autocomplete="off">
      <div id="passwordFeedback" class="invalid-feedback">
        Please choose a password.
      </div>

      <input type="submit" value="Iniciar Sesion" name="login">

      <a href="recuperarContraseña.php" method="post" action="recuperarContraseña.php" name="recuperar" >Olvido su contraseña</a>
    </form>
  </div>
</body>
</html>