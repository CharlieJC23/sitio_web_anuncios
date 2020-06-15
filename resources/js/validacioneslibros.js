
var RegExPattern = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
var RegUrl= /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \?=.-]*)*\/?$/; 
var Regemail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
var RegAn =  /^[0-9-()+]{4,4}/;
var errorMessage = 'Campo Incorrecto';
var varvalidar= false ;
//validar año
function validateAnn(campo) {
    if ((campo.value.match(RegAn)) && (campo.value!='')) {
        varvalidar= 'bien';
    } else {
        alert('año invalido ');
        campo.focus();
    } 
}
//valida email
function validateInputEmail(campo) {
    if ((campo.value.match(Regemail)) && (campo.value!='')) {
        
    } else {
        alert('email no valido');
        campo.focus();
    } 
}
//validar url
function validateInputUrl(campo) {
    if ((campo.value.match(RegExPattern)) && (campo.value!='')) {
        
    } else {
        alert('URL no valida');
        campo.focus();
    } 
}//valida titulo, nombre y apellido paterno
function validateInputR(campo) {
    if ((campo.value.match(RegExPattern)) && (campo.value!='')) {
       // varvalidar= 'bien';
        //formV(varVal)
    } else {
        alert(errorMessage);
        campo.focus();
    } 
}
//validar los select
function validarSelect(campo){
    if ($(campo).val().trim() === '') {
        alert('Debe seleccionar una opción');
        campo.focus();
    } 
}
/*
function formV(varVal){
    if(varVal = true){
    $('#btn').attr('disabled',false);
}
}*/