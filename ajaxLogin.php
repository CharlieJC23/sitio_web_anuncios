<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'unidad5');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

session_start();
    if(isset($_POST['username']) && isset($_POST['password']))
    {
// username and password sent from Form
$username=mysqli_real_escape_string($db,$_POST['username']); 
$password=mysqli_real_escape_string($db,$_POST['password']); 

$result=mysqli_query($db,"SELECT usuario FROM usuarios WHERE usuario='$username' and password='$password'");
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

// If result matched $username and $password, table row  must be 1 row
if($count==1)
{
$_SESSION['login_user']=$row['usuario']; //Storing user session value.
echo $row['usuario'];
}
}
?>