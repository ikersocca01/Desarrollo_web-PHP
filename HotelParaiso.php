<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Paraiso</title>
</head>
<style>
    body{
        background-color:#B8D5B7;
        font-family: 'Times New Roman', Times, serif;

    }
    h1{
        text-align: center;
        color: #7B82E6;
        
    }
    td{
        font-size: 15px;
        font-family: 'Times New Roman', Times, serif;
        font-style: normal;
    }

</style>
<body>
    <h1>Hoteles El paraiso</h1>
    <h2>Sistema de reserva de habitaciones:</h2>
    <form method="POST" action="procesa_hotel.php">
        <table border="0">
            <tr>
                <td align="RIGHT">Introduzca su nombre:</td>
                <td ><input type="text" size="50" name="nombre" autocomplete="on"></td>
                <td colspan="3"><br></td>
            </tr>
            <tr>
                <td align="RIGHT">Introduzca una clave para su identificacion (4 letras)</td>
                <td><input type="text" maxlength="4" name="clave" autocomplete="on"></td>
            </tr>
            <tr>
                <td align="RIGHT">Tipo de habitacion</td>
                
            </tr>
            <tr>
                <td><input type="radio" name="habitacion" >Individual</td>
                <td><input type="radio" name="habitacion"  checked>Doble</td>
                
            </tr>
            <tr>
                <td>Opciones extra:</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="Extra1"CHECKED >Desayuno en cama</td>
                <td colspan="3"><input type="checkbox" name="Extra2" >Jacuzzi</td>
                <td><input type="checkbox" name="Extra3" >Climatizador</td>
               
            </tr>
            <TR>
                <TD align="center" colspan="3" width="40px" height="30px">
                    
                    <input type="image" src="proximo.png" action="formularios.html" alt="submit" name ="imagen">
                </TD>
            </TR>
            
        </table>
    </form>

</body>
</html>