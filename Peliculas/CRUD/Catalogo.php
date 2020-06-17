<?php include("../Conexion.php") ?>

<?php include("../includes/Header.php") ?>

<script src="../JQuery/Catalogo/Create.js"> </script>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4">


            <div class="card card-body">

                <form action="Create.php" method="POST">

                    <div class="p-3 mb-2 bg-dark text-dark">
                        <h4 class="text-light"> Catalogo de Peliculas </h4>
                    </div>

                    <div class="form-group">
                        <h6 class="text-secondary"> Nombre </h6>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="SpiderMan " autofocus>
                    </div>

                    <div class="form-group">
                        <h6 class="text-secondary"> Upload Image </h6>
                        <input type="file" name="imagen" />
                    </div>


                    <div class="form-group" style=" height: 200;width:150;">
                        <h6 class="text-secondary"> Genero </h6>


                        <select name="genero" id="genero" size="8" >
                            <option value="animacion" selected="selected">Animacion</option>
                            <option value="ciencia_ficcion">Ciencia ficcion</option>
                            <option value="comedia">Comedia</option>
                            <option value="familia">Familia</option>
                            <option value="infantiles">Infantiles</option>
                            <option value="romance">Romance</option>
                            <option value="suspenso">Suspenso</option>
                            <option value="terror">Terror</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <h6 class="text-secondary"> Duracion de la Pelicula </h6>
                        <input type="text" name="durPeli" id="durpeli" class="form-control" placeholder="120min">
                    </div>

                    <div class="form-group">
                        <h6 class="text-secondary"> Descripcion </h6>
                        <textarea name="descp" id="descp" cols="20" rows="4" style="width:300px; height:80px;"> </textarea>

                    </div>

                    <div class="form-group">
                        <h6 class="text-secondary"> Fecha de estreno </h6>
                        <input type="date" name="fecha" id="fecha" class="form-control">
                    </div>


                    <div class="form-group">
                        <h6 class="text-secondary"> Directores </h6>
                        <input type="text" name="directores" id="directores" class="form-control" placeholder="Director Name">
                    </div>

                    <div class="form-group">
                        <h6 class="text-secondary"> Premios</h6>
                        <input type="text" name="premios" id="premios" class="form-control" placeholder="Premios Disney">
                    </div>

                    <input type="submit" name="create" id="create" class="btn btn-success btn-block" value="Guardar">

                </form>

            </div>

        </div>


        <div class="col-md-8">

            <table class="table table-bordered" style="background-color: burlywood; border: red 5px solid;" >

                
                <tbody  >

                    <?php include("Read.php"); ?>

                </tbody>

            </table>

        </div>

    </div>

</div>