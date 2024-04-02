<!--Iker Soto Carrasco
05/03/2024 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de Funciones</title>
    <script>
        function validar() {
         if (document.form_calculo.dato1=="") {
            alert("Ingresa algún numero");
            document.form_calculo.focus();
            return 0;
         }
         if (document.form_calculo.operacion=="") {
            alert("Ingresa alguna operacion");
            document.form_calculo.focus();
            return 0;
         }
            if (document.form_calculo.dato1=="" &&document.form_calculo.dato2=""){
            alert("Ingresa ambos numero");
            document.form_calculo.focus();
            return 0;
            }
         return 0;
    }
        
        </script>
</head>
<body>
    <?php
    if(!$_POST){
    ?>
    
    <h1>EJEMPLO DE PRCOESADO DE FORMULARIOS</h1>
    <table>
        <form method="POST"  action="calculadora.php" name="form_calculo" onsubmit="validar()">
            <tr>
                <td>Dato 1: </td>
                <td colspan="2"><input type="number"name="dato1" autocomplete="on"></td>
                <td>Dato 2: </td>
                <td colspan="2"><input type="number"name="dato2" autocomplete="on"></td>
            </tr>
            <tr>
                <td ><input type="radio" name="operacion" value="suma">Suma</td>
                <td ><input type="radio" name="operacion" value="resta">Resta</td>
                <td ><input type="radio" name="operacion" value="multiplicacion">multiplicacion</td>
                <td colspan="2"><input type="radio" name="operacion" value="division">Divide</td>
            </tr>
            <tr>
                <td><input type="submit"  value="Enviar" name="enviar"></td>
            </tr>
        </form>
        </table>

        <?php
        }else{
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
    }
    ?>

</body>
</html>