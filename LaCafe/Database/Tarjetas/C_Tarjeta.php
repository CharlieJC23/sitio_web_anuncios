<?php include("../Conexion.php"); ?>

<?php 

if(isset($_POST['create']))
{
    $id_cliente = $_SESSION['id_cliente'];
    $num_tarjeta = $_POST['num_tarjeta'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    $codigo = $_POST['codigo'];

    $query = "INSERT INTO Tarjetas (Id_Cliente, Num_Tarjeta, Mes, Anio, Codigo) 
              VALUES ('$id_cliente','$num_tarjeta','$mes', '$anio', '$codigo')";
    $result = mysqli_query($conn, $query); 

    if($result)
    {
        $_SESSION['message'] = 'Guardado';
        $_SESSION['message_type'] = 'success';

        Header("Location:../../Paginas/Tarjeta.php"); 
    
    } else {

        die("Imposible de Agregar");

        $_SESSION['message'] = 'Imposible Agregar';
        $_SESSION['message_type'] = 'danger';

        Header("Location:../../Paginas/Tarjeta.php"); 
    }
}

?>