<?php
include("conectarse.php");
$link = Conectarse();

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];

$insert = mysqli_query($link,"INSERT into usuario(nombre,apellidos,dni) VALUES ('$nombre', '$apellidos', '$dni')") or die(mysqli_error($link));

echo "<script> header.location.href = 'inserta.php'</script>";