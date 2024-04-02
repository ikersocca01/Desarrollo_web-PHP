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
    <h1>EJEMPLO DE PRCOESADO DE FORMULARIOS</h1>
    <table>
        <form method="POST"  action="aritmetica.php" name="form_calculo">
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
                <td><input type="submit"  value="Enviar" name="enviar" onsubmit="validar()"></td>
            </tr>
        </form>
    </table>
</body>
</html>