<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta htPage Titletp-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pagina Principal</title>
    
    <?php include('templates/nav.php'); 
    //check GET request id param
//if(isset($_GET['id'])){
  //  $id=$_GET['id'];
//}
//conexion a la base de datos
include('configlibros/db_connect.php');
//mostrar generos    
$query="SELECT id,categoria FROM categoria";
$consultaGen=$mysqli->query($query);
//check GET request id param
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $queryLib="SELECT distinct l.id,l.imagen,l.titulo,a.nombre,a.appaterno,a.apmaterno 
    FROM libro l,autor a where categoria=$id and l.autor=a.id";
    $consulta=$mysqli->query($queryLib);
}else{
    $queryLib="SELECT distinct l.id,l.imagen,l.titulo,a.nombre,a.appaterno,a.apmaterno 
    FROM libro l,autor a where l.autor=a.id";
    $consulta=$mysqli->query($queryLib);
    }

    ?>
</head>
<body>
<div id="menuopc">
            <div class="container">
                <div class="row">
                    <!------------------MENU DE LADO IZQ------------------------------------------------------------------------------>
                  <div class="col-2">
                  <div class="exdiv">
                  <h4>Agregar Libro</h4>
                  <center><a href="librosCrear.php" class="boton">Agregar</a><center><br>
                  </div><br>
                        <h4>Genero:</h4>
                        <div class="list-group justify-content: flex-start">
                        <?php while($fila=$consultaGen->fetch_assoc()){?>
                            <a href="libros.php?id=<?php echo $fila['id'];?>" class="list-group-item list-group-item-action"><?php echo $fila['categoria'];?></a>
                            <?php }?> 
                        </div>
                    </div>
                    <!------------------Cuadro ----------------------------------------------------------->
                    <div class="contenedorcar">
                        <main class="contenido-principal">
                            <h2>Libros</h2><br><br>
                            <?php while($fila=$consulta->fetch_assoc()){?>
                            <article class="entrada">
                                <img class="imgPortada" src="images/libros/<?php echo $fila['imagen'];?>" alt="libro sin img">
                                <div class="contenido">
                                    <h3><?php echo $fila['titulo'];?></h3>
                                    <p>Autor:<br><span><?php echo $fila['nombre'].' '.$fila['appaterno'].' '.$fila['apmaterno'];?></span></p>
                                    <a href="librosDetalle.php?id=<?php echo $fila['id'];?>" class="boton">Leer más</a>
                                </div>
                            </article>
                            <?php }?> 
                        </main>
                    </div>
                    <!------------------FIN Cuadro ----------------------------------------------------------->
                </div>
            </div>
        </div>
    <br>
    <br>
    
    <?php include('templates/footer.php'); ?>
</body>
</html>