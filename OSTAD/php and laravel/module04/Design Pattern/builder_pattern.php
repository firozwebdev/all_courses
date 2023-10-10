<?php
/*
The Builder pattern is a creational design pattern used to construct a complex object step by step.
It allows you to produce different types and representations of an object using the same construction code.
In PHP, you can implement the Builder pattern using classes and methods. Here's an example of how you can
implement the Builder pattern in PHP:
*/
//First, let's create a `Product` class that we want to build using the Builder pattern:


class Product
{
    private $part1;
    private $part2;

    public function setPart1($part1)
    {
        $this->part1 = $part1;
    }

    public function setPart2($part2)
    {
        $this->part2 = $part2;
    }

    public function show()
    {
        echo "Part 1: " . $this->part1 . "\n";
        echo "Part 2: " . $this->part2 . "\n";
    }
}


//Next, create a `Builder` interface that defines the methods for building different parts of the `Product`:


interface Builder
{
    public function buildPart1();
    public function buildPart2();
    public function getProduct();
}


//Now, create a concrete builder class that implements the `Builder` interface and constructs the `Product`:


class ConcreteBuilder implements Builder
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPart1()
    {
        $this->product->setPart1("Part 1");
    }

    public function buildPart2()
    {
        $this->product->setPart2("Part 2");
    }

    public function getProduct()
    {
        return $this->product;
    }
}


//Finally, create a `Director` class that orchestrates the construction process:


class Director
{
    public function construct(Builder $builder)
    {
        $builder->buildPart1();
        $builder->buildPart2();
    }
}


//Usage example:


// Client code
$builder = new ConcreteBuilder();
$director = new Director();
$director->construct($builder);

$product = $builder->getProduct();
$product->show();


//In this example, the `Director` class orchestrates the construction process using the `ConcreteBuilder` class.
// The client code creates a builder instance, passes it to the director, and gets the final product.
// This way, you can create complex objects with different configurations using the Builder pattern in PHP.