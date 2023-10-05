<?php
/*
 * Traits in PHP allow you to reuse methods in several independent classes.
 *  Traits are similar to classes, but they can't be instantiated on
 * their own. Here's an example to illustrate how traits work:
 */

// Trait definition
trait Greet {
    public function sayHello() {
        echo "Hello, ";
    }

    public function sayGoodbye() {
        echo "Goodbye!";
    }
}

// Class using the Greet trait
class User {
    use Greet; // Include the Greet trait in the User class

    public function __construct($name) {
        $this->name = $name;
    }

    public function greetUser() {
        $this->sayHello();
        echo $this->name . ". ";
        $this->sayGoodbye();
    }
}

// Class using the Greet trait
class Guest {
    use Greet; // Include the Greet trait in the Guest class

    public function greetGuest() {
        $this->sayHello();
        echo "Guest. ";
        $this->sayGoodbye();
    }
}

// Usage of the classes
$user = new User("John");
$user->greetUser();
// Output: Hello, John. Goodbye!

$guest = new Guest();
$guest->greetGuest();
// Output: Hello, Guest. Goodbye!


/*
 * In this example, Greet is a trait containing the sayHello()
 * and sayGoodbye() methods. Both the User and Guest classes
 * use the Greet trait. By using the use keyword, the methods from
 * the trait become available in the classes using the trait.

Traits allow you to reuse code in multiple classes without inheritance.
 It provides a way to compose classes horizontally, enabling
flexibility in class design.
 */
