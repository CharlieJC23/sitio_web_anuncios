<?php

$mysqli = new mysqli('localhost', 'root', '', 'peliculas');

$nombre ="";
$imagen = "";
$genero = "";
$durPeli = "";
$descp = "";
$fecha = "";
$directores = "";
$premios = "";




    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update=true;
        $result=$mysqli->query("SELECT * from descripcion_pelis where id=$id") or die($mysqli->error);
       
        if ($result->num_rows) {
            $row = $result->fetch_array();
            $id=$row['id'];
            $nombre = $row['nombre'];
            $imagen=$row['imagen'];
            $genero=$row['genero'];
            $durPeli=$row['durpeli'];
            $descp = $row['descp'];
            $fecha = $row['fecha'];
            $directores=$row['directores'];
            $premios=$row['premios'];
    
        }
    }
    if (isset($_POST['update'])) {
        
        $id=$_POST['id'];
        $nombre = $_POST['nombre'];
        $imagen=$_POST['imagen'];
        $genero=$_POST['genero'];
        $descp = $_POST['descp'];
        $fecha = $_POST['fecha'];
        $directores=$_POST['directores'];
        $premios=$_POST['premios'];
    
        $mysqli->query("Update descripcion_pelis SET nombre = '$nombre', imagen = '$imagen' ,genero='$genero', descp= '$descp',fecha ='$fecha',directores='$directores',premios='$premios' WHERE id= $id") or 
        die($mysqli->error);
    $_SESSION['message']="Record have been update";
    $_SESSION['msg_type'] = "warning";
    header('Location: Catalogo.php');
    
    }
   

    ?>



<?php include("../includes/Header.php"); ?>




<script src="../JQuery/Catalogo/Update.js"> </script>

<div class="container p-4">

    <div class="row">
    
        <div class="col-md-4 mx-auto">
        
            <div class="card car-body">
            
                <form action="temporal.php" method="POST">

                

                <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $id;?>" >
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="nombre" id="nombre" value ="<?php echo $nombre; ?>" class = "form-control" >
                    </div>
                    
                    <div class="form-group">
                    <input type="file" name="imagen" value="<?php echo $imagen; ?>" />
                    </div>

                    
                    

                    <div class="form-group">
                        <h6 class="text-secondary"> Descripcion </h6>
                        <textarea name="descp"  id="descp" cols="20" rows="4"   style="width:300px; height:80px;"><?php echo $descp; ?></textarea>

                    </div>

                    <div class="form-group">
                        <h6 class="text-secondary"> Genero </h6>
                        <input type="text" name="fecha" id="fecha" value="<?php echo $genero?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <h6 class="text-secondary"> Fecha de estreno </h6>
                        <input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo $fecha?>">
                    </div>


                    <div class="form-group">
                        <h6 class="text-secondary"> Directores </h6>
                        <input type="text" name="directores" id="directores"  value= "<?php echo $directores?>" class="form-control" >
                    </div>

                    <div class="form-group">
                        <h6 class="text-secondary"> Premios</h6>
                        <input type="text" name="premios" id="premios" value="<?php echo $premios?>"class="form-control">
                    </div>



                    <button name="update" id="update" class ="btn btn-warning btn-block">
                        Actualizar
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>


<?php include("../includes/Footer.php"); ?>