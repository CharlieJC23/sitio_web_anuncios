<?php

include 'database.php';

$conexion = conexion();

//mediante el uso de real_scape_string proporcionamos seguridad para evitar inyeccion de datos en la pagina
$datos = array(
    $conexion->real_escape_string($_POST['idserie']),
    $conexion->real_escape_string($_POST['año']),
    $conexion->real_escape_string($_POST['gen']),
    $conexion->real_escape_string($_POST['autor']),
    $conexion->real_escape_string($_POST['nomserie']),
    $conexion->real_escape_string($_POST['plataform'])
);

$sql = "INSERT INTO series ('id', 'año_lanzamiento', 'genero', 'autor', 'nombre_serie', 'plataforma') VALUES (?, ?, ?, ?, ?, ?)";

$query = $conexion->prepare($sql);

echo $query->execute();

$query->close();