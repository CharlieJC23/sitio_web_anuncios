<html>

<head>
	<title>Login usuarios con PHP y JQuery</title>
	<meta charset='utf-8'>
	<meta htPage Titletp-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<!--Validacion del FORMULARIO-->
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

	<style>
		body {
			background: url(images/background-login.jpg) no-repeat center center fixed;
			background-size: cover;
		}

		.container {
			margin: 0 auto;
			margin-top: 15%;
			margin-left: 30%;
			margin-bottom: 25%;
			padding: 0;
			background-color: aqua;
		}
	</style>
</head>

<body>
	<div class="container" style="margin-right: 45%;">
		<div class="contenedor_imagen">
			<div>
				<img src="images/usuario.jpg">
			</div>
			<form class="col-12" action="menu_usuario.php" method="post">
				<div class="form-group">
					<label for="inputUsuario" class="col-sm-2 control-label">Usuario</label>
					<div class="col-12">
						<input type="text" class="form-control" name="usuario" id="inputUsuario" placeholder="Usuario" required>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-12">
						<input type="password" class="form-control" name="password" id="inputPassword" placeholder="Contraseña" required>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword" class="col-sm-2 control-label">Confirmar Contraseña</label>
					<div class="col-12">
						<input type="password" class="form-control" name="password2" id="inputPassword2" placeholder="Confirmar Contraseña" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-12">
						<button type="submit" class="btn btn-default">Registrarse</button>
					</div>
					<div>
						<a href="index.php">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
<!--TERMINA FORMULARIO-->
</body>
</html>