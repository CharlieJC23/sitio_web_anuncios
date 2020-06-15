<?php include("../Conexion.php"); ?>

<?php 

    if(isset($_POST['update']))
    {
        $id_cliente = $_SESSION['id_cliente'];
        $id_restaurante = $_GET['restaurante'];
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $desde = $_POST['desde'];
        $hasta = $_POST['hasta'];
        
        $query = "UPDATE Restaurantes 
                  SET Nombre = '$nombre', Tipo = '$tipo', Desde = '$desde', Hasta = '$hasta'
                  WHERE Id_Restaurante = $id_restaurante";
        
        $result = mysqli_query($conn, $query);

        if($result)
        {
            $_SESSION['message'] = 'Actualizado';
            $_SESSION['message_type'] = 'success';

            Header("Location:../../Paginas/Restaurante.php");
        
        } else {

            die("Imposible de Actualizar");

            $_SESSION['message'] = 'Imposible Actualizar';
            $_SESSION['message_type'] = 'danger';

            Header("Location:../../Paginas/Restaurante.php");
        }
    }
?>    