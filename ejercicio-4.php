<?php 

    if($_POST){

        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];
        
        //add
        $add = $valorA + $valorB;

        //subtract
        $subtract = $valorA - $valorB;

        //multiplication
        $multiplication = $valorA * $valorB;
        
        //division
        $division = $valorA / $valorB;

        echo $add;
        echo "<br>".$subtract;
        echo "<br>".$multiplication;
        echo "<br>".$division;

    }



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators arithmetic</title>
</head>
<body>
    
    <form action="ejercicio-4.php" method="post">

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