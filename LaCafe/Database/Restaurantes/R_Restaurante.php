<?php

    $id_cliente = $_SESSION['id_cliente'];

    $query = "SELECT * 
                FROM Restaurantes
               WHERE Id_Cliente = $id_cliente";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result)) 
    { 
?>

<form action="../Database/Restaurantes/U_Restaurante.php?restaurante= <?php echo $row['Id_Restaurante'] ?>" method="POST">

    <tr>
    
        <td>                                    
            <input type="text" id="nombre" name="nombre" class="form-control" value=" <?php echo $row['Nombre'] ?> ">
        </td>

        <td>                                
            <input type="text" id="tipo" name="tipo" class="form-control" value=" <?php echo $row['Tipo'] ?> ">
        </td>
        
        <td>
            <input type="text" id="desde" name="desde" class="form-control" value=" <?php echo $row['Desde'] ?> ">
        </td>
        
        <td>
            <input type="text" id="hasta" name="hasta" class="form-control" value=" <?php echo $row['Hasta'] ?> ">
        </td>

        <td>    

            <table>
            
                <tr>
                    <td>
                        <input type="submit" id="update" name="update" class="btn btn-warning" value="Modificar" >
                    </td>

                    <td>
                        <a href="../Database/Restaurantes/D_Restaurante.php?restaurante=<?php echo $row['Id_Restaurante']?>" class="btn btn-danger">
                            Eliminar
                        </a>
                    </td>
                </tr>

            </table>
            
        </td>

    </tr>

</form>

<?php } ?>