<?php
include "database.php";

$db = conexion();

session_start();
    if(isset($_POST['username']) && isset($_POST['password']))
    {
// username and password sent from Form
$username=mysqli_real_escape_string($db,$_POST['username']); 
$password=mysqli_real_escape_string($db,$_POST['password']);

$result=mysqli_query($db,"INSERT INTO usuarios (usuario,password,tipo_usuario) VALUES('$username','$password','admin');");
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// If result matched $username and $password, table row  must be 1 row
    if($count==1){
$_SESSION['login_user']=$row['usuario']; //Storing user session value.
echo $row['usuario'];
    }
}
