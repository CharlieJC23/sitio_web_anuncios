<?php
// Inicia conexion con la bd
require_once "database.php";
 
// Definimos las variables y la inicializamos con valores vacios
$nombreJ = $plataforma = "";
$nombreJ_err = $plataforma_err = "";
 
// REcibimos los datos del formulario
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validacion nombre de usuario
    $input_nombreJ = trim($_POST["nombreJ"]);
    if(empty($input_nombreJ)){
        $nombreJ_err = "Ingresa el nombre del juego.";
    } elseif(!filter_var($input_nombreJ, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nombreJ_err = "Ingresa un nombre valido.";
    } else{
        $nombreJ = $input_nombreJ;
    }
    
    // Validate plataforma
    $input_plataforma = trim($_POST["plataforma"]);
    if(empty($input_plataforma)){
        $plataforma_err = "Ingresa una plataforma.";     
    } else{
        $plataforma = $input_plataforma;
    }
    
    // Check input errors before inserting in database
    if(empty($nombreJ_err) && empty($plataforma_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO juegos (id_juego, nombreJ, plataforma) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($conexion, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, NULL, $param_nombreJ, $param_plataforma);
            
            // Set parameters
            $param_nombreJ = $nombreJ;
            $param_plataforma = $plataforma;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: videojuegos_usuario.php");
                exit();
            } else{
                echo "La insercion no se realizo, intenta de nuevo.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conexion);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar Juego</title>
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
                        <h2>Agregar Juego</h2>
                    </div>
                    <p>Por favor llena los datos para agregar un juego al sistema.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($nombreJ_err)) ? 'has-error' : ''; ?>">
                            <label>Nombre del juego:</label>
                            <input type="text" name="nombreJ" class="form-control" value="<?php echo $nombreJ; ?>">
                            <span class="help-block"><?php echo $nombreJ_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($plataforma_err)) ? 'has-error' : ''; ?>">
                            <label>Plataforma:</label>
                            <textarea name="plataforma" class="form-control"><?php echo $plataforma; ?></textarea>
                            <span class="help-block"><?php echo $plataforma_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="index.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>