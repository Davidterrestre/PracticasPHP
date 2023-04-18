<?php 


class person{

    public $name; //properties
    private $age;
    protected $height;


    function __construct($newName){
        $this->name = $newName;
    } //will allow me to create an object from a master data "construct".

    public function assignName($newName){  //Creating a actions or methods

        $this->name = $newName;

    }
    public function printName(){
        echo "Hello, i am ".$this->name."<br>";
    }
    public function showAge(){
        $this-> age = 20;
        return $this->age;
    }

}

$objectAlumn = new person("Roberto"); //the "new" is to create an objects, this is called "intance"
//objectAlumn->assignName("Big Rob"); //Called an method
$objectAlumn->printName();