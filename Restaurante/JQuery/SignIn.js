var exprTexto = /[a-zA-Z]/;
var exprNumerico = /[0-9]/;
var exprAlfaNumerico = /[a-zA-Z0-9]/;
var exprCorreo = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

$(document).ready(function()
{

    $("#create").click
        
        (function() 
        {    
            var nombre = $("#nombre").val();
            var ape_pat = $("#paterno").val();
            var ape_mat = $("#materno").val();
            var telefono = $("#telefono").val();
            var correo = $("#correo").val();
            var usuario = $("#usuario").val();
            var contrasenia = $("#contrasenia").val();
            var c_contrasenia = $("#c_contrasenia").val();
            
            if(nombre.length == 0)
            {
                alert("El campo Nombre esta vacio");
                
                return false;

            } else {

                if(!(nombre.length >= 3 && nombre.length <= 25))
                {
                    alert("Longitud no valida: [Nombre][3-25]");
                
                    return false;

                } else {

                    if(!exprTexto.test(nombre))
                    {
                        alert("Formato no valido: [Nombre][Texto]");

                        return false;
                    }
                }
            }


            if(ape_pat.length == 0)
            {
                alert("El campo Apellido Paterno esta vacio");

                return false;

            } else {

                if(!(ape_pat.length >= 3 && ape_pat.length <= 25))
                {
                    alert("Longitud no valida: [Apellido Paterno][3-25]");

                    return false;

                } else {

                    if(!exprTexto.test(ape_pat))
                    {
                        alert("Formato no valido: [Apellido Paterno][Texto]");

                        return false;
                    }
                }
            }


            if(ape_mat.length == 0)
            {
                alert("El campo Apellido Materno esta vacio");

                return false;

            } else {

                if(!(ape_mat.length >= 3 && ape_mat.length <= 25))
                {
                    alert("Longitud no valida: [Apellido Materno][3-25]");

                    return false;
                
                } else {

                    if(!exprTexto.test(ape_mat))
                    {
                        alert("Formato no valido: [Apellido Paterno][Texto]");

                        return false;
                    }
                } 
            }


            if(telefono.length == 0)
            {
                alert("El campo Telefono esta vacio");

                return false;

            } else {

                if(!(telefono.length >= 7 && telefono.length <= 10))
                {
                    alert("Longitud no valida [Telefono][7-10]");

                    return false;

                } else {

                    if(!exprNumerico.test(telefono))
                    {
                        alert("Formato no valido: [Telefono][Numerico]");

                        return false;
                    }
                }
            }


            if(correo.length == 0)
            {
                alert("El campo Correo esta vacio");

                return false;

            } else {

                if(!(correo.length >= 10 && correo.length <= 40))
                {
                    alert("Longitud no valida: [Correo][10-40]");

                    return false;

                } else {

                    if(!exprCorreo.test(correo))
                    {
                        alert("Formato no valido: [Correo][Email]");

                        return false;
                    }
                }
            }


            if(usuario.length == 0)
            {
                alert("El campo Usuario esta vacio");

                return false;

            } else {

                if(!(usuario.length >= 3 && usuario.length <= 25))
                {
                    alert("Longitud no valida: [Usuario][3-25]");

                    return false;

                } else {

                    if(!exprAlfaNumerico.test(usuario))
                    {
                        alert("Formato no valido: [Usuario][Alfanumerico]");

                        return false;
                    }
                }
            }

            if(contrasenia.length == 0)
            {
                alert("El campo Contraseña esta vacio");

                return false;

            } else {

                if(!(contrasenia.length >= 7 && contrasenia.length <= 25))
                {
                    alert("Longitud no valida: [Contraseña][7-25]");

                    return false;

                } else {

                    if(!exprAlfaNumerico.test(contrasenia))
                    {
                        alert("Formato no valido: [Contraseña][Alfanumerico]");

                        return false;
                    }
                }
            }


            if(c_contrasenia.length == 0)
            {
                alert("El campo Confirmar Contraseña esta vacio");

                return false;

            } else {

                if(!(c_contrasenia.length >= 7 && c_contrasenia.length <= 25))
                {
                    alert("Longitud no valida: [Confirmar Contraseña][7-25]");

                    return false;

                } else {
                    
                    if(!exprAlfaNumerico.test(c_contrasenia))
                    {
                        alert("Formato no valido: [Confirmar Contraseña][Alfanumerico]");

                        return false;
                    }
                }
            }
            
        }
    
    );

});


$(document).ready(function()
{
    $("#create").click
        
    (function() 
    {    
        var contrasenia = $("#contrasenia").val();
        var c_contrasenia = $("#c_contrasenia").val();

        if(contrasenia.length != 0 && c_contrasenia.length != 0)
        {
            if(contrasenia != c_contrasenia)
            {
                alert("Las contraseñas no coinciden");
                return false;
            }
            
        }
    });

});

