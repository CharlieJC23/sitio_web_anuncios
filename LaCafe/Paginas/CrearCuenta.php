<?php include("../Database/Conexion.php"); ?>

<?php include("../Include/Header.php"); ?>

    <div class="contenedor">

        <div class="crearCuenta">

            <form action="../Database/Cuenta/C_Cuenta.php" method="POST">

                <div class="form-group">
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="First Name">
                </div>

                <div class="form-group">
                    <input type="text" id="paterno" name="paterno" class="form-control" placeholder="Middle Name">
                </div>

                <div class="form-group">
                    <input type="text" id="materno" name="materno" class="form-control" placeholder="Last Name">
                </div>

                <div class="form-group">
                    <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Phone Number">
                </div>
        
                <div class="form-group">
                    <input type="text" id="correo" name="correo" class="form-control" placeholder="Email">
                </div>

                <div class="form-group">
                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="User">
                </div>        
                
                <div class="form-group">
                    <input type="text" id="contrasenia" name="contrasenia" class="form-control" placeholder="Password">
                </div> 

                <div class="form-group">         
                    <input type="submit" id="create" name="create" class="" value="Crear Cuenta">
                </div>

            </form>

        </div>

    </div>

<?php include("../Include/Footer.php") ?>