<?php
//conexion a la base de datos
include('../configlibros/db_connect.php');
//obteniendo las variables por metodo Post
$nombre=$_POST['nombre'];
$ubicacion=$_POST['ubicacion'];
$pagina=$_POST['pagina'];
$horario=$_POST['horario'];
$tel=$_POST['tel'];
$diaslaborales=$_POST['diaslaborales'];
$email=$_POST['email'];
//insertando en la bd
//INSERT INTO libreria('$camposbd') VALUES('$campos'); 
$query="INSERT INTO libreria(libreria,ubicacion,direccionweb,horario,numero,diaslaborales,email) VALUES('$nombre','$ubicacion','$pagina','$horario','$tel','$diaslaborales','$email')";
if($mysqli->query($query)){
//echo "Datos guardados";
header('Location: ../librosCrear.php');
}else{
    //si hay errores muestra el error sy es de mysql
    echo("Error description: " . $mysqli -> error);
}

$mysqli -> close();
?>