<?php

    if($_POST){
        //Receive information from the form HTML (Method $_Post) 
        $nombre = $_POST["TxtNombre"];
        echo "Hola ". $nombre;
        }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML5</title>
</head>
<body>
    <form action="ejercicio-1.php" method="post">
        Nombre:
        <input type="text" name="TxtNombre" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>