<?php


$server = "localhost"; //127.0.0.1
$user = "root";
$password = "";

try{

    $connection = new PDO("mysql:host=$server;dbname=album", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Stable Connection";

    $sql = "INSERT INTO `fotos` (`id`, `name`, `route`) VALUES (NULL, 'this is another', 'photojoker.jpg');";
    $connection->exec($sql);

}
catch(PDOException $error){  //errors are displayed thanks to the "catch"
    echo "Error at connection".$error;
}


?>