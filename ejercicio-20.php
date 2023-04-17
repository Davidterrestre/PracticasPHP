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

class worker extends person{
    public $work;
    public function presentWorker(){
        echo "Hello, i am ".$this->name." and i work as a ".$this->work;
    }
}


$objectWorker= new worker(); 
$objectWorker->assignName("Big Rob"); 
$objectWorker->printName();
$objectWorker->work="teacher";
$objectWorker->presentWorker();




?>