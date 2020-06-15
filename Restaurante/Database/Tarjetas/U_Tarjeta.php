<?php include("../Conexion.php"); ?>

<?php 

    if(isset($_POST['update']))
    {
        $id_tarjeta = $_GET['tarjeta'];
        $num_tarjeta = $_POST['num_tarjeta'];
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        $codigo = $_POST['codigo'];
        
        $query = "UPDATE Tarjetas 
                  SET Num_Tarjeta = '$num_tarjeta', Mes = '$mes', Anio = '$anio', Codigo = '$codigo'
                  WHERE Id_Tarjeta = $id_tarjeta";
        
        $result = mysqli_query($conn, $query);

        if($result)
        {
            $_SESSION['message'] = 'Actualizado';
            $_SESSION['message_type'] = 'success';

            Header("Location:../../Paginas/Tarjeta.php");
        
        } else {

            die("Imposible de Actualizar");

            $_SESSION['message'] = 'Imposible Actualizar';
            $_SESSION['message_type'] = 'danger';

            Header("Location:../../Paginas/Tarjeta.php");
        }
    }
?>    