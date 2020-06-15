<?php

include("../Conexion.php");

if(isset($_POST['create']))
{
    $nombre = $_POST['nombre'];
    $imagen=$_POST['imagen'];
    $genero=$_POST['genero'];
    $durpeli=$_POST['durpeli'];
    $descp = $_POST['descp'];
    $fecha = $_POST['fecha'];
    $directores=$_POST['directores'];
    $premios=$_POST['premios'];

    $query = "INSERT INTO descripcion_pelis (Nombre, imagen, genero, durpeli,descp,fecha,directores,premios) VALUES ('$nombre','$imagen','$genero' ,'$durpeli', '$descp', '$fecha','$directores','$premios')";
    $result = mysqli_query($conn, $query); 

    if($result)
    {

        $_SESSION['message'] = 'Guardado';
        $_SESSION['message_type'] = 'success';

        Header("Location: Catalogo.php"); 
    
    } else {

        $_SESSION['message'] = 'Imposible Agregar';
        $_SESSION['message_type'] = 'Error';

        Header("Location: Catalogo.php"); 
        
        die("Imposible de Agregar");
    }
}

?>