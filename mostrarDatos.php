<?php
include "database.php";

$conexion = conexion();

$sql = "SELECT * from series";
$result = $conexion->query($sql);

$tabla = "";

while ($datos = $result->fetch_assoc()) {
    $tabla = $tabla . '<tr>
                        <td>' . $datos['titulo_id'] . '</td>
                        <td>' . $datos['año_lanzamiento'] . '</td>
                        <td>' . $datos['genero'] . '</td>
                        <td>' . $datos['autor'] . '</td>
                        <td>' . $datos['nombre_serie'] . '</td>
                        <td>' . $datos['plataforma'] . '</td>
                        <td>
                            <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#actualizar"><i class="fa fa-edit"></i></span>
                        </td>
                        <td>
                            <span class="btn btn-danger btn-sm" onclick="eliminarDatos()"><i class="fa fa-trash"></i></span>
                        </td>
                    </tr>';
}

$conexion->close();

echo '<table class="table table-stripped">
        <thead>
            <th>ID del Titulo</th>
            <th>Año de Lanzamiento</th>
            <th>Genero</th>
            <th>Autor</th>
            <th>Nombre de la Serie</th>
            <th>Plataforma</th>
        </thead>
        <tbody>
            ' . $tabla . '
        </tbody>';
