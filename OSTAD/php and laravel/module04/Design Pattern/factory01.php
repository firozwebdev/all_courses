<?php
/*
The Factory Pattern is a creational design pattern that provides an interface for
creating objects but lets subclasses alter the type of objects that will be created.
This pattern defines an interface for creating an object but lets the subclasses alter
the type of objects that will be instantiated.

In PHP, the Factory Pattern can be implemented in various ways. Here's an example
demonstrating the Factory Pattern using a simple example of creating different types of vehicles.
*/
//Vehicle Interface and Implementations:

//First, let's define an interface for vehicles and two implementations: `Car` and `Bike`.

interface Vehicle {
    public function drive();
}

class Car implements Vehicle {
    public function drive() {
        echo "Driving a car.";
    }
}

class Bike implements Vehicle {
    public function drive() {
        echo "Riding a bike.";
    }
}


// Vehicle Factory:

//Next, create a Vehicle Factory that will be responsible for creating different types
// of vehicles based on a given type.

class VehicleFactory {
    public static function createVehicle($type) {
        switch($type) {
            case 'car':
                return new Car();
            case 'bike':
                return new Bike();
            default:
                throw new \InvalidArgumentException("Invalid vehicle type");
        }
    }
}



// Usage Example:

//Now, you can use the Vehicle Factory to create different vehicles without worrying
// about the specific implementation details.

// Usage example:

// Create a car using the factory
$car = VehicleFactory::createVehicle('car');
$car->drive();  // Output: Driving a car.

// Create a bike using the factory
$bike = VehicleFactory::createVehicle('bike');
$bike->drive(); // Output: Riding a bike.

/*

In this example, the `VehicleFactory` class encapsulates the object creation logic.
You can create vehicles by calling `VehicleFactory::createVehicle('car')` or
`VehicleFactory::createVehicle('bike')`, and it returns the appropriate vehicle instance.

This way, the client code (the code that wants to create vehicles) does not need to
worry about the specific class instantiation details, making the system more modular
and easier to maintain.
*/