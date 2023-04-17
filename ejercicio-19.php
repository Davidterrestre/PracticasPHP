<?php 


class person{

    public $name; //properties
    private $age;
    protected $height;

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

$objectAlumn = new person(); //the "new" is to create an objects, this is called "intance"
$objectAlumn->assignName("Big Rob"); //Called an method
$objectAlumn->printName();


$objectAlumn2 = new person();
$objectAlumn2->assignName("Luquitas"); 
$objectAlumn2->printName();
$objectAlumn2->showAge();






?>