<?php
// Include config file
require_once "database.php";
 
// Define variables and initialize with empty values
$juego = $plataforma = "";
$juego_err = $plataforma_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id_juego"]) && !empty($_POST["id_juego"])){
    // Get hid_juegoden input value
    $id_juego = $_POST["id_juego"];
    
    // Validate juego
    $input_juego = trim($_POST["juego"]);
    if(empty($input_juego)){
        $juego_err = "Ingresa el nombre de un juego.";
    } elseif(!filter_var($input_juego, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $juego_err = "Ingresa un nombre valido.";
    } else{
        $juego = $input_juego;
    }
    
    // Valid_juegoate plataforma plataforma
    $input_plataforma = trim($_POST["plataforma"]);
    if(empty($input_plataforma)){
        $plataforma_err = "Ingresa una plataforma.";     
    } else{
        $plataforma = $input_plataforma;
    }
   
    // Check input errors before inserting in database
    if(empty($juego_err) && empty($plataforma_err)){
        // Prepare an update statement
        $sql = "UPDATE juegos SET juego=?, plataforma=? WHERE id_juego=?";
         
        if($stmt = mysqli_prepare($conexion, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_juego, $param_plataforma, $param_id_juego);
            
            // Set parameters
            $param_juego = $juego;
            $param_plataforma = $plataforma;
            $param_id_juego = $id_juego;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: videojuegos_usuario.php");
                exit();
            } else{
                echo "No se pudo realizar la modificacion, intenta de nuevo.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conexion);
} else{
    // Check existence of id_juego parameter before processing further
    if(isset($_GET["id_juego"]) && !empty(trim($_GET["id_juego"]))){
        // Get URL parameter
        $id_juego =  trim($_GET["id_juego"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM juegos WHERE id_juego = ?";
        if($stmt = mysqli_prepare($conexion, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id_juego);
            
            // Set parameters
            $param_id_juego = $id_juego;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individ_juegoual field value
                    $juego = $row["juego"];
                    $plataforma = $row["plataforma"];
                } else{
                    // URL doesn't contain valid id_juego. Redirect to error page
                    header("location: crud_videojuegos/error.php");
                    exit();
                }
                
            } else{
                echo "El id de la modificacion es incorrecto.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($conexion);
    }  else{
        // URL doesn't contain id_juego parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                        <h2>Modificar juego</h2>
                    </div>
                    <p>Ingresa o modifica los datos del juego para actualizarlos.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($juego_err)) ? 'has-error' : ''; ?>">
                            <label>juego</label>
                            <input type="text" name="juego" class="form-control" value="<?php echo $juego; ?>">
                            <span class="help-block"><?php echo $juego_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($plataforma_err)) ? 'has-error' : ''; ?>">
                            <label>plataforma</label>
                            <textarea name="plataforma" class="form-control"><?php echo $plataforma; ?></textarea>
                            <span class="help-block"><?php echo $plataforma_err;?></span>
                        </div>
                        <input type="hiden" name="id_juego" value="<?php echo $id_juego; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>