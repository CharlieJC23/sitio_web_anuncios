<?php include("../Conexion.php"); ?>

<?php 

if(isset($_POST['read']))
{
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    $query = "SELECT Id_Cliente 
              FROM Clientes 
              WHERE Usuario = '$usuario' AND Contrasenia = '$contrasenia'";
    $result = mysqli_query($conn, $query); 
   
    if(mysqli_num_rows($result) == 1)
    {
        $row = mysqli_fetch_array($result);

        $id_cliente = $row['Id_Cliente'];

       Header("Location:../../Paginas/Index.php?cliente=$id_cliente");
       

    } else {

        $_SESSION['message'] = 'Usuario o Contraseña incorrecto';
        $_SESSION['message_type'] = 'danger';

        Header("");
    }
}

?>