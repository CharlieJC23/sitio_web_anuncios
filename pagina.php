<!DOCTYPE html>
<html>
<head>
    
    <?php include('templates/nav.php'); ?>
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script> 
</head> 
<body> 
<script>
var namePattern = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
var emailPattern = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$";
function checkInput(idInput, pattern) {
	return $(idInput).val().match(pattern) ? true : false;
}

function checkTextarea(idText) {
	return $(idText).val().length > 12 ? true : false;	
}

function checkRadioBox(nameRadioBox) {
  return $(nameRadioBox).is(":checked") ? true : false;
}

function checkSelect(idSelect) {
	return $(idSelect).val() ? true : false;
}

function enableSubmit (idForm) {
	$(idForm + " button.submit").removeAttr("disabled");
}

function disableSubmit (idForm) {
	$(idForm + " button.submit").attr("disabled", "disabled");
}

function checkForm (idForm) {
	$(idForm + " *").on("change keydown", function() {
		if (checkInput("#editorial", namePattern) && /*
			checkInput("#apellidos", namePattern) && 
      checkInput("#email", emailPattern) && */
			checkSelect("#pais") /*&& 
			checkTextarea("#comentario") && 
			checkRadioBox("#legal") &&
      checkRadioBox("[name=boletin]")*/)
		{
			enableSubmit(idForm);
		} else {
			disableSubmit(idForm);
		}
	});
}

$(function() {
	checkForm("idf");
});
</script>

<form action="controllerLibros/agregar" name="idf" id="idf" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Editorial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Escribe el nombre de la editorial</h4>
                    <div class="form-group">
                        <input type="text" class="form-control" name="editorial" id="editorial" required="required" >
                        <div id="alertlib">sd</div>
                     </div>
                </div>
                <div class="modal-body">
                    <h4>Selecciona el pais</h4>
                    <div class="form-group">
                        <select class="form-control" id="pais" name="pais" required="required" >
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cerrar</button>
                    <button type="submit" name="submitSave" class="btn btn-primary" disabled>Aceptar</button>
                </div>
            </form>
</body> 
</html>