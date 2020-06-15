<?php include("../Conexion.php"); ?>

<?php 

    if(isset($_POST['update']))
    {
        $id_menu = $_GET['menu'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];
        $kcal = $_POST['kcal'];
        $precio = $_POST['precio'];
        
        $query = "UPDATE Menus 
                     SET Nombre = '$nombre', Descripcion = '$descripcion', Categoria = '$categoria', Kcal = '$kcal', Precio = '$precio'
                   WHERE Id_Menu = $id_menu";
        
        $result = mysqli_query($conn, $query);

        if($result)
        {
            $_SESSION['message'] = 'Actualizado';
            $_SESSION['message_type'] = 'success';

            Header("Location:../../Paginas/Menu.php");
        
        } else {

            die("Imposible de Actualizar");

            $_SESSION['message'] = 'Imposible Actualizar';
            $_SESSION['message_type'] = 'danger';

            Header("Location:../../Paginas/Menu.php");
        }
    }
?>    