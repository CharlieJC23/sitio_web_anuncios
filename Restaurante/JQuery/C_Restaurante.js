var exprTexto = /[a-zA-Z]/;
var exprNumerico = /[0-9]/;
var exprAlfaNumerico = /[a-zA-Z0-9]/;

$(document).ready(function()
{
    
    $("#create").click
        
        (function() 
        {    
            var nombre = $("#nombre").val();
            var tipo = $("#tipo").val();
            var desde = $("#desde").val();
            var hasta = $("#hasta").val();

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


            if(tipo.length == 0)
            {
                alert("El campo Tipo esta vacio");
                
                return false;
           
            } else {

                if(!(tipo.length >= 3 && tipo.length <= 25))
                {
                    alert("Longitud no valida: [Tipo][3-25]");
                
                    return false;

                } else {

                    if(!exprTexto.test(tipo))
                    {
                        alert("Formato no valido: [Tipo][Texto]");

                        return false;
                    }
                }
            }


            if(desde.length == 0)
            {
                alert("El campo Horario de apertura esta vacio");
                
                return false;
           
            } else {

                if(!(desde.length >= 1 && desde.length <= 2))
                {
                    alert("Longitud no valida: [Horario de apertura][1-2]");
                
                    return false;

                } else {

                    if(!exprNumerico.test(desde))
                    {
                        alert("Formato no valido: [Horario de apertura][Numérico]");

                        return false;
                    }
                }
            }


            if(hasta.length == 0)
            {
                alert("El campo Horario de cierre esta vacio");
                
                return false;
           
            } else {

                if(!(hasta.length >= 1 && hasta.length <= 10))
                {
                    alert("Longitud no valida: [Horario de cierre][1-10]");
                
                    return false;

                } else {

                    if(!exprNumerico.test(hasta))
                    {
                        alert("Formato no valido: [Horario de cierre][Numérico]");

                        return false;
                    }
                }
            }
        });
});
    