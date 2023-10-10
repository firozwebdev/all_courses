<?php

//The Prototype pattern is a creational design pattern that allows you to create new objects by copying an existing object,
// known as the prototype. In PHP, you can implement the Prototype pattern by creating a copy method in the class you want to clone.
// Here's an example of how you can implement the Prototype pattern in PHP:

//First, create a `Prototype` interface that declares the `copy` method:

interface Prototype
{
    public function copy();
}


//Next, create a concrete class that implements the `Prototype` interface:

class ConcretePrototype implements Prototype
{
    private $property;

    public function __construct($property)
    {
        $this->property = $property;
    }

    public function setProperty($property)
    {
        $this->property = $property;
    }

    public function getProperty()
    {
        return $this->property;
    }

    public function copy()
    {
        // Create a new object and copy the property value from the current object
        $copy = new ConcretePrototype($this->property);
        return $copy;
    }
}

//In this example, `ConcretePrototype` is a class that implements the `Prototype` interface.
// It has a property and a copy method that creates a new object and copies the property value to the new object.

//Usage example:


// Client code
$original = new ConcretePrototype("Original Property");
$copy = $original->copy();

// Output original object property
echo "Original Object Property: " . $original->getProperty() . "\n";

// Output copied object property
echo "Copied Object Property: " . $copy->getProperty() . "\n";

// Change the property value of the copied object
$copy->setProperty("Copied Property Updated");

// Output original object property (unchanged)
echo "Original Object Property: " . $original->getProperty() . "\n";

// Output copied object property after modification
echo "Copied Object Property: " . $copy->getProperty() . "\n";


/*
In this example, the `ConcretePrototype` object is cloned using the `copy` method,
creating a new object with the same property value. You can modify the property of the copied object without affecting
the original object, demonstrating the use of the Prototype pattern in PHP.
*/