<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo strlen("123456"),"<br>";
$palabras=explode(" ","Esto es una prueba");
for($i=0; $i < count($palabras); $i++)
    echo $palabras[$i],"<br>";

    echo substr("Devuelve una subcadena de otra",9,3),"<br>","<br>";
    if(chop("Cadena \n\n") == "Cadena")
        echo "Iguales <br><br>";

        echo strpos("Busca la palabra dentro de la frase","palabra"),"<br><br>";
        echo str_replace("verde","rojo","Un pez de color verde, como verde es la hierba."),"<br>";
    ?>
</body>
</html>