<?php
/*
The Observer Pattern is a behavioral design pattern where an object,
known as the subject, maintains a list of dependents, called observers,
that are notified of state changes, typically by calling one of their methods.
This pattern is widely used to implement distributed event handling systems.

Here's how you can implement the Observer Pattern in PHP:
*/
// Step 1: Subject Interface

//Define the `Subject` interface. This interface will contain methods to attach,
// detach, and notify observers.

interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}


// Step 2: Observer Interface

//Define the `Observer` interface. This interface will contain the `update`
// method, which is called when the subject's state changes.


interface Observer {
    public function update();
}


// Step 3: Concrete Subject

//Implement the `Subject` interface in a concrete subject class.
// This class will maintain a list of observers and notify them when its state changes.


class ConcreteSubject implements Subject {
    private $observers = [];

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    // Additional methods to change the subject's state
}


// Step 4: Concrete Observer

//Implement the `Observer` interface in a concrete observer class.
// This class will define the behavior to be executed when the subject's state changes.


class ConcreteObserver implements Observer {
    public function update() {
        echo "Subject's state has changed. Reacting to the change.\n";
        // Additional logic to handle the state change
    }
}

// Step 5: Usage Example

//Demonstrate the Observer Pattern in action.


// Usage example:

// Create a subject
$subject = new ConcreteSubject();

// Create observers
$observer1 = new ConcreteObserver();
$observer2 = new ConcreteObserver();

// Attach observers to the subject
$subject->attach($observer1);
$subject->attach($observer2);

// Change the subject's state
$subject->notify();

/*
In this example, when the `notify` method is called on the subject,
both attached observers (`$observer1` and `$observer2`) will react to the
 state change by executing their `update` methods.
*/