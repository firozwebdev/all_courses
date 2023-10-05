<?php
/*
 * In PHP, an interface is a collection of abstract methods.
 * When a class implements an interface, it must provide concrete implementations
 *  for all  the methods declared in the interface. This allows you to
 * define a common set of methods that multiple classes must implement,
 * ensuring a consistent interface across different classes.

Here's the basic syntax for defining an interface in PHP:
 */

interface MyInterface {
    public function method1();
    public function method2($param);
}

/*
 * In this example, MyInterface is an interface with two abstract methods: method1()
 * and method2($param). Any class that implements MyInterface must provide
 * concrete implementations for both of these methods.

Here's an example of a class implementing an interface:
 */

class MyClass implements MyInterface {
    public function method1() {
        echo "Implementation of method1\n";
    }

    public function method2($param) {
        echo "Implementation of method2 with parameter: $param\n";
    }
}

/*
 * In this case, MyClass implements MyInterface and provides concrete implementations
 *  for both method1() and method2($param). Interfaces are useful for defining
 *  contracts that classes must adhere to. They allow you to ensure that classes
 * implementing the interface will have specific methods available, promoting
 * consistency in your codebase. It's also worth noting that a class can implement
 * multiple interfaces in PHP, allowing it to adhere to multiple contracts.
 */