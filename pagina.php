<!DOCTYPE html>
<html>
<head>
    
    <?php include('templates/nav.php'); ?>
<link href="https://fonts.googleapis.com/css?family=Libre+Backerville:400,700" rel="stylesheet" type="text/css">

</head>
<body>
</div>
<style>
#formjquery {
	font-family: 'Open Sans', sans-serif;
}
input {
	margin:4px;
	padding:4px;
}
.inicio {
	color: rgb(55, 55, 55);
	background: #EFEFEF;
	border: 1px solid rgb(199, 199, 199);
	padding: 4px 8px;
	border-radius: 3px;
}
.ok {
  color: rgb(9, 97, 20);
  background: #B3FFBA;
  border: 1px solid rgb(42, 155, 18);
  padding: 4px 8px;
  border-radius: 3px;
}
</style>
<script>
function validar(){
	
	nombre=$('#nombre').val();
	correo=$('#correo').val();
	telefono=$('#telefono').val();
	autor=$('#autor').val();
    if (autor==''){
		$('#respuesta_autor').removeClass().addClass('inicio');
	}
	else {
		$('#respuesta_autor').removeClass().addClass('ok');
	}
    
	if (nombre==''){
		$('#respuesta_nombre').removeClass().addClass('inicio');
	}
	else {
		$('#respuesta_nombre').removeClass().addClass('ok');
	}
	
	if (correo==''){
		$('#respuesta_correo').removeClass().addClass('inicio');
	}
	else {
		$('#respuesta_correo').removeClass().addClass('ok');
	}
	
	if (telefono==''){
		$('#respuesta_telefono').removeClass().addClass('inicio');
	}
	else {
		$('#respuesta_telefono').removeClass().addClass('ok');
	}
	
	
	
	
	if (nombre=='' || correo=='' || telefono==''){
		return false;
		}
		else return true;

}

</script>


<form method="post" action="http://datoweb.com" onSubmit="return validar();" id="formjquery">

<input type="text" name="nombre" id="nombre" value="" onBlur="validar();" autofocus>
<span class="inicio" id="respuesta_nombre">Introduce tu nombre</span>
<br>


<input type="text" name="correo" id="correo" value="" onBlur="validar();">
<span class="inicio" id="respuesta_correo">Introduce tu email</span>
<br>


<input type="text" name="telefono" id="telefono" value="" onBlur="validar();">
<span class="inicio" id="respuesta_telefono">Introduce tu tel&eacute;fono</span>
<br>
<input type="text" class="form-control" id="autor" name="autor" placeholder="Nombre" required="required" onBlur="validar();">
<span class="inicio" id="respuesta_autor">Introduce tu tel&eacute;fono</span>
<br>

<input type="submit" id="btn_send" value="Enviar" onClick="validar();" style="margin-left: 127px; padding: 4px 8px">
<br>
</form>
<div class="col-sm-6 central" style="width: auto; margin: auto auto;" >
        <div class="card" text-center>
            <div class="card-body">
<form enctype="multipart/form-data" action="controllerLibros/agrega.php" method="post" onSubmit="return validar();">
                <h3 class="card-title" >Agregar nuevo libro</h3><br><br>
                
               <label class="card-text">Ingrese el autor: </label>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Nombre" required="required" onBlur="validar();">
                        <br><span class="inicio" id="respuesta_autor">Introduce autor</span>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="autorap" name="autorap" placeholder="Apellido Paterno" required="required">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="autoram" name="autoram" placeholder="Apellido Materno" >
                    </div>
                </div><br>   
             </form>  
             </div>
            </div>
          </div>   
</body>
</html>