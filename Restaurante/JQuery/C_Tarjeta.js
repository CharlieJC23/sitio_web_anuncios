var exprNumerico = /[0-9]/;
var exprAlfaNumerico = /[a-zA-Z0-9]/;

$(document).ready(function()
{
    
    $("#create").click
        
        (function() 
        {    
            var num_tarjeta = $("#num_tarjeta").val();
            var mes = $("#mes").val();
            var anio = $("#anio").val();
            var codigo = $("#codigo").val();

            if(num_tarjeta.length == 0)
            {
                alert("El campo Num_Tarjeta esta vacio");
                
                return false;
           
            } else {

                if(!(num_tarjeta.length >= 12 && num_tarjeta.length <= 15))
                {
                    alert("Longitud no valida: [Num_Tarjeta][12-15]");
                
                    return false;

                } else {

                    if(!exprNumerico.test(num_tarjeta))
                    {
                        alert("Formato no valido: [Num_Tarjeta][Numérico]");

                        return false;
                    }
                }
            }


            if(mes.length == 0)
            {
                alert("El campo Mes esta vacio");
                
                return false;
           
            } else {

                if(!(mes.length >= 1 && mes.length <= 2))
                {
                    alert("Longitud no valida: [Mes][1-2]");
                
                    return false;

                } else {

                    if(!exprNumerico.test(mes))
                    {
                        alert("Formato no valido: [Mes][Numérico]");

                        return false;
                    }
                }
            }


            if(anio.length == 0)
            {
                alert("El campo Año esta vacio");
                
                return false;
           
            } else {

                if(!(anio.length >= 2 && anio.length <= 4))
                {
                    alert("Longitud no valida: [Año][2-4]");
                
                    return false;

                } else {

                    if(!exprNumerico.test(anio))
                    {
                        alert("Formato no valido: [Año][Numérico]");

                        return false;
                    }
                }
            }


            if(codigo.length == 0)
            {
                alert("El campo Código de cierre esta vacio");
                
                return false;
           
            } else {

                if(!(codigo.length >= 2 && codigo.length <= 4))
                {
                    alert("Longitud no valida: [Código][2-4]");
                
                    return false;

                } else {

                    if(!exprAlfaNumerico.test(codigo))
                    {
                        alert("Formato no valido: [Código][Númerico]");

                        return false;
                    }
                }
            }

        });
});
    