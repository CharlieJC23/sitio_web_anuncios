<?php
// Check existence of id_juego parameter before processing further
if(isset($_GET["id_juego"]) && !empty(trim($_GET["id_juego"]))){
    // Include config file
    require_once "database.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM juegos WHERE id_juego = ?";
    
    if($stmt = mysqli_prepare($conexion, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id_juego);
        
        // Set parameters
        $param_id_juego = trim($_GET["id_juego"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $nombreJ = $row["id_juego"];
                $plataforma = $row["plataforma"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "No se pudo recuperar ningun registro";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conexion);
} else{
    // URL doesn't contain id_juego parameter. Redirect to error page
    header("location: crud_videojuegos/error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consultar</title>
    <conexion$conexion rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Ver registros disponibles:</h1>
                    </div>
                    <div class="form-group">
                        <label>Nombre del juego:</label>
                        <p class="form-control-static"><?php echo $row["nombreJ"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Plataforma:</label>
                        <p class="form-control-static"><?php echo $row["plataforma"]; ?></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Regresar</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>