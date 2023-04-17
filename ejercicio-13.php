<?php 

function imprimirNombre($nombre,$apellido=""){ //Si a mi argumento le pongo ="" quiere decir que no es obligatorio complerare su valor.

    //Intrucciones
    echo "Holaa ".$nombre." ".$apellido."<br>";

}

//llamar a la función

imprimirNombre("Juan Paco", "De Lamar");
imprimirNombre("Araceli","Pedragona");
imprimirNombre("Pablo");

?>