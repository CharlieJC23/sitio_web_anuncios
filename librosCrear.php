<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libros</title>
    <?php include('templates/header.php'); 
    include('configlibros/db_connect.php');
    
    $query="SELECT id,categoria FROM categoria";
    $consultaCat=$mysqli->query($query);
    $queryid="SELECT * FROM idiomas";
    $consultaidioma=$mysqli->query($queryid);
    $querylibreria="SELECT id,libreria FROM libreria";
    $consultalibreria=$mysqli->query($querylibreria);
    ?>
</head>
<body>
    <!--Panel-->
    <div class="col-sm-6 central" style="width: auto; margin: auto auto;" >
        <div class="card" text-center>
            <div class="card-body">
                <!--INICIO CUESTIONARIO------------------------------------------------------------------->
                <form  action="controllerLibros/agregarLibro.php" method="post">
                <h3 class="card-title" >Agregar nuevo libro</h3><br><br>
                <div class="form-row">
                    <div class="col">
                        <label class="card-text">Ingrese el titulo:</label><br>
                        <input type="text" id="titulo" name="titulo" class="form-control form-control-sm" required="required" />
               <!-- <div id="mensaje1" class="errores"> Dato no valido</div>-->
                   </div>
                   <div class="col">
                        <label class="card-text">Ingrese la editorial:</label><br>
                        <input type="text" id="editorial" name="editorial" class="form-control form-control-sm" required="required" /><br>
                    </div>
               </div>
                <label class="card-text">Ingrese el autor: </label>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Nombre" required="required">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="autorap" name="autorap" placeholder="Apellido Paterno" required="required">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="autoram" name="autoram" placeholder="Apellido Materno" >
                    </div>
                </div><br>
                <div class="form-row">
                    <div class="col">
                        <label class="card-text">Ingrese la categoria:</label><br>
                        <select class="form-control" id="cat" name="cat" required="required">
                        <?php while($fila=$consultaCat->fetch_assoc()){?>
                            <option value="<?php echo $fila['id'];?>"><?php echo $fila['categoria'];?></option>  
                            <?php }?>
                        </select>
                        
                    </div>  
                    <div class="col">
                        <label class="card-text">Ingrese la fecha de cuando fue escrito:</label><br>
                        <input type="date" id="fecha" name="fecha" class="form-control form-control-sm"/><br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label class="card-text">Ingrese el idioma del libro:</label><br>
                        <select class="form-control" id="idioma" name="idioma" required="required">
                            <?php while($fila=$consultaidioma->fetch_assoc()){?>
                                <option value="<?php echo $fila['id'];?>"><?php echo $fila['idioma'];?></option>  
                            <?php }?> 
                        </select>
                    </div>
                    <div class="col">
                        <label class="card-text">Ingrese la libreria :</label><br>
                        <select class="form-control" id="libreria" name="libreria" required="required">
                        <option data-toggle="modal" data-target="#exampleModal">Agregar libreria</option>
                        <?php while($fila=$consultalibreria->fetch_assoc()){?>
                                <option value="<?php echo $fila['id'];?>"><?php echo $fila['libreria'];?></option>  
                            <?php }?>  
                        </select>
                     </div>
                </div>  
                <div class="form-row">
                    <div class="col">
                        <label class="card-text">Ingrese el precio del libro:</label><br>
                         <input type='number' step='0.01' value='0.00' placeholder='0.00' id="precio" name="precio" class="form-control form-control-sm"/><br>
                    </div>
                    <div class="col">
                     </div>
                </div>   
                <center><input id="btn" type="submit"  value="Guardar" class="btn btn-success"  style="width: 330px; 
                     height: 40px; margin: 0 auto;  justify-content: center;"/></center>
                        </form><br>
            </div>
        </div>
    </div><br>
<!-- Modal  para agregar libreria --------------------------------------------------------------------------------------->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                    <!-----------------------------------------FORMULARIO------------------------------------------------->
            <form action="controllerLibros/agregarLibreria.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Libreria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--INICIO CUESTIONARIO------------------------------------------------------------------->
                <div class="modal-body">
                    <label class="card-text">*Ingrese el nombre:</label><br>
                     <div class="form-group">
                         <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required="required" />
                        </div>
                        <!--<div id="mensaje1" class="errores"> Dato no valido</div>-->
                        <label class="card-text">Ingrese la ubicacion: </label>
                        <div class="form-group">
                            <input type="text" id="ubicacion" name="ubicacion"  class="form-control form-control-sm" />
                        </div>
                        <label class="card-text">Ingrese su pagina web (en caso de tener):</label><br>
                        <div class="form-group">
                            <input type="url" id="pagina" name="pagina" class="form-control form-control-sm" />
                        </div>
                        <label class="card-text">Ingrese el horario:</label><br>
                        <div class="form-group">
                            <input type="text" id="horario" name="horario" class="form-control form-control-sm" placeholder="8:00-5:00"/>
                        </div>
                        <label class="card-text">Ingrese el numero telefonico:</label><br>
                        <div class="form-group">
                            <input type="text" id="tel" name="tel" class="form-control form-control-sm" />
                        </div>
                        <label class="card-text">Ingrese los dias laborales:</label><br>
                        <div class="form-group">
                            <input type="text" id="diaslaborales" name="diaslaborales" class="form-control form-control-sm" placeholder="lunes a viernes" />
                        </div>
                        <label class="card-text">Ingrese el email:</label><br>
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control form-control-sm" />
                        </div>
                </div>
                    <!------------------------------------------------------------------------------------------>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="submitSave" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- FIN Modal --------------------------------------------------------------------------------------->
<!---------------------------------------------footer------------------------------------------------------------------------->
<?php include('templates/footer.php');?>
</body>
</html>