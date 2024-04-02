<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJEMPLO CONTECTARSE PHP A BD</title>
</head>
<body>
    <?php //invocamos php
    function Conectarse(){
        if(!$link = mysqli_connect("151.106.100.27","proydweb_p2024","bd_p2@24","proydweb_p2024")){ //Mandamos los argumentos deseados
            echo "Error conectando a la base de datos";
            exit();
        }
        return $link; //devuelve la conexión
    }
    ?>

</body>
</html>