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
</head>

<body>
    <div id="inicio">
        <header>
            <div>
                <nav class="navbar navbar-expand-sm" style="background-color: lightslategray;">
                    <a href="index.php"><img src="./images/logo.png" height="80px" /></a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="videojuegos.php" style="color: white;">VIDEOJUEGOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="restaurantes.php" style="color: white;">COMIDA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="series.php" style="color: white;">SERIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="libros.php" style="color: white;">LIBROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="peliculas.php" style="color: white;">PELICULAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login_usuario.php" style="color: white;">INICIAR SESION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrate.php" style="color: white;">REGISTRATE</a>
                        </li>
                    </ul>
                </nav>
        </header>

        <div id="menuopc">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <h4>Genero:</h4>
                        <div class="list-group justify-content: flex-start">
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
                    </div>
                    <div class="col-10">
                        <div id="card-list" class="row h-100 justify-content-center">
                            <div class="card m-3" style="width:170px;">
                                <img class="card-img-top w-auto" src="./images/series/serie1.jpg" style="height: 15rem;" alt="Supernatural">
                                <div class="card-body">
                                    <h6 class="card-title" style="font-family: Century Gothic;">SUPERNATURAL</h6>
                                    <center><a href="articulo.php" class="btn btn-danger btn-sm stretched-link ">VER</a></center>
                                </div>
                            </div>
                            <div class="card m-3" style="width:170px;">
                                <img class="card-img-top w-auto" src="./images/series/serie2.jpg" style="height: 15rem;" alt="Legion">
                                <div class="card-body">
                                    <h6 class="card-title" style="font-family: Century Gothic;">LEGION</h6>
                                    <center><a href="articulo.php" class="btn btn-danger btn-sm stretched-link ">VER</a></center>
                                </div>
                            </div>
                            <div class="card m-3" style="width:170px;">
                                <img class="card-img-top w-auto" src="./images/series/serie3.jpg" style="height: 15rem;" alt="Stranger Things">
                                <div class="card-body">
                                    <h6 class="card-title" style="font-family: Century Gothic;">STRANGER THINGS</h6>
                                    <center><a href="articulo.php" class="btn btn-danger btn-sm stretched-link ">VER</a></center>
                                </div>
                            </div>
                            <div class="card m-3" style="width:170px;">
                                <img class="card-img-top w-auto" src="./images/series/serie4.jpg" style="height: 15rem;" alt="Lucifer">
                                <div class="card-body">
                                    <h6 class="card-title" style="font-family: Century Gothic;">LUCIFER</h6>
                                    <center><a href="articulo.php" class="btn btn-danger btn-sm stretched-link ">VER</a></center>
                                </div>
                            </div>
                            <div class="card m-3" style="width:170px;">
                                <img class="card-img-top w-auto" src="./images/series/serie5.jpg" style="height: 15rem;" alt="TBBT">
                                <div class="card-body">
                                    <h6 class="card-title" style="font-family: Century Gothic;">THE BIG BANG THEORY</h6>
                                    <center><a href="articulo.php" class="btn btn-danger btn-sm stretched-link ">VER</a></center>
                                </div>
                            </div>
                            <div class="card m-3" style="width:170px;">
                                <img class="card-img-top w-auto" src="./images/series/serie6.jpg" style="height: 15rem;" alt="House of Cards">
                                <div class="card-body">
                                    <h6 class="card-title" style="font-family: Century Gothic;">HOUSE OF CARDS</h6>
                                    <center><a href="articulo.php" class="btn btn-danger btn-sm stretched-link ">VER</a></center>
                                </div>
                            </div>
                            <div class="card m-3" style="width:170px;">
                                <img class="card-img-top w-auto" src="./images/series/serie7.jpg" style="height: 15rem;" alt="Dark">
                                <div class="card-body">
                                    <h6 class="card-title" style="font-family: Century Gothic;">DARK</h6>
                                    <center><a href="articulo.php" class="btn btn-danger btn-sm stretched-link ">VER</a></center>
                                </div>
                            </div>
                            <div class="card m-3" style="width:170px;">
                                <img class="card-img-top w-auto" src="./images/series/serie8.jpg" style="height: 15rem;" alt="THE FLASH">
                                <div class="card-body">
                                    <h6 class="card-title" style="font-family: Century Gothic;">SUPERGIRL</h6>
                                    <center><a href="articulo.php" class="btn btn-danger btn-sm stretched-link ">VER</a></center>
                                </div>
                            </div>
                            <div class="card m-3" style="width:170px;">
                                <img class="card-img-top w-auto" src="./images/series/serie9.jpg" style="height: 15rem;" alt="Inhumans">
                                <div class="card-body">
                                    <h6 class="card-title" style="font-family: Century Gothic;">INHUMANS</h6>
                                    <center><a href="articulo.php" class="btn btn-danger btn-sm stretched-link ">VER</a></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer style="background-color: black;" class="page-footer font-small mdb-color  lighten-3 pt-4">
        <div class="container text-center text-md-left">
            <div class="row">
                <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
                    <h5 style="color: white;" class="font-weight-bold text-uppercase mb-4">PublicaTec</h5>
                    <p style="color: white;">Somos una pagina web que permite a cualquier
                        usuario promocionar sus articulos de diversa indole.
                        Ponemos a tu alcance un amplio catalogo donde podras encontrar lo que más te apasiona del mundo
                        desde la comodidad de tu casa.</p>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
                    <h5 style="color: white;" class="font-weight-bold text-uppercase mb-4">ACERCA DE</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p style="color: white;">Dirección: <br> Toluca, EDO MX 50260, MX</p>
                        </li>
                        <li>
                            <p style="color: white;">Correo: <br> publicatec@ventaonline.com</p>
                        </li>
                        <li>
                            <p style="color: white;">Tel: <br> + 52 219 123 10</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="color: white;" class="footer-copyright text-center py-3">© 2020<a href=""> PublicaTec.com</a>
            </div>
    </footer>
</body>

</html>