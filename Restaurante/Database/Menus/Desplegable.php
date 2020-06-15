<?php

    $id_cliente = $_SESSION['id_cliente'];

    $query = "SELECT r.Id_Restaurante, r.Nombre
                FROM Clientes c LEFT JOIN Restaurantes r
                  ON (c.Id_cliente = r.Id_Cliente)
               WHERE c.Id_Cliente=$id_cliente";
    $result = mysqli_query($conn, $query);

    

    while($row = mysqli_fetch_array($result)) 
    { 
?>
        
    <?php ?>

        <a class="dropdown-item" href="Menu.php?restaurante=<?php echo $row['Id_Restaurante']; ?>"> 
            <?php echo $row['Nombre']; ?> 
        </a>    


<?php } ?>