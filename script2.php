<?php
$a = "Beto";        //Asigna el valor de "Beto" a $a
$b = &$a;           //Referencia $a vía $b
$b = "Mi nombre es $b";         //Modifica $b
echo"Resultado de a: $a","<br>";    //$a tambien se modifica
echo "Resultado de b: $b";