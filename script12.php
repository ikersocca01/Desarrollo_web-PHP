<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!--
            FUNCIONES EN php
             Las funciones en php son iguales a C, debes nombrarla y definir los parametros que se 
        ingresaran en dicha función. Dentro de las funciones pueden ir operaciones, impresiones, llamados y
        demás. Esto optimiza el código para no hacer las operaciones directamente.
        -->
    <?php
    function media_aritmetica($a,$b){

        $media = ($a + $b) /2;
        return $media;
    }

        echo"Media: ", media_aritmetica(4,6),"<br><br>";
        $m = media_aritmetica(4,6);
        echo "Media: ", $m,"<br><br>";
        echo "Media: ", media_aritmetica(3242,524543),"<br>";
        $val1 = 4;
        $val2 = 5;
        echo"Media: ", media_aritmetica($val1, $val2),"<br>";
    ?>
</body>
</html>