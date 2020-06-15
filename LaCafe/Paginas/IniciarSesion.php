<?php include("../Database/Conexion.php"); ?>

<?php include("../Include/Header.php"); ?>

    <div class="contenedor">

        <div class="crearCuenta">

            <form action="../Database/Cuenta/R_Cuenta.php" method="POST">

                <div class="form-group">
                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario">
                </div>

                <div class="form-group">
                    <input type="text" id="contrasenia" name="contrasenia" class="form-control" placeholder="Contrasenia">
                </div>

                <div class="form-group">         
                    <input type="submit" id="read" name="read" class="" value="Iniciar Sesión">
                </div>

            </form>

        </div>

    </div>

<?php include("../Include/Footer.php") ?>