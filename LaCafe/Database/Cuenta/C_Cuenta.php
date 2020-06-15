<?php include("../Conexion.php"); ?>

<?php 

if(isset($_POST['create']))
{
    $nombre = $_POST['nombre'];
    $ape_pat = $_POST['paterno'];
    $ape_mat = $_POST['materno'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    $query = "INSERT INTO Clientes (Nombre, Ape_Pat, Ape_Mat, Telefono, Correo, Usuario, Contrasenia) 
              VALUES ('$nombre', '$ape_pat', '$ape_mat', '$telefono', '$correo', '$usuario', '$contrasenia')";
    $result = mysqli_query($conn, $query); 

    if($result)
    {
        $_SESSION['message'] = 'Guardado';
        $_SESSION['message_type'] = 'success';
        
        Header("Location:../../Paginas/IniciarSesion.php"); 
    
    } else {

        $_SESSION['message'] = 'Imposible Agregar';
        $_SESSION['message_type'] = 'danger';

        Header("Location:../../Paginas/CrearCuenta.php"); 
    }
}

?>