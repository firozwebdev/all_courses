<?php
/*
 * In PHP, the final keyword is used to prevent a class or method from being
 * extended or overridden by other classes. When a class is declared as final,
 * it means that this class cannot be subclassed or extended by any other class.
 *  Similarly, when a method is declared as final, it cannot be overridden by
 * any subclass.

Here's how the final keyword works in PHP:
 */

final class FinalClass {
    // Class implementation
}
/*
 * In this example, FinalClass is declared as final, meaning it cannot
 * be extended by any other class.
 */
class ParentClass {
    final public function finalMethod() {
        // Method implementation
    }
}

class ChildClass extends ParentClass {
    // This will cause a fatal error because finalMethod() cannot be overridden.
    public function finalMethod() {
        // Method implementation in the subclass
    }
}

/*
 * In this example, finalMethod() in the ParentClass is declared as final,
 * so it cannot be overridden by the ChildClass. Attempting to override
 *  a final method in a subclass will result in a fatal error.

The final keyword provides a way to enforce that certain classes or
methods should not be modified or extended, ensuring the integrity of the
codebase, especially in cases where specific implementations should not be
altered by subclasses.
 */
