<?php
function conexion()
{
    $conexion = new mysqli("localhost", "root", "", "unidad5");

    if ($conexion->connect_errno) {
        echo "Fallo al conectar con la bd..." . $conexion->connect_error;
    }

    $conexion->set_charset("utf8");
    return $conexion;
}
