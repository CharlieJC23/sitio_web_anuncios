<?php
//conexion a la base de datos
include('../configlibros/db_connect.php');
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$cat=$_POST['cat'];
$editorial=$_POST['editorial'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$cat=$_POST['cat'];
$editorial=$_POST['editorial'];
$query="INSERT INTO libro(titulo,autor,categoria,editorial) VALUES('$titulo','$autor','$cat','$editorial')";
if($mysqli->query($query)){
//echo "Datos guardados";
header('Location: ../inicio.php');
}else{
echo "Ocurrio un error";
}
?>