eliminarLibro.php
<?php 
//conexion a la base de datos
include('../configlibros/db_connect.php');
$id=$_GET['id'];
    $query="DELETE libro.*
    FROM libro, autor,categoria,editorial,idiomas,libreria WHERE 
    libro.autor = autor.id and categoria.id=libro.categoria and editorial.id=libro.editorial 
    and idiomas.id=libro.idioma and libreria.id=libro.libreria and libro.id=$id";
    if($mysqli->query($query)){
       // echo "Registro eliminado";
        header('Location: ../libros.php');
    }else{
        echo "Error no se pudo eliminar el registro";
    }
    
?>