<?php include("../Conexion.php"); ?>

<?php 

if(isset($_POST['create']))
{
    $id_cliente = $_SESSION['id_cliente'];
    $id_restaurante = $_GET['restaurante'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $kcal = $_POST['kcal'];
    $precio = $_POST['precio'];

    $query = "INSERT INTO Menus (Id_Restaurante, Nombre, Descripcion, Categoria, Kcal, Precio) 
              VALUES ('$id_restaurante', '$nombre', '$descripcion', '$categoria', '$kcal', '$precio')";
    $result = mysqli_query($conn, $query); 

    if($result)
    {
        $_SESSION['message'] = 'Guardado';
        $_SESSION['message_type'] = 'success';

        Header("Location:../../Paginas/Menu.php");
    
    } else {

        die("Imposible de Agregar");

        $_SESSION['message'] = 'Imposible Agregar';
        $_SESSION['message_type'] = 'danger';

        Header("Location:../../Paginas/Menu.php");
    }
}

?>