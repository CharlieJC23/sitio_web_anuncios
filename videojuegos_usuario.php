<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta htPage Titletp-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pagina Principal</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <conexion$conexion rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <conexion$conexion rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <conexion$conexion rel="stylesheet" type="text/css" href="css/estilo.css">

    <style type="text/css">
        .wrapper {
            width: 650px;
            margin: 0 auto;
        }

        .page-header h2 {
            margin-top: 0;
        }

        table tr td:last-child a {
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
</head>

<body>
    <div id="inicio">
        <header>
            <div>
                <nav class="navbar navbar-expand-sm" style="background-color: lightslategray;">
                    <a href="index.php"><img src="./images/logo.png" height="80px" /></a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-conexion$conexion" href="videojuegos.php" style="color: white;">VIDEOJUEGOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-conexion$conexion" href="restaurantes.php" style="color: white;">COMIDA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-conexion$conexion" href="series.php" style="color: white;">SERIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-conexion$conexion" href="libros.php" style="color: white;">LIBROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-conexion$conexion" href="peliculas.php" style="color: white;">PELICULAS</a>
                        </li>
                        </li>
                        <li class="nav-item right-text">
                            <a class="nav-conexion$conexion" href="logout.php" style="color: white;">CERRAR SESION</a>
                        </li>
                    </ul>
                </nav>
        </header>
        <!--Inicia el contenedor de las imagenes y el menu -->
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="pull-left">Detalles de los videojuegos</h2>
                            <a href="agregar_juego.php" class="btn btn-success pull-right">Agregar un nuevo juego</a>
                        </div>
                        <?php
                        // Primero se incluye la coxion a la bd
                        require_once "database.php";

                        // Consulta a la bd para revisar si esta vacia
                        $sql = "SELECT * FROM juegos";
                        if ($result = mysqli_query($conexion, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>id</th>";
                                echo "<th>NombreJuego</th>";
                                echo "<th>Plataforma</th>";
                                echo "<th>Acciones</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id_juego'] . "</td>";
                                    echo "<td>" . $row['nombreJ'] . "</td>";
                                    echo "<td>" . $row['plataforma'] . "</td>";
                                    echo "<td>";
                                    echo "<a href='consultar_juego.php?id_juego=" . $row['id_juego'] . "' title='Ver Registros' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                    echo "<a href='modificar_juego.php?id_juego=" . $row['id_juego'] . "' title='Modificar Registros' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='borrar_juego.php?id=_juego" . $row['id_juego'] . "' title='Borrar Registros' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                echo "</table>";
                                // Comprueba al entrar los registros en la bd
                                mysqli_free_result($result);
                            } else {
                                echo "<p class='lead'><em>No hay registros disponibles.</em></p>";
                            }
                        } else {
                            echo "ERROR: no se ha logrado acceder a la bd $sql. " . mysqli_error($conexion);
                        }

                        // Cerrar la conexion con la bd
                        mysqli_close($conexion);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Termina el contenedor de las imagenes y el menu -->
    </div>
    <!-- PIE DE PAGINA -->
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