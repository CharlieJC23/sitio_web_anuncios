<?php include("../Conexion.php"); ?>

<?php 

if(isset($_POST['create']))
{
    $id_cliente = $_SESSION['id_cliente'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];

    $query = "INSERT INTO Restaurantes (Id_Cliente, Nombre, Tipo, Desde, Hasta) 
              VALUES ('$id_cliente','$nombre','$tipo', '$desde', '$hasta')";
    $result = mysqli_query($conn, $query); 

    if($result)
    {
        $_SESSION['message'] = 'Guardado';
        $_SESSION['message_type'] = 'success';

        Header("Location:../../Paginas/Restaurante.php"); 
    
    } else {

        die("Imposible de Agregar");

        $_SESSION['message'] = 'Imposible Agregar';
        $_SESSION['message_type'] = 'danger';

        Header("Location:../../Paginas/Restaurante.php"); 
    }
}

?>