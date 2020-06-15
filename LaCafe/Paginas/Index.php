<?php include("../Database/Conexion.php"); ?>

<?php include("../Include/Header.php"); ?>

<?php 
    
    $_SESSION['id_cliente'] = $_GET['cliente'];
    
?>

    <link rel="stylesheet" href="../CSS/Index_Style.css">

    <div class="barraMenu">
    
        <a href="../../Index.php" class="btn btn-danger">
            Inicio
        </a>

        <a href="Restaurante.php" class="btn btn-danger">
            Restaurante
        </a>

        <a href="Menu.php" class="btn btn-danger">
            Menu
        </a>

        <a href="Tarjeta.php" class="btn btn-danger">
            Método de Pago
        </a>

    </div>


    <div class="logo">
    
        <img src="../Images/Logo.png" alt="Logo La Cafe">

    </div>

<?php include("../Include/Footer.php") ?>
