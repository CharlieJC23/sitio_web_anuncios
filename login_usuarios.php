<html>
    <head>
        <title>Login usuarios con PHP y JQuery</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <style>
            body{
                background: url(resources/images/login-portada.png) no-repeat center center fixed;
                background-size: cover; 
            }
            .main-section{
                margin: 0 auto;
                margin-top: 25%;
                padding: 0;
            }
        </style>
    </head>
    <body>
        <div class="modal-dialog text-center">
            <div class="col-sm-8 main-section">
                <div class="modal-content">
                    <div class="col-12">
                        <img src="resources/images/login.png">  
                    </div>
                    <form class="col-12" action="login.php" method="post" id="formlg">
                        <div class="form-group">
                            <label for="inputUsuario" class="col-sm-2 control-label">Usuario</label>
                            <div class="col-12">
                                <input type="text" class="form-control" name="usuariolg" id="inputEmail3" placeholder="usuario" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                            <div class="col-12">
                                <input type="password" class="form-control" name="passlg" id="inputPassword3" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12">
                                <button type="submit" class="btonlg">Iniciar Sesion</button>
                            </div>
                        </div>
                        </form>
                </div> 
            </div>
        </div>
        <script> src="js/jquery-3.5.1.js"</script>
        <script src="js/main.js"></script>
    </body>
</html>
