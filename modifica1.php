<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="lavender">
    <h1 align="center">¿Que registro desea modificar?</h1>
    <form action="modifica1.php" method="POST">
        <table>
            <tr>
                <td>
                    ID: <select name = "ne">;
                        <?php
                        include("conectarse.php");
                        $link = Conectarse();
                        $result = mysqli_query($link, "SELECT id FROM usuario");
                        while($row = mysqli_fetch_array($result)){
                            echo'<option>'.$row['id'];
                        }
                        ?>
                            <center><input type="submit" name ="accion" value="Mostrar"></center>
                </td>
            </tr>
        </table>
    </form>

                        <hr size="3" color = "white">
                        <h2 align ="center"> INTRODUZCA LOS DATOS A MODIFICAR</h2>
                       
                        <!-- INICIA EL SEGUNDO FORM -->

                   <form action="modifica2.php" method="POST">
                    <?php
                    if(!isset($_POST['ne'])) {
                        
                        $var=1;
                    
                    }else  $var = $_POST['ne'];

                    $result = mysqli_query($link, "SELECT *FROM usuario WHERE id = '$var'");
                    $row = mysqli_fetch_array($result);
                    
                    echo"
                    Nombre:
                    <input type = 'text' name = 'nombre' value = '$row[1]'<br>
                    Apellido:
                    <input type = 'text' name = 'apellidos' value = '$row[2]'<br>
                    DNI:
                    <input type = 'text' name = 'dni' value = '$row[3]'<br>
                    <input type = 'hidden' name = 'id' value = '$row[0]'<br>";
                    ?>
                    <center><input type="submit" name ="accion" value="Modificar"></center>
                </form>


</body>
</html>