<?php
// Process delete operation after confirmation
if(isset($_POST["id_juego"]) && !empty($_POST["id_juego"])){
    // Include config file
    require_once "database.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM juegos WHERE id_juego = ?";
    
    if($stmt = mysqli_prepare($conexion, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id_juego);
        
        // Set parameters
        $param_id_juego = trim($_POST["id_juego"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: videojuegos_usuario.php");
            exit();
        } else{
            echo "El registro no ha sido eliminado, intenta mas tarde.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conexion);
} else{
    // Check existence of id_juego parameter
    if(empty(trim($_GET["id_juego"]))){
        // URL doesn't contain id_juego parameter. Redirect to error page
        header("location: crud_videojuegos/error.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
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
                        <h1>Delete Record</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id_juego" value="<?php echo trim($_GET["id_juego"]); ?>"/>
                            <p>¿Estas seguro de que quieres borrar este juego?</p><br>
                            <p>
                                <input type="submit" value="Si" class="btn btn-danger">
                                <a href="index.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>