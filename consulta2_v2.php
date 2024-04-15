<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA 1</title>
</head>
<style>
    body{
        background-color:#EFE4F5;
    }
    table tr td{
        position: relative;
    }



</style>
<body>
<?php
 include("conectarse.php");
 $link = Conectarse();
 ?>

    <center><h2>Seleccionar Dato a Buscar</h2></center>
   
    <form action="consulta2_v2.php" method="post">
        <table >
            <tr>
                <td>Nombre</td>
                <td><select name = "nombre">
                
                <?php
                $rnom =  mysqli_query($link,"SELECT DISTINCT nombre FROM usuario ORDER BY nombre") or die (mysqli_error($link));
                while($row = mysqli_fetch_array($rnom))
                {echo '<option>'.$row['nombre'];
                }
                ?>
                </select>
                </td>
                <td>Apellido</td>
                <td><select name = "apellidos">
                
                <?php
                $rape =  mysqli_query($link,"SELECT DISTINCT apellidos FROM usuario ORDER BY apellidos") or die (mysqli_error($link));
                while($row = mysqli_fetch_array($rape))
                {echo '<option>'.$row['apellidos'];
                }
                ?>
                </select>
                </td>

                <td>DNI</td>
                <td><select name = "dni">
                
                <?php
                $rdni =  mysqli_query($link,"SELECT DISTINCT dni FROM usuario ORDER BY dni") or die (mysqli_error($link));
                while($row = mysqli_fetch_array($rdni))
                {echo '<option>'.$row['dni'];
                }
                ?>
                </select>
                </td>


            </tr>
            <tr>
                <td></td>
                <td colspan="1"><input type="radio" name="opcion" value="nombre">Nombre</td>
                <td></td>
                <td colspan="1"><input type="radio" name="opcion" value="apellidos">apellidos</td>
                <td></td>
                <td colspan="1"><input type="radio" name="opcion" value="dni">DNI</td>
            </tr>

        </table>
        <center><button type="submit">Mostrar</button></center>
    </form>

    <?php
    if($_POST){
        
            $opcion = $_POST['opcion'];
    switch($opcion){
        case "nombre":
            $nombre = $_POST['nombre'];
            $result = mysqli_query($link, "Select *from usuario where nombre='$nombre'");
            break;
        
        case "apellidos":
                $apellidos = $_POST['apellidos'];
                $result = mysqli_query($link, "Select *from usuario where apellidos='$apellidos'");
                break;

        case "dni":
                    $dni = $_POST['dni'];
                    $result = mysqli_query($link, "Select *from usuario where dni='$dni'");
                    break;

    }

    ?>

    <center><h2>Resultados de la busqueda</h2></center>
    <table border=1 cellspacing="1" cellpading="1" align="center">
        <tr><td>ID</td><td>Nombre</td><td>Apellidos</td><td>DNI</td></tr>
        <?php
        while($row =mysqli_fetch_array($result)){
            printf("<TR><TD>%d</TD><TD>%s</TD>
            <TD>%s</TD><TD>%d</TD></TR>",  
            $row["id"],$row["nombre"],$row["apellidos"],$row["dni"]);
        }


        mysqli_free_result($result);
        mysqli_close($link);

    }

        ?>
        </table>
    
    
</body>
</html>