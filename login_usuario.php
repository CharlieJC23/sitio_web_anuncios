<html>

<head>
	<title>Login usuarios con PHP y JQuery</title>
	<meta charset='utf-8'>
	<meta htPage Titletp-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<!-- BOOTSTRAP Y JQUERY AGREGADOS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Validacion para el formulario con jquery-->
	<!-- Validacion para el formulario con jquery-->
	<script>
		function Validar() {
			var usuario = $('#inputUsuario');
			var password = $('#inputPassword');
			var bandera = false;
			require("conexion.php");

			<?php
			session_start();
			// Consulta para comprobar usuario y contraseña.
			$usuario_bd = sprintf("SELECT usuario FROM usuarios WHERE usuario=$usuario");
			$comprueba_usuario = $conn->query($usuario_bd);

			$contrasena_bd = sprintf("SELECT Password FROM usuarios WHERE Password=$contrasena");
			$comprueba_contrasena = $conn->query($contrasena_bd);
			?>
			
			// Verificando si el usuario existe en la base de datos.
			if ($comprueba_usuario && $comprueba_contrasena) {
				bandera = true;
			} else if ($comprueba_usuario == false) {
				alert("Usuario incorrecto").slideUp(500);
			} else if ($comprueba_contrasena == false) {
				alert("Contraseña incorrecta").slideUp(500);
			}

			//Direccionamiento a la pagina principal
			if (bandera) {
				// Redirecciono al usuario a la página principal del sitio.
				$(location).attr('href', menu_usuario.php);
			} else {
				alert("Conexion fallida").slideUp(500);
			}
		} //Termina Validacion
	</script>
	<!--ESTILO DEL FORMULARIO-->
	<style type="text/css">
		body {
			background: url(images/login-portada.png) no-repeat center center fixed;
			background-size: cover;
		}

		.main-section {
			margin: 0 auto;
			margin-top: 25%;
			padding: 0;
		}
	</style>
</head>

<body>
	<!-- FORMULARIO-->
	<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content">
				<div class="col-12">
					<img src="resources/images/login.png">
				</div>
				<form class="col-12" action="" method="post" onsubmit="javascript: return Validar(this);">
					<div class="form-group">
						<label for="inputUsuario" class="col-sm-2 control-label">Usuario</label>
						<div class="col-12">
							<input type="text" class="form-control" name="usuario" id="inputUsuario" placeholder="usuario" required>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Password</label>
						<div class="col-12">
							<input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-12">
							<button type="submit" class="btn btn-default">Iniciar Sesion</button>
						</div>
						<div>
							<!--<button type="submit" class="btn btn-default">Registrarse</button> -->
							<a href="menu_usuario.php">Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--TERMINA FORMULARIO-->
</body>
</html>
