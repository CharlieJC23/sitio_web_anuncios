<?php include("../Database/Conexion.php"); ?>

<?php include("../Include/Header.php"); ?>

<script src="../JQuery/C_Restaurante.js"> </script>

<link rel="stylesheet" href="../CSS/Restaurante_Style.css">

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

    <div class="container">

        <div class="row ">

            <div class="col-md-4">
                
                <div class = "card card-body bg-dark">

                    <form action="../Database/Restaurantes/C_Restaurante.php"  method="POST">

                        <div class="bg-dark text-dark">
                            <h4 class="text-light"> Restaurante </h4>
                        </div>

                        <div class = "card card-body">

                            <table>
                            
                                <tr>
                                
                                    <div>
                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                                    </div>
                                        
                                    <div>
                                        <input type="text" id="tipo" name="tipo" class="form-control" placeholder="Tipo">
                                    <div>

                                    <div>
                                        <td>
                                            <input type="text" id="desde" name="desde" class="form-control" placeholder="Desde">
                                        </td>

                                        <td>
                                            <input type="text" id="hasta" name="hasta" class="form-control" placeholder="Hasta">
                                        </td>
                                    </div>
                                </tr>

                            </table> 

                            <div>         
                                <input type="submit" id="create" name="create" class="form-control" value="Agregar">
                            </div> 

                        </div>

                    </form>

                </div>

            </div>


            <div class="col-md-8 bg-dark">

                <div class = "card card-body">

                    <table>
                
                        <thead class="encabezado">

                            <tr>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Desde</th>
                                <th>Hasta</th>
                                <th>Acciones</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php include("../Database/Restaurantes/R_Restaurante.php"); ?>

                        </tbody>
                        
                    </table>

                </div>

            </div>    

        </div> 

    </div>

<?php include("../Include/Footer.php") ?>