<?php
//conexion a la base de datos
include('../configlibros/db_connect.php');
//obteniendo las variables por metodo Post
$nombre=$_POST['nombre'];
$ubicacion=$_POST['ubicacion'];
$pagina=$_POST['pagina'];
$tel=$_POST['tel'];
$email=$_POST['email'];
//insertando en la bd
//INSERT INTO libreria('$camposbd') VALUES('$campos'); 
$query="INSERT INTO libreria(libreria,ubicacion,direccionweb,numero,email) VALUES('$nombre','$ubicacion','$pagina','$tel','$email')";
if($mysqli->query($query)){
//echo "Datos guardados";
header('Location: ../librosCrear.php');
}else{
    //si hay errores muestra el error sy es de mysql
    echo("Error description: " . $mysqli -> error);
}

$mysqli -> close();
?>