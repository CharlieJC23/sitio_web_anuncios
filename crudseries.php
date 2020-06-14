<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta htPage Titletp-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tu cuenta</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="resources/funciones.js"></script>
</head>

<body style="background-color: lightgray;">
    <div id="inicio">
        <header>
            <div>
                <nav class="navbar navbar-expand-sm" style="background-color: deepskyblue;">
                    <a href="menu_usuario.php"><img src="./images/logo.png" height="80px" /></a>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: white;">VIDEOJUEGOS</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Alta</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Baja</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Consulta</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: white;">COMIDA</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Alta</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Baja</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Consulta</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="crudseries.php" style="color: white;">SERIES</a>
                            <div class="">
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: white;">LIBROS</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Alta</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Baja</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Consulta</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: white;">PELICULAS</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Alta</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Baja</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Consulta</a>
                            </div>
                        </li>
                        <li class="nav-item right-text">
                            <a class="nav-link" href="logout.php" style="color: white;">CERRAR SESION</a>
                        </li>
                    </ul>
                </nav>
        </header>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card bd-light mb-3">
                    <div class="card-header">
                        <li class="fa fa-lock"></li><strong> Crud de Series</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <section class="text-right">
                                    <span class="btn btn-primary btn-sm" data-toggle="modal" data-target="#insertar">
                                        <i class="fa fa-plus-circle"></i> Agregar Nuevo Titulo
                                    </span>
                                </section>
                                <div id="tablaDatos">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted text-right">
                        Modulo de Leonardo Yael Bazàn Becerril.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="insertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Datos de la Serie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="agregarDatos">
                        <label>ID de la Serie</label>
                        <input type="text" id="idserie" name="idserie" class="form-control form-control-sm">
                        <label>Año de Lanzamiento</label>
                        <input type="text" id="año" name="año" class="form-control form-control-sm">
                        <label>Genero</label>
                        <input type="text" id="gen" name="gen" class="form-control form-control-sm">
                        <label>Autor</label>
                        <input type="text" id="autor" name="autor" class="form-control form-control-sm">
                        <label>Nombre de la Serie</label>
                        <input type="text" id="nomserie" name="nomserie" class="form-control form-control-sm">
                        <label>Plataforma en donde ver</label>
                        <input type="text" id="plataform" name="plataform" class="form-control form-control-sm">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="btnGuardar"onclick="agregarDatos()">Agregar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="actualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar Titulo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="modificarDatos">
                        <label>ID de la Serie</label>
                        <input require type="text" id="idserieu" name="idserieu" class="form-control form-control-sm">
                        <label>Año de Lanzamiento</label>
                        <input require type="text" id="añou" name="añou" class="form-control form-control-sm">
                        <label>Genero</label>
                        <input require type="text" id="genu" name="genu" class="form-control form-control-sm">
                        <label>Autor</label>
                        <input require type="text" id="autoru" name="autoru" class="form-control form-control-sm">
                        <label>Nombre de la Serie</label>
                        <input require type="text" id="nomserieu" name="nomserieu" class="form-control form-control-sm">
                        <label>Plataforma en donde ver</label>
                        <input require type="text" id="plataformu" name="plataformu" class="form-control form-control-sm">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Guardar Cambios</button>
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
            <div style="color: white;" class="footer-copyright text-center py-3">
                © 2020<a href=""> PublicaTec.com</a>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        $(document).ready(function() {
            mostrarDatos();
        });
    </script>
</body>

</html>