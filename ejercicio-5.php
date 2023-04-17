<?php 

    if($_POST){

        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];
        
        if($valorA>$valorB){
            echo "Efectivamente, el valor a es mayor que el valor b pendejo puto";
        }
       

    }



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>relational operators</title>
</head>
<body>
    
    <form action="ejercicio-5.php" method="post">

        Valor 1:
        <input type="text" name="valorA" id="">
        <br>
        Valor 2:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">

    </form>


</body>
</html>