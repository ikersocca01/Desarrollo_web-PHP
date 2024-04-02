//Iker Soto Carrasco
//05/03/2024

<?php
$val1 = $_POST['dato1'];
$val2 = $_POST['dato2'];
$opc = $_POST['operacion'];

    if ($opc == 'suma') {
        $resultado = $val1+$val2;
    } elseif ($opc == 'resta') {
            $resultado = $val1-$val2;
        } elseif ($opc == 'division'){
        if ($val2 != 0) {
            $resultado = $val1 / $val2;
        } else {
            echo "No es posible dividir entre 0";
        }
    } elseif ($opc == 'multiplicacion') {
        $resultado = $val1 * $val2;
    }
    
    if (isset($resultado)) {
    echo "El resultado de la operación es: $resultado";
    }
    else echo"Ingrese algún valor para realizar operacion";
    ?>

<br><br><br>
    
    <button onclick="window.history.back()">Volver</button>