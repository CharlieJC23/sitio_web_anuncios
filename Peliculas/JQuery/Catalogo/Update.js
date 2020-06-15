var exprTexto = /[a-zA-Z]/;
var exprAlfaNumerico = /[a-zA-Z0-9]/;

$(document).ready(function()
{
    
    $("#update").click
        
    (function() 
    {    
        var nombre = $("#nombre").val();
        var descp = $("#descp").val();
        var fecha = $("#fecha").val();
        var directores = $("#directores").val();
         var premios = $("#premios").val();
        if(nombre.length == 0  )
        {
            alert("El campo Nombre ");
            
            return false;
       
        } else {

            if(!(nombre.length >= 3 && nombre.length <= 30))
            {
                alert("Longitud no valida: [Nombre][3-30]");
            
                return false;

            } else {

                if(!exprTexto.test(nombre))
                {
                    alert("Formato no valido: [Nombre][Texto]");

                    return false;
                }
            }
        }

        if(descp.length == 0  )
        {
            alert("El campo Descripcion vacio ");
            
            return false;
       
        } else {

            if(!(descp.length >= 3 && descp.length <= 100))
            {
                alert("Longitud no valida: [descp][3-100]");
            
                return false;

            } else {

                if(!exprTexto.test(descp))
                {
                    alert("Formato no valido: [descp][Texto]");

                    return false;
                }
            }
        }


        if(directores.length == 0  )
        {
            alert("El campo directores vacio ");
            
            return false;
       
        } else {

            if(!(directores.length >= 3 && directores.length <= 30))
            {
                alert("Longitud no valida: [directores][3-200]");
            
                return false;

            } else {

                if(!exprTexto.test(directores))
                {
                    alert("Formato no valido: [directores][Texto]");

                    return false;
                }
            }
        }

       

            if(!(premios.length >= 3 && premios.length <= 100))
            {
                alert("Longitud no valida: [premios][3-30]");
            
                return false;

            } else {

                if(!exprTexto.test(premios))
                {
                    alert("Formato no valido: [premios][Texto]");

                    return false;
                }
            }
            var objFecha4 = new Date(0000,00,00);

            if (fecha == objFecha4) {

                  alert("Formato no valido: [fecha][Texto]");

                    return false;
            }



        


       
            
        
    });
});