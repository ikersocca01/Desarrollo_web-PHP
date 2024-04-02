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
            $result = mysqli_query($link, "Select *usuario where nombre='$nombre'");
            break;
        
            case "apellidos":
                $dni = $_POST['apellidos'];
                $result = mysqli_query($link, "Select *usuario where apellidos='$apellidos'");
                break;

                case "dni":
                    $dni = $_POST['dni'];
                    $result = mysqli_query($link, "Select *usuario where dni='$dni'");
                    break;

    }
    ?>
    <table border=1 cellspacing="1" cellpading="1" align="center">
        <tr><td>ID</td><td>Nombre</td><td>Apellidos</td><td>DNI</td></tr>
        <?php
        while($row =mysqli_fetch_array($result)){
            printf("<TR><TD>%d</TD><TD>%s</TD>
            <TD>%s</TD><TD>%d</TD></TR>",  
            $row["id"],$row["nombre"],$row["apellidos"],$row["dni"]);
        }


        mysqli_free_result($result);
        mysqli_close($link);
        ?>
        </table>

</body>
</html>