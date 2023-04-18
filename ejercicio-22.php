<?php




class oneClass{

    public static function oneMethod(){
        echo "Hello, i am a static method";
    }
}

$obejct = new oneClass();
$obejct->oneMethod();

oneClass::oneMethod(); //when i have a static method i call it like this 








?>