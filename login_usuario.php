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

	<script type="text/javascript">
		$(document).ready(function() {
			$("#formulario").validate({
				event: "blur",
				rules: {
					'inputUsuario': "required",
					'inputPassword': "required"
				},
				messages: {
					'usuario': "Ingresa un nombre de usuario",
					'pass': "Ingresa una contraseña"
				},
				debug: true,
				errorElement: "label",
				submitHandler: function(form) {
					$("#alert").show();
					$("#alert").html("<img src='images/loader.gif' style='vertical-align:middle;margin:0 10px 0 0' /><strong>Comprobando...</strong>");
					setTimeout(function() {
						$('#alert').fadeOut('slow');
					}, 5000);
					$.ajax({
						type: "POST",
						url: "send.php",
						data: "usuario=" + escape($('#inputUsuario').val()) + "&pass=" + escape($('#inputPassword').val()),
						success: function(msg) {
							$("#alert").html(msg);
							document.getElementById("usuario").value = "";
							document.getElementById("pass").value = "";
							setTimeout(function() {
								$('#alert').fadeOut('slow');
							}, 5000);

						}
					});
				}
			});
		});
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
				<div class="alert alert-success" id="alert" style="display: none;">&nbsp;</div>
				<form class="col-12" id="formulario" method="post">
					<div class="form-group">
						<label for="inputUsuario" class="col-sm-2 control-label">Usuario</label>
						<div class="col-12">
							<input type="text" class="form-control" name="usuario" id="inputUsuario" placeholder="usuario" required>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Password</label>
						<div class="col-12">
							<input type="password" class="form-control" name="pass" id="inputPassword" placeholder="Password" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-12">
							<button onclick="Validar();" class="btn btn-default">Iniciar Sesion</button>
						</div>
						<div>
							<button action="menu_usuario.php" class="btn btn-default">Registrarse</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--TERMINA FORMULARIO-->
</body>
</html>
