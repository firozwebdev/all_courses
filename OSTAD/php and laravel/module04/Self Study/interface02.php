<?php
// Interface definition
interface Vehicle {
    public function drive();
    public function stop();
}

// Class implementing the Vehicle interface
class Car implements Vehicle {
    public function drive() {
        echo "Car is moving forward.\n";
    }

    public function stop() {
        echo "Car has stopped.\n";
    }
}

// Class implementing the Vehicle interface
class Bicycle implements Vehicle {
    public function drive() {
        echo "Bicycle is pedaling.\n";
    }

    public function stop() {
        echo "Bicycle has stopped.\n";
    }
}

// Usage of the classes
$car = new Car();
$car->drive(); // Output: Car is moving forward.
$car->stop();  // Output: Car has stopped.

$bicycle = new Bicycle();
$bicycle->drive(); // Output: Bicycle is pedaling.
$bicycle->stop();  // Output: Bicycle has stopped.


/*
 * In this example, Vehicle is an interface with two abstract methods: drive() and stop().
 * Both Car and Bicycle classes implement the Vehicle interface, ensuring that they provide
 *  concrete implementations for the drive() and stop() methods.

Interfaces allow you to define a common set of methods that different classes must implement,
 ensuring a consistent behavior across different types of objects.
 */