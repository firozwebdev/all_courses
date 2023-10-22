<?php

 abstract class Shape
{
    abstract function getArea();

    abstract function getPerimeter();
}

class Rectangle extends Shape
{
    private $base, $height;

    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base)
    {
        $this->base = $base;
    }

    public function setheight($height)
    {
        $this->height = $height;
    }

    function getArea()
    {
        return $this->base * $this->height;
    }
    public function getPerimeter()
    {
        // TODO: Implement getPerimeter() method.
    }
}

class Triangle extends Shape{
 public function getPerimeter()
 {
     // TODO: Implement getPerimeter() method.
 }
 public function getArea()
 {
     // TODO: Implement getArea() method.
 }
}
$triangle = new Triangle();