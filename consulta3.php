<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA BS POR SELECCION</title>
</head>
<body>
<?php
    include("conectarse.php");
    $link = Conectarse();
    
    $opcion = $_POST['opcion'];
    switch($opcion){
        case "nombre":
            $nombre = $_POST['nombre'];
            $result = mysqli_query($link, "SELECT * FROM usuario WHERE nombre='$nombre'");
            break;
        
        case "apellidos":
            $apellidos = $_POST['apellidos'];
            $result = mysqli_query($link, "SELECT * FROM usuario WHERE apellidos='$apellidos'");
            break;

        case "dni":
            $dni = $_POST['dni'];
            $result = mysqli_query($link, "SELECT * FROM usuario WHERE dni='$dni'");
            break;

    }
?>

<table border=1 cellspacing="1" cellpadding="1" align="center">
    <tr><td>ID</td><td>Nombre</td><td>Apellidos</td><td>DNI</td></tr>
    <?php
    while($row = mysqli_fetch_array($result)){
        printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>",  
        $row["id"], $row["nombre"], $row["apellidos"], $row["dni"]);
    }

    mysqli_free_result($result);
    mysqli_close($link);
    ?>
</table>
</body>
</html>
