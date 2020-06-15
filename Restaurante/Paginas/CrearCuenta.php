<?php include("../Database/Conexion.php"); ?>

<?php include("../Include/Header.php"); ?>

<script src="../JQuery/SignIn.js"> </script>

<link rel="stylesheet" href="../CSS/CrearCuenta_Style.css">

<div class="barraMenu">

    <a href="../../Index.php" class="btn btn-danger">
        Inicio
    </a>

</div>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-4">

            <div class = "card card-body bg-dark">

                <form action="../Database/Cuenta/C_Cuenta.php" method="POST">

                    <div>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                    </div>

                    <div>
                        <input type="text" id="paterno" name="paterno" class="form-control" placeholder="Apellido Paterno">
                    </div>

                    <div>
                        <input type="text" id="materno" name="materno" class="form-control" placeholder="Apellido Materno">
                    </div>

                    <div>
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono">
                    </div>
            
                    <div>
                        <input type="text" id="correo" name="correo" class="form-control" placeholder="Correo Electronico">
                    </div>

                    <div>
                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario">
                    </div>        
                    
                    <div>
                        <input type="password" id="contrasenia" name="contrasenia" class="form-control" placeholder="Contraseña">
                    </div> 

                    <div>
                        <input type="password" id="c_contrasenia" name="c_contrasenia" class="form-control" placeholder="Confirma Contraseña">
                    </div> 

                    <div>      
                        <input type="submit" id="create" name="create" class="form-control" value="Crear Cuenta">
                    </div>

                </form>

            </div>    

        </div>

    </div>

</div>    

<?php include("../Include/Footer.php") ?>