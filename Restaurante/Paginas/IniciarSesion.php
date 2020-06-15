<?php include("../Database/Conexion.php"); ?>

<?php include("../Include/Header.php"); ?>

<script src="../JQuery/Login.js"> </script>

<link rel="stylesheet" href="../CSS/IniciarSesion_Style.css">

<div class="barraMenu">

    <a href="../../Index.php" class="btn btn-danger">
        Inicio
    </a>

</div>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-4">

            <div class = "card card-body bg-dark">

                <form action="../Database/Cuenta/R_Cuenta.php" method="POST">

                    <div class="form-group">
                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario">
                    </div>

                    <div class="form-group">
                        <input type="password" id="contrasenia" name="contrasenia" class="form-control" placeholder="Contrasenia">
                    </div>

                    <div class="form-group">         
                        <input type="submit" id="read" name="read" class="form-control" value="Iniciar Sesión">
                    </div>

                </form>

            </div>

        </div>

    </div>

</div>        

<?php include("../Include/Footer.php") ?>