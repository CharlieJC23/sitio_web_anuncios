<?php 

include("../Conexion.php");

if(isset($_GET['restaurante']))
{
    $id_restaurante = $_GET['restaurante'];

    $result = $query = "DELETE FROM Restaurantes 
                        WHERE Id_Restaurante = $id_restaurante";
    mysqli_query($conn, $query);

    if($result)
    {
        $_SESSION['message'] = "Eliminado";
        $_SESSION['message_type'] = "danger";
    
        Header("Location:../../Paginas/Restaurante.php");

    } else {

        die("Imposible de Eliminar");

        $_SESSION['message'] = 'Imposible Eliminar';
        $_SESSION['message_type'] = 'danger';

        Header("Location:../../Paginas/Restaurante.php");
    }
}


?>