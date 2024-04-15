<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario pra consulta de DATOS</title>
</head>
<body>
    <br><br>
    <form action="subir.php" method="POST" enctype="multipart/form-data">
        <table width="40%" align="center">
            <tr>
                <td width="10%">Titulo:</td>
                <td width="30%"><input type="text" name="nombre" size="35" maxlength="70"></td>
            </tr>
            <tr>
                <td>Archivo</td>
                <td><input type = "file" name = "archivo" id = "archivo" size = "25" maxlength="70"></td>
            </tr>
            <tr>
                <td colspan="2"><br><br></td>
            </tr>
            <tr>
                <td align="center" colspan="3"><input type="submit" name="accion" value="Enviar"></td>
            </tr>
        </table>
    </form>
</body>
</html>