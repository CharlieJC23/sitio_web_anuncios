<!DOCTYPE html>
<html>
<head>
    
    <?php include('templates/nav.php'); ?>
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script> 
 <script src="resources/js/validacioneslibros.js"></script> 
 
 ?>
</head> 
<body> 
<button type="button"  data-toggle="modal" data-target="#exampleModal" >Libreria</button><br>
<!-- Modal  para agregar libreria --------------------------------------------------------------------------------------->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                    <!-----------------------------------------FORMULARIO------------------------------------------------->
            <form action="controllerLibros/agregarLibreria" method="post" id="formLibreria">
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
                         <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required="required" onBlur="validateInputR(this);"/>
                        </div>
                        <!--<div id="mensaje1" class="errores"> Dato no valido</div>-->
                        <label class="card-text">Ingrese la ubicacion: </label>
                        <div class="form-group">
                            <input type="text" id="ubicacion" name="ubicacion"  class="form-control form-control-sm" />
                        </div>
                        <label class="card-text">Ingrese su pagina web (en caso de tener):</label><br>
                        <div class="form-group">
                            <input type="url" id="pagina" name="pagina" class="form-control form-control-sm" onBlur="validateInputUrl(this);" />
                        </div>
                        <label class="card-text">Ingrese el numero telefonico:</label><br>
                        <div class="form-group">
                            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="xxx-xxx-xxxx" id="tel" name="tel" class="form-control form-control-sm" />
                        </div>
                        <label class="card-text">Ingrese su email:</label><br>
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control form-control-sm" onBlur="validateInputEmail(this);"/>
                        </div>
                </div>
                    <!------------------------------------------------------------------------------------------>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="submitSave" class="btn btn-primary">Aceptar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<form action="controllerLibros/agregar" name="idf" id="formEditorial" method="post" onBlur="ValidarClicSubmit(this)">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Editorial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Escribe el nombre de la editorial</h4>
                    <div class="form-group">
                        <input type="text" class="form-control" name="editorial" id="editorial" 
                        required="required" onBlur="validateInputR(this);" >
                        
                     </div>
                </div>
                <div class="modal-body">
                    <h4>Selecciona el pais</h4>
                    <div class="form-group">
                        <select class="form-control" id="pais" name="pais" required="required" onBlur="validarSelect(this)">
                        <option value="">------</option>
                             <option value="Alemania">Alemania</option>
                             <option value="Argentina">Argentina</option>
                             <option value="Australia">Australia</option>
                             <option value="Austria">Austria</option>
                             <option value="Bélgica">Bélgica</option>
                             <option value="Bolivia">Bolivia</option>
                             <option value="Brasil">Brasil</option>
                             <option value="Chile">Chile</option>
                             <option value="China">China</option>
                             <option value="Colombia">Colombia</option>
                             <option value="España">España</option>
                             <option value="Estados Unidos">Estados Unidos</option>
                             <option value="Francia">Francia</option>
                             <option value="Japón">Japón</option>
                             <option value="Italia">Italia</option>
                             <option value="México">México</option>
                             <option value="Panamá">Panamá</option>
                             <option value="Perú">Perú</option>
           </select>
                     </div>
                </div>
                </div><div class="form-row"><div id="alertlib" style="display: none">FALTA ALGO</div></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cerrar</button>
                    <button type="submit" name="submitSave" class="btn btn-primary" id="btn">Aceptar</button>
                </div>
            </form>
</body> 
</html>