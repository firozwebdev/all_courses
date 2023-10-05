<?php

 class Animal {
    public function speak() {
        echo "Animal speaks!";
    }

    final public function eat() {
        echo "Animal is eating.";
    }
}

class Dog extends Animal {
    // This will cause an error because eat() method in Animal class is final and cannot be overridden.
    public function eat() {
        echo "Dog is eating.";
    }
}

$animal = new Animal();
$animal->speak(); // Output: Animal speaks!
$animal->eat();   // Output: Animal is eating.

$dog = new Dog();
$dog->speak();     // Output: Animal speaks! (Inherited from Animal class)
$dog->eat();       // This will cause a fatal error because eat() method cannot be overridden.

/*
 * In this example, the Animal class has a final method eat(), which means
 *  it cannot be overridden by any subclass. When we attempt to override
 * the eat() method in the Dog class, it results in a fatal error, indicating
 * that final methods cannot be modified in subclasses.

This use of the final keyword helps in situations where you want to enforce
a specific behavior and prevent any further modifications to that behavior
 in derived classes.
 */