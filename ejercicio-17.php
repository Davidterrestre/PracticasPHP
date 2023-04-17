<?php

$fruits = array("a"=>"apple","o"=>"orange","w"=>"watermelon");  // this way the index is changed

print_r($fruits);

echo "<br>".$fruits["a"];

foreach($fruits as $index=>&$value){

    echo "<br>".$index." has this index";
    echo "<br>".$value." has this value";

}

echo "<br>"."-------------------------------------------------";



$fruitsInFor = array("apple","orange","watermelon");

$newIndex = 0; 

for($newIndex; $newIndex < 3; $newIndex ++){     
    echo "<br>".$fruitsInFor[$newIndex];
}


?>