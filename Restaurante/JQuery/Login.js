var exprAlfaNumerico = /[a-zA-Z0-9]/;

$(document).ready(function()
{
    
    $("#login").click
        
        (function() 
        {    
            var usuario = $("#usuario").val();
            var contrasenia = $("#contrasenia").val();

            if(usuario.length == 0)
            {
                alert("El campo Usuario esta vacio");
                
                return false;
            
            } else {

                if(!exprAlfaNumerico.test(usuario))
                {
                    alert("Formato no valido: [Usuario][Alfanumerico]");

                    return false;
                }
            }


            if(contrasenia.length == 0)
            {
                alert("El campo Contraseña esta vacio");
                
                return false;
            
            } else {

                if(!exprAlfaNumerico.test(contrasenia))
                {
                    alert("Formato no valido: [Contraseña][Alfanumerico]");

                    return false;
                }
            }
        }

    );
    
});
    