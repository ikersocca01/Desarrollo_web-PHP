<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $a = 8;
    $b = 3;
    $c = 3;
    echo"Resultado de $a==$b&&($c>$b) es ", $a==$b && ($c>$b), "<br>";
    echo"Resultado de $a!=$b||($b <= $c) es ", $a != $b || ($b <= $c), "<br>";
    
    echo"Resultado de $a < $b es ",$a < $b,"<br>";
    echo "Resultado de $b <= $c es", $b <= $c,"<br>";
    
    ?>
</body>
</html>