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
  // Crear conexión con la base de datos.
  $con = new mysqli("localhost", "root", "", "videojuegos");
  if ($con->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
    exit();
  }
  @mysqli_query($con, "SET NAMES 'utf8'");
  ?>
  <?php
  //valirdar desde jquery
  $usuario = $_POST['inputUsuario'];
  $contrasena = $_POST['inputPassword'];

  // Consulta para comprobar usuario y contraseña.
  $usuario_bd = sprintf("SELECT usuario FROM usuarios WHERE usuario=$usuario");
  $comprueba_usuario = $conn->query($usuario_bd);

  $contrasena_bd = sprintf("SELECT Password FROM usuarios WHERE Password=$contrasena");
  $comprueba_contrasena = $conn->query($contrasena_bd);

  //mandar mensaje con jquery
  if ($comprueba_usuario==false) {
    echo '<script type="text/javascript">',
    'validaUsuario();',
    '</script>';
  }else if($comprueba_contrasena){
    echo '<script type="text/javascript">',
    'validaContrasena();',
    '</script>';
  }else{
    echo'Error inesperado';
  }
  ?>
</body>

</html>