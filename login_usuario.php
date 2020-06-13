<html>
<head>
	<title>Login usuarios con PHP y JQuery</title>
	<meta charset='utf-8'>
	<meta htPage Titletp-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
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
				<form class="col-12" action="conexion.php" method="post">
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
