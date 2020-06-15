var exprTexto = /[a-zA-Z]/;
var exprNumerico = /[0-9]/;
var exprAlfaNumerico = /[a-zA-Z0-9]/;

$(document).ready(function()
{
    
    $("#create").click
        
        (function() 
        {    
            var nombre = $("#nombre").val();
            var descripcion = $("#descripcion").val();
            var categoria = $("#categoria").val();
            var kcal = $("#kcal").val();
            var precio = $("#precio").val();

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


            if(descripcion.length == 0)
            {
                alert("El campo Descripcion esta vacio");
                
                return false;
           
            } else {

                if(!(descripcion.length >= 3 && descripcion.length <= 40))
                {
                    alert("Longitud no valida: [Descripcion][3-40]");
                
                    return false;

                } else {

                    if(!exprTexto.test(descripcion))
                    {
                        alert("Formato no valido: [Descripcion][Texto]");

                        return false;
                    }
                }
            }


            if(categoria.length == 0)
            {
                alert("El campo Categoria esta vacio");
                
                return false;
           
            } else {

                if(!(categoria.length >= 3 && categoria.length <= 25))
                {
                    alert("Longitud no valida: [Categoria][3-25]");
                
                    return false;

                } else {

                    if(!exprTexto.test(categoria))
                    {
                        alert("Formato no valido: [Categoria] [Texto]");

                        return false;
                    }
                }
            }


            if(kcal.length == 0)
            {
                alert("El campo Kcal de cierre esta vacio");
                
                return false;
           
            } else {

                if(!(kcal.length >= 1 && kcal.length <= 7))
                {
                    alert("Longitud no valida: [Kcal][1-7]");
                
                    return false;

                } else {

                    if(!exprNumerico.test(kcal))
                    {
                        alert("Formato no valido: [Kcal][Númerico]");

                        return false;
                    }
                }
            }


            if(precio.length == 0)
            {
                alert("El campo Precio de cierre esta vacio");
                
                return false;
           
            } else {

                if(!(precio.length >= 1 && precio.length <= 7))
                {
                    alert("Longitud no valida: [Precio][1-7]");
                
                    return false;

                } else {

                    if(!exprNumerico.test(precio))
                    {
                        alert("Formato no valido: [Precio][Númerico]");

                        return false;
                    }
                }
            }
        });
});
    