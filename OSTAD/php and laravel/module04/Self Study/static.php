<?php
class MyClass {
    public static $staticProperty = "Static Property";

    public function printStaticProperty() {
        echo self::$staticProperty . "\n";
    }
}

// Accessing static property without creating an instance
echo MyClass::$staticProperty . "\n";  // Output: Static Property

// Accessing static property through a method
$instance = new MyClass();
$instance->printStaticProperty();    // Output: Static Property


/*
 * Description:
 * In this example, $staticProperty is a static property of the MyClass class.
 * It can be accessed directly using the class name or through an instance of the class.
 */


class MathUtility {
    public static function square($number) {
        return $number * $number;
    }
}

// Calling static method without creating an instance
$result = MathUtility::square(5);
echo "Square of 5 is: " . $result . "\n";  // Output: Square of 5 is: 25

/*
 * Description:
 * In this example, square() is a static method of the MathUtility class.
 *  It can be called without creating an instance of the class. Static properties and
 * methods are useful when you have functionality that does not depend on specific
 * instance data and can be shared across all instances of a class. However,
 * be mindful of the global state and potential conflicts when using static
 *  properties extensively, as they are shared among all instances and can lead to
 *  unexpected behavior if not used carefully.
 */