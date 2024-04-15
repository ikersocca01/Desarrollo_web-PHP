<body>
    <h2>Ejemplo consulta base de datos mybd con imagenes</h2>
    <?php
    include "conectarse.php";
    $link=Conectarse();
    $result=mysqli_query($link,"select * from articulo");
    ?>
    <table border="1" cellspacing="1"cellspacing="1">
        <tr><td>id art&iacute;culo</td>
        <td>nombre</td>
        <td>imagen</td>
</tr>
<?php
while($row=mysqli_fetch_array($result)){
    $var="<img src='ruta/".$row['archivo']."'width=80>";
    printf("<tr><td>%d</td><td>%s</td><td>%s</td></tr>",
    $row["idArt"],$row["titulo"],$var);
}

mysqli_free_result($result);
mysqli_close($link);
?>
    </table>
</body>