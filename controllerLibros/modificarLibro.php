<?php
//conexion a la base de datos
include('../configlibros/db_connect.php');
$titulo=$_POST['titulo'];
$editorial=$_POST['editorial'];
$autor=$_POST['autor'];
$autorap=$_POST['autorap'];
$autoram=$_POST['autoram'];
$cat=$_POST['cat'];
$fecha=$_POST['fecha'];
$idioma=$_POST['idioma'];
$libreria=$_POST['libreria'];
$precio=$_POST['precio'];
$descripcion=$_POST['des'];
$idlib=$_POST['libro'];
echo 'id='.$id.'<br>';
//para recibir la foto

$foto=$_FILES['foto'];
$nombrefoto=$foto['name'];
$type = $foto['type'];
$url_temp = $foto['tmp_name'];

$img= 'img_lib.png';
//si tiene nombre la foto hacer
if($nombrefoto != ''){
	//direccion donde se guardara la foto
    $dirimg = "../images/libros/";
    //cambiando el nombre de la foto para no repetir
	$img='img_'.md5(date('d-m-Y H:m:s')).'.jpg';
	$src =$dirimg.$img;
}
//insertando informacion del autor
//para ver si existe el autor
$query="SELECT id FROM autor where nombre='$autor' and appaterno='$autorap'";
    $consulta=$mysqli->query($query);
    $fila=$consulta->fetch_assoc();
    //si no existe entonces
        if(is_null($fila['id']))
	{
        //echo 'no hay registro';
        //no hay autor con ese nombre entonces registrar
        $query="INSERT INTO autor(nombre,appaterno,apmaterno) VALUES('$autor','$autorap','$autoram')";
        if($mysqli->query($query)){
            //  echo "Datos guardados\n";
           $idautor= $mysqli->insert_id;
            //echo $idautor;
              }else{
                  //si hay errores muestra el error sy es de mysql
                  echo("Error description: " . $mysqli -> error);
              }
    }
    else{
    //echo "si existen registros en la base";
    $idautor=$fila['id'];
    }
//---------------------------------------------------------Actualizar dator en tabla libros-----------------------------
$campos="titulo = '$titulo',autor='$idautor',categoria = '$cat', editorial = '$editorial',idioma ='$idioma'
,fecha ='$fecha', precio = '$precio',descripcion ='$descripcion',imagen ='$img',libreria='$libreria'";
        $query="UPDATE libro SET $campos WHERE id='$idlib'";
	if($mysqli->query($query)){
        if($img !=''){
            //mover la imagen en la carpeta
            move_uploaded_file($url_temp,$src);
            // echo "<span style='color:green;'>El archivo ha sido subido</span><br>";
            //obtener el id de el registro recien ingresado
            header('Location: ../librosDetalle.php?id='.$idlib);
          }else{
              echo("Error description: con la imagen");
          }
	}else{
		echo "Error no se pudo actualizar los datos";
	}
    
?>