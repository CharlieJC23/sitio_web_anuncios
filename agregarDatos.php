<?php

include 'database.php';

$conexion = conexion();

$año = $_POST['año'];
$genero = $_POST['gen'];
$autor = $_POST['autor'];
$nombreserie = $_POST['nomserie'];
$plataforma = $_POST['plataform'];

$sql = "INSERT into series 
                    ('año_lanzamiento', 
                    'genero', 
                    'autor', 
                    'nombre_serie', 
                    'plataforma') values ('" . $año . "','"  . $genero . "','"  . $autor . "','"  . $nombreserie . "','"  . $plataforma . "')";

mysqli_query($conexion, $sql);

if ($sql) {
    echo "Dato insertado correctamente";
} else {

    echo "Error al insertar";
}
