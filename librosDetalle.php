<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros Detalle</title>
<?php
include('templates/header.php'); 
include('configlibros/db_connect.php');
$id=$_GET['id'];
//$id=5;
         //consulta de libros
         $query="SELECT l.id,titulo,nombre,libreria,appaterno,apmaterno,c.categoria,i.idioma,fecha,precio,imagen,l.descripcion,e.editorial
         FROM autor a, libro l, categoria c, editorial e, idiomas i WHERE l.id=$id and l.autor=a.id and 
         l.categoria=c.id and l.editorial=e.id AND l.idioma=i.id ";
         $consulta1=$mysqli->query($query);
         $fila=$consulta1->fetch_assoc();
         $idlib=$fila['libreria'];
         $querylibreria="SELECT li.libreria,ubicacion,direccionweb,numero,email 
         FROM libro l, libreria li WHERE li.id=l.libreria and l.id=$id";
         $consultalibreria=$mysqli->query($querylibreria);
         $filalibreria=$consultalibreria->fetch_assoc();
 ?>
    
</head>
<body>
    
<div class="col-sm-10 central" style="width: auto; margin: auto auto;" >
    <div class="contenedor">
        <div class="area1">
                <img src="images/libros/<?php echo $fila['imagen'];?>" class="imgLibro" />
            
        </div>
        <div class="area2">
            <h1><?php echo $fila['titulo'];?></h1>
            <hr>
            <h6 class="autor"><?php echo $fila['appaterno'].' '.$fila['apmaterno'].' '.$fila['nombre'];?></h6>
            <hr>
            <p class="descripcion"><?php echo $fila['descripcion'];?><p>
        </div>
        <div class="area3">
            <label class="textos">Precio:</label><br>
                <label class="textoTer">$<?php echo $fila['precio'];?></label><br>
            <label class="textos">Libreria:</label><br>
            <div>
                <label class="textosCua"><?php echo $filalibreria['libreria'];?></label>
             </div>
              <table >
                  <tr >
                      <td class="campotizq">Ubicacion:</td>
                      <td class="campotder"><?php echo $filalibreria['ubicacion'];?></td>
                  </tr>
                  <tr >
                      <td class="campotizq">url:</td>
                      <td class="campotder"><?php echo $filalibreria['direccionweb'];?></td>
                  </tr>
                  <tr >
                      <td class="campotizq">Tel:</td>
                      <td class="campotder"><?php echo $filalibreria['numero'];?></td>
                  </tr>
                  <tr >
                      <td class="campotizq">email: </td>
                      <td class="campotder"><?php echo $filalibreria['email'];?></td>
                  </tr>
              </table>
        </div>
        <div class="area4">
            <table>
                <tr class="linea">
                    <td class="campotizq">Editorial:</td>
                    <td class="campotder"><?php echo $fila['editorial'];?></td>
                </tr>    
                <tr class="linea">
                    <td class="campotizq">Categoria:</td>
                    <td class="campotder"><?php echo $fila['categoria'];?></td>
                </tr> 
                <tr class="linea">
                    <td class="campotizq">idioma:</td>
                    <td class="campotder"><?php echo $fila['idioma'];?></td>
                </tr> 
                <tr class="linea">
                    <td class="campotizq">fecha:</td>
                    <td class="campotder"><?php echo $fila['fecha'];?></td>
                </tr> 
            </table>
        </div>

    </div> 
    </div> <br>  
    <?php include('templates/footer.php');?>
</body>
</html>