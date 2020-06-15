<?php

    $id_cliente = $_SESSION['id_cliente'];

    $query = "SELECT m.Nombre, m.Descripcion, m.Categoria, m.Kcal, m.Precio
                FROM Clientes c LEFT JOIN Restaurantes r 
                  ON (c.Id_Cliente = r.Id_Cliente) LEFT JOIN Menus m
                  ON (r.Id_Restaurante = m.Id_Restaurante)
               WHERE c.Id_Cliente = $id_cliente";



    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result)) 
    { 
?>

    <form action="../Database/Menus/U_Menu.php?menu= <?php echo $row['Id_Menu']; ?>" method="POST">
    
        <tr>
        
            <td>                                    
                <input type="text" id="nombre" name="nombre" class="form-control" value=" <?php echo $row['Nombre'] ?> ">
            </td>

            <td>                                
                <input type="text" id="descripcion" name="descripcion" class="form-control" value=" <?php echo $row['Descripcion'] ?> ">
            </td>
            
            <td>
                <input type="text" id="categoria" name="categoria" class="form-control" value=" <?php echo $row['Categoria'] ?> ">
            </td>
            
            <td>
                <input type="text" id="kcal" name="kcal" class="form-control" value=" <?php echo $row['Kcal'] ?> ">
            </td>

            <td>
                <input type="text" id="precio" name="precio" class="form-control" value=" <?php echo $row['Precio'] ?> ">
            </td>
            
            <td>    

                <table>
                
                    <tr>
                        <td>
                            <input type="submit" id="update" name="update" class="btn btn-warning" value="Modificar">
                        </td>

                        <td>
                            <a href="../Database/Menus/D_Menu.php?menu=<?php echo $row['Id_Menu']?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>

                </table>
                
            </td>

        </tr>

    </form>

<?php } ?>