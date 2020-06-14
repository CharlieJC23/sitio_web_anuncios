<html>

<head>
	<title>Login usuarios con PHP y JQuery</title>
	<meta charset='utf-8'>
	<meta htPage Titletp-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
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
								$("body").load("index.php").hide().fadeIn(1500).delay(6000);
								//or
								window.location.href = "index.php";
							} else {
								$("#login").val('Login')
								$("#error").html("<span style='color:#cc0000'>Error:</span> Contraseña o Usuario invalido. ");
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

<body>
	<!-- Comprueba si existe una sesion anteriormente-->
	<?php
	session_start();
	if (!empty($_SESSION['login_user'])) {
		header('Location: index.php');
	}
	?>
	<div id="box">
		<form action="" method="post">
			Usuario
			<input type="text" class="input" id="username" />
			Contraseña
			<input type="password" class="input" id="password" />
			<input type="submit" class="button button-primary" value="Log In" id="login" />
			<div id="error"></div>
	</div>
	</form>
	</div>
</body>

</html>