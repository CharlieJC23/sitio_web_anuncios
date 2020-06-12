<?php
//conexion a la base de datos
include('../configlibros/db_connect.php');
//obteniendo las variables por metodo Post
$editorial=$_POST['editorial'];
$pais=$_POST['pais'];
//insertando en la bd
//INSERT INTO libreria('$camposbd') VALUES('$campos'); 
$query="INSERT INTO editorial(editorial,pais) VALUES('$editorial','$pais')";
if($mysqli->query($query)){
//echo "Datos guardados";
header('Location: ../librosCrear.php');
}else{
    //si hay errores muestra el error sy es de mysql
    echo("Error description: " . $mysqli -> error);
}

$mysqli -> close();
?>