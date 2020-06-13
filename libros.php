<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta htPage Titletp-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pagina Principal</title>
    <?php include('templates/header.php'); ?>
</head>
<body>
<div id="menuopc">
            <div style="width: 200px; height: 400;" class="container">
                <h4>Genero:</h4>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Accion</a>
                    <a href="#" class="list-group-item list-group-item-action">Ciencia Ficcion</a>
                    <a href="#" class="list-group-item list-group-item-action">Deportes</a>
                    <a href="#" class="list-group-item list-group-item-action">Infantil</a>
                    <a href="#" class="list-group-item list-group-item-action">Mecha</a>
                    <a href="#" class="list-group-item list-group-item-action">Misterio</a>
                    <a href="#" class="list-group-item list-group-item-action">Romance</a>
                    <a href="#" class="list-group-item list-group-item-action">Shonen</a>
                    <a href="#" class="list-group-item list-group-item-action">Terror</a>
                </div>
             <a class="btn btn-danger" href="librosCrear.php" role="button">Agregar libro</a><br>
            </div>
</div><br>

<?php include('templates/footer.php');?>
</body>
</html>