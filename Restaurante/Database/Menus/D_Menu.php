<?php 

include("../Conexion.php");

if(isset($_GET['menu']))
{
    $id_menu= $_GET['menu'];

    $result = $query = "DELETE FROM Menus 
                        WHERE Id_Menu = $id_menu";
    mysqli_query($conn, $query);

    if($result)
    {
        $_SESSION['message'] = "Eliminado";
        $_SESSION['message_type'] = "danger";
    
        Header("Location:../../Paginas/Menu.php");

    } else {

        die("Imposible de Eliminar");

        $_SESSION['message'] = 'Imposible Eliminar';
        $_SESSION['message_type'] = 'danger';

        Header("Location:../../Paginas/Menu.php");
    }
}


?>