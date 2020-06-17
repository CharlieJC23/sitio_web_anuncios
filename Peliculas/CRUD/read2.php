<?php include("../includes/Header.php") ?>

<?php

$mysqli = new mysqli('localhost', 'root', '', 'peliculas') or die(mysqli_error($mysqli));
$result = $mysqli->query("Select * from descripcion_pelis") or die(mysqli_error($mysqli));



// $query = "SELECT * FROM peliculas";
//   $result = mysqli_query($conn, $query);

?>


<div class="col-md-8">

<table class="table table-bordered" style="margin: 7cm; border-collapse: separate; background-color:burlywood;border: red 5px solid;" >
 
<h2>Catalogo de Peliculas</h2><br>
<a href="../sitio_web_anuncios-master/index.php" style="background-color:burlywood;">Menu Principal</a>
    
    <tbody  >


    <?php
while ($row = $result->fetch_assoc()) :
?>
    <tr>

        <th>Nombre </th>

        <td>

            <?php echo $row['nombre']
            ?>
        </td>

    </tr>
    <tr>
        <th width=200px; height=400px>Imagen</th>


        <td  >
          <img src="<?php echo $row['imagen'] ?>" alt="imagen de pelicula de: <?php echo $row['nombre'] ?>" width=200px; height=400px  >  
        </td>

     <tr>
            <th>Genero</th>
        <td>
            <?php echo $row['genero'] ?>
        </td>
     </tr>
     
     <tr>
         <th>Descripcion</th>
        <td>
            <?php echo $row['descp'] ?>
        </td>
        </tr>
        <tr>
            <th>Fecha</th>
        <td>
            <?php echo $row['fecha'] ?>
        </td>

        </tr>
        <tr>
            <th>Directores</th>
            <td><?php    echo $row['directores'] ?></td>
        </tr>

        <tr>
            <th>Premios</th>
            <td><?php echo $row['premios'] ?></td>


        </tr>

        <tr>
            <th colspan="2">''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''</th>
            


        </tr>



      
    </tr>


<?php endwhile ?>
       
    </tbody>

</table>

</div>
