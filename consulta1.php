<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA 1</title>
</head>
<body>
   
    <form action="consulta2.php" method="post">
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre"id="nombre"></td>
                <td>Apellido</td>
                <td><input type="text" name="apellidos" id="apellidos"></td>
                <td>DNI</td>
                <td><input type="number" name="dni" id="dni"></td>

            </tr>
            <tr>
                <td></td>
                <td colspan="1"><input type="radio" name="opcion" value="nombre">Nombre</td>
                <td></td>
                <td colspan="1"><input type="radio" name="opcion" value="apellidos">apellidos</td>
                <td></td>
                <td colspan="1"><input type="radio" name="opcion" value="dni">DNI</td>
            </tr>
            <tr>
                <td><button type="submit">Mostrar</button></td>
            </tr>

        </table>
    </form>
    
</body>
</html>