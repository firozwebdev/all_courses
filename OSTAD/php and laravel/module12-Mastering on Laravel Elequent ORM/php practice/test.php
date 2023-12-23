<?php
class Test{
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(){
        echo "My name is {$this->name} and age is {$this->age}";
    }
}

$sabuz = new Test("Sabuz",34);
$sabuz->getName();