<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta htPage Titletp-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pagina Principal</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
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