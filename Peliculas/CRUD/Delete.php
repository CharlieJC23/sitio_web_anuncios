<?php 

include("../Conexion.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $result = $query = "DELETE FROM descripcion_pelis WHERE id = $id";
    mysqli_query($conn, $query);

    if(!$result)
    {
        die("Imposible de Eliminar");
    }

    $_SESSION['message'] = "Eliminado";
    $_SESSION['message_type'] = "danger";

    header("Location: Catalogo.php");
}

?>