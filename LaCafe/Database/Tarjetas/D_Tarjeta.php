<?php 

include("../Conexion.php");

if(isset($_GET['tarjeta']))
{
    $id_tarjeta = $_GET['tarjeta'];

    $result = $query = "DELETE FROM Tarjetas 
                        WHERE Id_Tarjeta = $id_tarjeta";
    mysqli_query($conn, $query);

    if($result)
    {
        $_SESSION['message'] = "Eliminado";
        $_SESSION['message_type'] = "danger";
    
        Header("Location:../../Paginas/Tarjeta.php");

    } else {

        die("Imposible de Eliminar");

        $_SESSION['message'] = 'Imposible Eliminar';
        $_SESSION['message_type'] = 'danger';

        Header("Location:../../Paginas/Tarjeta.php");
    }
}

?>