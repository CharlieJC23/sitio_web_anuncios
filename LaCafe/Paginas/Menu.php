<?php include("../Database/Conexion.php"); ?>

<?php include("../Include/Header.php"); ?>

<script src="../JQuery/C_Menu.js"> </script>

<link rel="stylesheet" href="../CSS/Menu_Style.css">

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


    <div class="dropdown">
                
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            Restaurantes

        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

            <?php include("../Database/Menus/Desplegable.php"); ?>

        </div>

    </div>  

    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-md-3">
                
                <div class = "card card-body bg-dark">

                    <form action="../Database/Menus/C_Menu.php?restaurante=<?php $id_restaurante=$_GET['restaurante']; echo $id_restaurante ?> "  method="POST">

                        <div class="bg-dark text-dark">
                            <h4 class="text-light"> Menú </h4>
                        </div>

                        <div class = "card card-body">

                            <table>
                            
                                <tr>
                                
                                    <div>    
                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                                    </div>
                                        
                                    <div>
                                        <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Descripción">
                                    </div>

                                    <div>
                                        <input type="text" id="categoria" name="categoria" class="form-control" placeholder="Categoria">
                                    </div>

                                    <div>
                                        <input type="text" id="kcal" name="kcal" class="form-control" placeholder="kcal">
                                    </div>

                                    <div>
                                        <input type="text" id="precio" name="precio" class="form-control" placeholder="Precio">
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

                    <table >

                        <thead class="encabezado">

                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Categoria</th>
                                <th>Kcal</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php include("../Database/Menus/R_Menu.php"); ?>

                        </tbody>
                        
                    </table>

                </div>

            </div>

        </div>

    </div>

<?php include("../Include/Footer.php") ?>