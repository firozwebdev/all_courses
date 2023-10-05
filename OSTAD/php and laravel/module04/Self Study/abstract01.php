<?php
// Abstract class definition
abstract class Shape {
    protected $color;

    // Constructor for the abstract class
    public function __construct($color) {
        $this->color = $color;
    }

    // Abstract method to calculate area
    abstract public function calculateArea();
}

// Concrete class extending the abstract class
class Circle extends Shape {
    private $radius;

    // Constructor for the concrete class
    public function __construct($color, $radius) {
        parent::__construct($color);
        $this->radius = $radius;
    }

    // Implementation of the abstract method to calculate area for a circle
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Concrete class extending the abstract class
class Square extends Shape {
    private $sideLength;

    // Constructor for the concrete class
    public function __construct($color, $sideLength) {
        parent::__construct($color);
        $this->sideLength = $sideLength;
    }

    // Implementation of the abstract method to calculate area for a square
    public function calculateArea() {
        return pow($this->sideLength, 2);
    }
}

// Usage of the classes
$circle = new Circle('Red', 5);
$square = new Square('Blue', 4);

echo "Circle Area: " . $circle->calculateArea() . "\n"; // Output: Circle Area: 78.539816339745
echo "Square Area: " . $square->calculateArea() . "\n"; // Output: Square Area: 16
