<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libros</title>
    <?php  include('templates/nav.php'); 
    ?>
</head><style>
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
var RegExPattern = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
var errorMessage = 'Campo Incorrecto';
var varvalidar= false ;
//valida titulo, nombre y apellido paterno
function validatePass(campo) {
    if ((campo.value.match(RegExPattern)) && (campo.value!='')) {
         
        varvalidar= 'bien';
    } else {
        alert(errorMessage);
        campo.focus();
    } 
}
//validar los select
function validarSelect(campo){
    if (campo.value.trim() === '') {
        alert('Debe seleccionar una opción');
    } else {
        if (campo.value.trim() === '0') {
         $("#alertlib").show();
        $('#alertlib').html('agrege una editorial').sliceDown(300);
        }
    }
}
/*
function validatePass(campo) {
    if ((campo.value.match(RegExPattern)) && (campo.value!='')) {
        //alert('Password Correcta'); 
        varvalidar= 'bien';
    } else {
        alert(errorMessage);
        campo.focus();
    } 
}
//
/*
function validar(){
    //variables
    titulo=$('#titulo').val();
    correo=$('#editorial').val();
	telefono=$('#telefono').val();
	autor=$('#autor').val();
    //Regex
    if(!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i', titulo))
    {
        alert('El campo es requerido');
    }else{
        alert('birne');
    }

    /*
    if(titulo ==""){
        $("#alertlib").show();
        $('#alertlib').html('ingrese el titulo').sliceDown(300);
        $('#titulo').focus();
        if(expr.test(titulo)) { 
        $("#alertlib").show();
        $('#alertlib').html('titulo no valido').sliceDown(300);
        $('#titulo').focus();
        }else{ 
             $('#alertlib').hide();
            }
    }else{
    $('#alertlib').hide();
    if ($('#editorial').val().trim() === '') {
        $("#alertlib").show();
        $('#alertlib').html('Debe seleccionar una opción').sliceDown(300);
    } else {
        if ($('#editorial').val().trim() === '0') {
         $("#alertlib").show();
        $('#alertlib').html('agrege una editorial').sliceDown(300);
    } else {
       $('#alertlib').hide();
    }//fin de editorial =0
	
    }//fin de editorial
        }//fin titulo
    if (autor==''){
		$('#respuesta_autor').removeClass().addClass('inicio');
	}
	else {
		$('#respuesta_autor').removeClass().addClass('ok');
	}
	if (titulo==''){
		$('#respuesta_titulo').removeClass().addClass('inicio');
	}
	else {
		$('#respuesta_titulo').removeClass().addClass('ok');
	}
	if (titulo=='' || correo=='' || telefono==''){
		return false;
		}
        else return true;
        $('#btn').attr('disabled',false);

}*/

</script>

<body>
    <!--Panel-->
    <div class="col-sm-6 central" style="width: auto; margin: auto auto;" >
        <div class="card" text-center>
            <div class="card-body">
                <!--INICIO CUESTIONARIO------------------------------------------------------------------->
                <form enctype="multipart/form-data" action="controllerLibros/agregarLibro.php" method="post">
                <h3 class="card-title" >Agregar nuevo libro</h3><br><br>
                <div class="form-row">
                    <div class="col">
                        <label class="card-text">Ingrese el titulo:</label><br>
                        <input type="text" id="titulo" name="titulo" class="form-control form-control-sm" required="required" onBlur="validatePass(this);"/>
               <!-- <div id="mensaje1" class="errores"> Dato no valido</div>-->
                   </div>
                   <div class="col">
                        <label class="card-text">Ingrese la editorial:</label><br>
                        <select class="form-control" id="editorial" name="editorial" required="required" onBlur="validarSelect(this);">
                        <option data-toggle="modal" data-target="#exampleModal2" value="0">Agregar Editorial</option>
                        <?php// while($fila=$consultaeditorial->fetch_assoc()){?>
                                <option value="2<?php //echo $fila['id'];?>"> ferfef<?php //echo $fila['editorial'];?></option>  
                            <?php //}?>  
                        </select>
               </div>
               </div><div class="form-row"><div id="alertlib" style="display: none">sd</div></div>
                <label class="card-text">Ingrese el autor: </label>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Nombre" required="required" onBlur="validatePass(this);">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="autorap" name="autorap" placeholder="Apellido Paterno" required="required"onBlur="validatePass(this);">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="autoram" name="autoram" placeholder="Apellido Materno" >
                    </div>
                </div><br>
                <div class="form-row">
                    <div class="col">
                        <label class="card-text">Ingrese la categoria:</label><br>
                        <select class="form-control" id="cat" name="cat" required="required">
                        <?php// while($fila=$consultaCat->fetch_assoc()){?>
                            <option value="<?//php echo $fila['id'];?>"><?php //echo $fila['categoria'];?></option>  
                            <?php// }?>
                        </select>
                        
                    </div>  
                    <div class="col">
                        <label class="card-text">Ingrese el año en que fue publicado:</label><br>
                        <input type="number" id="fecha" name="fecha" class="form-control form-control-sm"/><br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label class="card-text">Ingrese el idioma del libro:</label><br>
                        <select class="form-control" id="idioma" name="idioma" required="required">
                            <?php // while($fila=$consultaidioma->fetch_assoc()){?>
                                <option value="<?php //echo $fila['id'];?>"><?php //echo //$fila['idioma'];?></option>  
                            <?php // }?> 
                        </select>
                    </div>
                    <div class="col">
                        <label class="card-text">Ingrese la libreria :</label><br>
                        <select class="form-control" id="libreria" name="libreria" required="required">
                        <option data-toggle="modal" data-target="#exampleModal">Agregar libreria</option>
                        <?php //while($fila=$consultalibreria->fetch_assoc()){?>
                                <option value="<?php //echo $fila['id'];?>"><?php //echo $fila['libreria'];?></option>  
                            <?php //}?>  
                        </select>
                     </div>
                </div>  
                <div class="form-row">
                    <div class="col">
                        <label class="card-text">Ingrese el precio del libro:</label><br>
                         <input type='number' step='0.01' value='0.00' placeholder='0.00' id="precio" name="precio" class="form-control form-control-sm"/><br>
                    </div>
                    <div class="col">
                     <label class="card-text">Foto:</label><br>
                     <input type='file' id="foto" name="foto" class="form-control form-control-sm"/>
                    </div>
                </div>   
                <div class="form-row">
                        <label class="card-text">Ingrese descripción del libro:</label><br>
                        <textarea id="des" name="des" rows="8" cols="30" class="form-control form-control-sm"></textarea>
                         
                   </div> <br>
                <center><input id="btn" type="submit"  value="Guardar" class="btn btn-success"  style="width: 330px; 
                     height: 40px; margin: 0 auto;  justify-content: center; "disabled='true'/></center>
                        </form><br>
            </div>
        </div>
    </div><br>
</body>
</html>