<?php
include "Conectarse.php";
$link = Conectarse();

$nombre =$_POST['nombre'];

$target_path='imagenes/';
$archivo=$_FILES["archivo"]['name'];
$target_path=$target_path.basename($_FILES['archivo']['name']);

if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)){

    $sql = "INSERT into articulo (titulo, archivo) VALUES ('$nombre','$archivo')";

    mysqli_query($link,$sql) or die(mysqli_error($link));
}

else
//header (Location:archivo.php)
printf("No se pudo subir archivo %s a la ruta %s", $nombre, $target_path);
