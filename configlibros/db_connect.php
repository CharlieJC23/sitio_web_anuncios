<?php
//conexion a base de datos
                       //localhost, usuario, contraseña,base de datos
	$mysqli= new mysqli("localhost", "root", "", "anuncios");
	if(mysqli_connect_errno()){
		echo "Este sitio esta presentando problemas";
	}
	$mysqli->set_charset("utf8");
	//$mysqli->close();