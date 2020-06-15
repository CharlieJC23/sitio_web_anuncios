<?php include("../Database/Conexion.php"); ?>

<?php include("../Include/Header.php"); ?>

<script src="../JQuery/C_Tarjeta.js"> </script>

<link rel="stylesheet" href="../CSS/Tarjeta_Style.css">

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

                    <form action="../Database/Tarjetas/C_Tarjeta.php"  method="POST">

                        <div class="bg-dark text-dark">
                            <h4 class="text-light"> Tarjeta </h4>
                        </div>

                        <div class = "card card-body">

                            <table>
                            
                                <tr>
                                
                                    <div>
                                        <input type="text" id="num_tarjeta" name="num_tarjeta" class="form-control" placeholder="Número de tarjeta">
                                    </div>
                                        
                                    <div>
                                        <td>
                                            <input type="text" id="mes" name="mes" class="form-control" placeholder="Mes">
                                        </td>
                                        <td>
                                            <input type="text" id="anio" name="anio" class="form-control" placeholder="Año">
                                        </td>

                                    </div>

                                    <div>
                                        <input type="text" id="codigo" name="codigo" class="form-control" placeholder="Código">
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
                                <th>Número</th>
                                <th>Mes</th>
                                <th>Anio</th>
                                <th>Código</th>
                                <th>Acciones</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php include("../Database/Tarjetas/R_Tarjeta.php"); ?>

                        </tbody>
                        
                    </table>

                </div>

            </div>    

        </div> 

    </div>

<?php include("../Include/Footer.php") ?>