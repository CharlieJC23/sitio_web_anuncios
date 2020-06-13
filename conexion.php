<html>

<head>
  <title>Login usuarios con PHP y JQuery</title>
  <meta charset='utf-8'>
  <meta htPage Titletp-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <!-- BOOTSTRAP Y JQUERY AGREGADOS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<!-- Validacion para el formulario con jquery-->
<script>
  function ValidaUsuario(){
    alert("Usuario incorrecto").slideUp(500);
  }
  function ValidaContrasena(){
    alert("Contraseña incorrecta").slideUp(500);
  }
  
</script>

<body>
  <?php
  session_start();
   // Obtengo los datos cargados en el formulario de login.
   $usuario = $_POST['usuario'];
   $password = $_POST['password'];
   // Datos para conectar a la base de datos.
   $nombreServidor = "localhost";
   $nombreUsuario = "root";
   $passwordBaseDeDatos = "";
   $nombreBaseDeDatos = "videojuegos";

   // Crear conexión con la base de datos.
   $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);

  // Validar la conexión de base de datos.
if ($conn ->connect_error) {
die("Connection failed: " . $conn ->connect_error);
}

// Consulta segura para evitar inyecciones SQL.
$sql = sprintf("SELECT usuario FROM usuarios");
$resultado = $conn->query($sql);
  
  if($resultado){
    // Guardo en la sesión el email del usuario.
    $prueba= $_SESSION['usuario'] = $usuario;
    echo $prueba;
  }else{
    echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
    }
  ?>
</body>

</html>