<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'videojuegos');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

session_start();
    if(isset($_POST['username']) && isset($_POST['password']))
    {
// username and password sent from Form
$username=mysqli_real_escape_string($db,$_POST['username']); 
$password=mysqli_real_escape_string($db,$_POST['password']);

// Consulta segura para evitar que haya dos usuarios con el mismo nombre
$resultado=mysqli_query($db,"SELECT usuario FROM usuarios WHERE usuario='$username';");
$coincide=mysqli_num_rows($resultado);

// Verificando si el usuario existe en la base de datos.
if($coincide==1){
    echo'Usuario no displonible';   
}else{
$result=mysqli_query($db,"INSERT INTO usuarios(id_usuario,usuario,password,tipo_usuario) VALUES(null,'$username','$password','admin');");
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    }
// If result matched $username and $password, table row  must be 1 row
if($count==1)
{
$_SESSION['login_user']=$row['usuario']; //Storing user session value.
echo $row['usuario'];
}
}
?>