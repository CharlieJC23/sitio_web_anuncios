<?php

$mysqli = new mysqli('localhost', 'root', '', 'peliculas') or die(mysqli_error($mysqli));
$result = $mysqli->query("Select * from descripcion_pelis") or die(mysqli_error($mysqli));



// $query = "SELECT * FROM peliculas";
//   $result = mysqli_query($conn, $query);

while ($row = $result->fetch_assoc()) {
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


        <td >
          <img src="<?php echo $row['imagen'] ?>" alt="imagen de pelicula de: <?php echo $row['nombre'] ?>"  >  
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


        <td>

            <a href="temporal.php?edit=<?php echo $row['id'] ?>" class="btn btn-warning">

                Editar

            </a>

            <a href="Delete.php?id= <?php echo $row['id'] ?>" class="btn btn-danger">

                Eliminar

            </a>

        </td>
    </tr>


<?php } ?>