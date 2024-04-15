<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesa.php" method="POST">
    <table>

    <tr>
        <td>Nombre:</td>
        <td><input type="text" name="nombre" placeholder="nombre*" id="nombre"></td>
    </tr>
    <tr>
        <td>Apellido:</td>
        <td><input type="text" name="apellidos" placeholder="apellidos*" id="apellidos"></td>
    </tr>
    <tr>
        <td>DNI:</td>
        <td><input type="number" name="dni" placeholder="DNI*" id="dni"></td>
    </tr>
    <tr>
        <td><button type="submit" id="continue">CONTINUAR</button></td>
    </tr>
    </table>
    </form>
</body>
</html>