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

			$('#registro').click(function() {
				var username = $("#username").val();
				var password = $("#password").val();
				var password2 = $("#password2").val();
				var dataString = 'username=' + username + '&password=' + password;
				if ($.trim(username).length > 0 && $.trim(password).length > 0 && $.trim(password2).length > 0) {
					if(password == password2){ //comprueba que las contraseñas coiincidan
					$.ajax({
						type: "POST",
						url: "ajaxRegister.php",
						data: dataString,
						cache: false,
						beforeSend: function() {
							$("#registro").val('Validando...');
						},
						success: function(data) {
							if (data) {
								$("body").load("menu_usuario.php").hide().fadeIn(1500).delay(6000);
								//or
								window.location.href = "menu_usuario.php";
							} else {
								$("#registro").val('Registrarse')
								$("#error").html("<span style='color:#cc0000'>Error:</span> El Usuario ya existe.");
							}
						}
					});//termina el ajax
					}//termina condicion de la contraseña
					else{
						alert("Las contraseñas no coinciden");
					}
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
			Confirmar contraseña
			<input type="password" class="input" id="password2" />
			<input type="submit" class="button button-primary" value="Registrarse" id="registro" />
			<div id="error"></div>
	</div>
	</form>
	</div>
</body>

</html>