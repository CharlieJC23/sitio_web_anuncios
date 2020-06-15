<?php include('templates/head.php'); ?>

<body>
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
                            <a class="nav-link" href="libros.php" style="color: white;">LIBROS</a>
                            <div class="">
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
    <div>
       <h1> Bienvenido <?php
        echo $_SESSION['username'];
        ?></h1>
    </div>

    <?php include('templates/footer.php'); ?>