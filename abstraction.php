<?php

/*
Abstract classes are base classes, they need to be 
extended by child classes in order to use the attribues 
and methods
*/

abstract class Animal{
    public $name;
    public $colour;

    public function describe(){
        return $this->name . ' is ' . $this->colour;
    }

    abstract public function makeSound();
}

class Duck extends Animal{
    public function describe(){
        return parent::describe();
    }

    public function makeSound(){
        return '<br>Quack';
    }
}

$animal = new Duck();
$animal->name = "Quacker";
$animal->colour = "Yellow";
echo $animal->describe();
echo $animal->makeSound();

?>