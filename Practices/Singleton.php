<?php
class Singleton {
    private static $instance; // Private static variable to hold the single instance of the class

    private function __construct() {
        // Private constructor prevents instantiation from other classes
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self(); // Create a new instance if it doesn't exist
        }
        return self::$instance;
    }

    // Example method
    public function doSomething() {
        echo "Doing something... \n";
    }

}


// Client side code
// Usage
$singleton1 = Singleton::getInstance();
$singleton1->doSomething();
$singleton1->doAnother();

$singleton2 = Singleton::getInstance();
$singleton2->doSomething();

// $singleton1 and $singleton2 are the same instance
