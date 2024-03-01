<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCRIPT 8</title>
</head>
<body>
    <?php
    $a = 0;
    echo"CICLO WHILE", "<br>" ;
    while ($a < 10) {  
    
        echo "El valor de a es ", $a,"<br>";
        $a++;
    }

    echo "","<br>";
    echo"","<br>";
    
    echo "CICLO FOR","<br>";
    for ($a = 0; $a < 10; $a++) {
        echo "El valor de a es ", $a,"<br>";
        $a++;
    }

echo "","<br>";
echo "","<br>";

    echo "Tablas de multiplicar del 2","<br>";
    $i=2;
    for ($a = 0; $a < 11; $a++){
    echo $i," x ",$a," Resultado = ",$a*$i , "<br>";
    }
    ?>
</body>
</html>