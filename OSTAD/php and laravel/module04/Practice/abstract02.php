<?php
// Abstract class definition
abstract class Animal {
    protected $name;

    // Constructor for the abstract class
    public function __construct($name) {
        $this->name = $name;
    }

    // Abstract method to make sound
    abstract public function makeSound();

    // Concrete method shared by all animals
    public function eat() {
        echo $this->name . " is eating.\n";
    }
}

// Concrete class extending the abstract class
class Dog extends Animal {
    // Implementation of the abstract method to make sound for a dog
    public function makeSound() {
        echo "Woof! Woof!\n";
    }
}

// Concrete class extending the abstract class
class Cat extends Animal {
    // Implementation of the abstract method to make sound for a cat
    public function makeSound() {
        echo "Meow!\n";
    }
}

// Usage of the classes
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

$dog->makeSound(); // Output: Woof! Woof!
$dog->eat();       // Output: Buddy is eating.

$cat->makeSound(); // Output: Meow!
$cat->eat();       // Output: Whiskers is eating.
