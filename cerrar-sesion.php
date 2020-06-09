<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cerrar sesion</title>
    </head>
    <body>
        <?php
        session_start();

        // Elimina la variable email en sesión.
        unset($_SESSION['email']);

        // Elimina la sesion.
        session_destroy();

        // Redirecciona a la página de login.
        header("HTTP/1.1 302 Moved Temporarily");
        header("Location: index.html");
        ?>
    </body>
</html>
