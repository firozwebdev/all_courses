<?php
/*
 * The Singleton pattern ensures that a class has only one instance and provides a global point to this instance. Here's how you can implement the Singleton pattern in PHP:

*/
class Singleton
{
    private static $instance = null;

    private function __construct()
    {
        // Private constructor to prevent instantiation from outside the class
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function showMessage()
    {
        echo "Hello, I am a Singleton!";
    }
}

// Usage example:

// Attempt to create multiple instances
$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

// Both instances are the same
$singleton1->showMessage(); // Output: Hello, I am a Singleton!
echo "\n";
$singleton2->showMessage(); // Output: Hello, I am a Singleton!

/*
In this implementation:

- The `getInstance` method is used to access the single instance
of the class. If an instance does not exist, it creates one.
 If an instance already exists, it returns the existing one.
- The constructor of the class is made private, so the class cannot
be instantiated directly from outside.
- The static property `self::$instance` holds the single instance
of the class.
- The `showMessage` method is just an example method to demonstrate
the usage of the Singleton pattern.

Using the Singleton pattern ensures that there is only one instance
 of the class throughout the application, which can be useful in
various scenarios like database connections, logging, caching, etc.
 */