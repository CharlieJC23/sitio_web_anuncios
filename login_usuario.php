<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<meta htPage Titletp-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Login</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<!--Validacion del FORMULARIO-->
	<script>
		$(document).ready(function() {

			$('#login').click(function() {
				var username = $("#username").val();
				var password = $("#password").val();
				var dataString = 'username=' + username + '&password=' + password;
				if ($.trim(username).length > 0 && $.trim(password).length > 0) {
					$.ajax({
						type: "POST",
						url: "ajaxLogin.php",
						data: dataString,
						cache: false,
						beforeSend: function() {
							$("#login").val('Conectando...');
						},
						success: function(data) {
							if (data) {
								window.location.href = "menu_usuario.php";
							} else {
								$("#login").val('Login')
								swal("Usuario o Contraseña incorrectos, verifica que tus datos sean correctos...");
							}
						}
					});

				}
				return false;
			});
		});
	</script>
	<!--Termina Validacion del FORMULARIO-->
</head>

<body class="container" style="background-color: lightgrey;">
	<div class="modal-dialog text-center">
		<div class="col-sm-12">
			<div class="modal-content">
				<form class="col-12" action="" method="post">
					<div class="form-group" id="user-group">
						<strong>Usuario</strong>
						<input type="text" class="form-control" placeholder="Nombre de usuario" name="username" id="username" />
					</div>
					<div class="form-group" id="contrasena-group">
						<strong>Contraseña</strong>
						<input type="password" class="form-control" placeholder="Contrasena" name="password" id="password" />
					</div>
					<button type="submit" class="btn btn-primary" id="login"><i class="fas fa-sign-in-alt"></i> Ingresar </button>
					<div id="error"></div>
					Registrate <a href="registrate.php">Aqui</a>
				</form>
			</div>
		</div>
	</div>
</body>

</html>