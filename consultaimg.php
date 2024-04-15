<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA IMAGEN</title>
</head>
<body>
    <?php
    include("conectarse.php");
    $link = Conectarse();
    $result=mysqli_query($link,"select * from articulo");
    ?>

    <table border="1" cellspacing ="1" cellpading="1">
        <tr>
            <td>Id Art&iacute;culo</td>
            <td>Nombre</td>
            <td>Imagen</td>
        </tr>

    <?php
    while($row=mysqli_fetch_array($result))
    {
        $var="<img src= 'imagenes/".$row['archivo']."'width=80>";
        printf("<tr><td>%d</td><td>%s</td>
                <td>%s</td></tr>", 
                $row["IdArt"],$row["titulo"],$var);
    }

    mysqli_free_result($result);
    mysqli_close($link);

    ?>
    </table>
</body>
</html>