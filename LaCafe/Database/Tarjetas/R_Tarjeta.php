<?php

    $id_cliente = $_SESSION['id_cliente'];

    $query = "SELECT * 
                FROM Tarjetas
               WHERE Id_Cliente = $id_cliente";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result)) 
    { 
?>

<form action="../Database/Tarjetas/U_Tarjeta.php?tarjeta=<?php echo $row['Id_Tarjeta'] ?>" method="POST">

    <tr>
    
        <td>                                    
            <input type="text" id="num_tarjeta" name="num_tarjeta" class="form-control" value=" <?php echo $row['Num_Tarjeta'] ?> ">
        </td>

        <td>                                
            <input type="text" id="mes" name="mes" class="form-control" value=" <?php echo $row['Mes'] ?> ">
        </td>
        
        <td>
            <input type="text" id="anio" name="anio" class="form-control" value=" <?php echo $row['Anio'] ?> ">
        </td>
        
        <td>
            <input type="text" id="codigo" name="codigo" class="form-control" value=" <?php echo $row['Codigo'] ?> ">
        </td>

        <td>    

            <table>
            
                <tr>
                    <td>
                        <input type="submit" id="update" name="update" class="btn btn-warning" value="Modificar" >
                    </td>

                    <td>
                        <a href="../Database/Tarjetas/D_Tarjeta.php?tarjeta=<?php echo $row['Id_Tarjeta']?>" class="btn btn-danger">
                            Eliminar
                        </a>
                    </td>
                </tr>

            </table>
            
        </td>

    </tr>

</form>

<?php } ?>