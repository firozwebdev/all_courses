<?php
// Abstract class definition
abstract class Shape {
    protected $name;

    // Constructor for the abstract class
    public function __construct($name) {
        $this->name = $name;
    }

    // Abstract method to calculate area
    abstract public function calculateArea();

    // Concrete method to display shape information
    public function displayInfo() {
        echo "Shape: {$this->name}\n";
        echo "Area: " . $this->calculateArea() . "\n";
    }
}

// Concrete class representing a Circle
class Circle extends Shape {
    private $radius;

    // Constructor for Circle
    public function __construct($radius) {
        parent::__construct('Circle');
        $this->radius = $radius;
    }

    // Implementation of the abstract method to calculate area for a circle
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Concrete class representing a Rectangle
class Rectangle extends Shape {
    private $width;
    private $height;

    // Constructor for Rectangle
    public function __construct($width, $height) {
        parent::__construct('Rectangle');
        $this->width = $width;
        $this->height = $height;
    }

    // Implementation of the abstract method to calculate area for a rectangle
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Usage of the classes
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

$circle->displayInfo();
// Output:
// Shape: Circle
// Area: 78.539816339745

$rectangle->displayInfo();
// Output:
// Shape: Rectangle
// Area: 24
