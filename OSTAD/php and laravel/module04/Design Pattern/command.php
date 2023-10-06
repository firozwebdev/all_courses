<?php
/*
The Command Pattern is a behavioral design pattern that turns a request
 into a stand-alone object. This object contains all the information about
the request, allowing for easier parameterization of methods, queueing of requests,
and operation logging. Here's how you can implement the Command Pattern in PHP:
*/
### Step 1: Command Interface

//First, define the command interface that concrete commands will implement. The interface typically includes an `execute()` method.


interface Command {
    public function execute();
}

### Step 2: Concrete Command Classes

//Create concrete command classes that implement the `Command` interface. Each class represents a specific action that can be executed.


class LightOnCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->turnOn();
    }
}

class LightOffCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->turnOff();
    }
}

### Step 3: Receiver

//Create a receiver class that contains the actual implementation of the action.

class Light {
    public function turnOn() {
        echo "Light is ON\n";
    }

    public function turnOff() {
        echo "Light is OFF\n";
    }
}

### Step 4: Invoker

//Create an invoker class that will execute the commands.


class RemoteControl {
    private $command;

    public function setCommand(Command $command) {
        $this->command = $command;
    }

    public function pressButton() {
        $this->command->execute();
    }
}

### Step 5: Usage Example


// Usage example:

// Create instances
$light = new Light();
$lightOnCommand = new LightOnCommand($light);
$lightOffCommand = new LightOffCommand($light);

// Create remote control
$remoteControl = new RemoteControl();

// Turn on the light
$remoteControl->setCommand($lightOnCommand);
$remoteControl->pressButton();  // Output: Light is ON

// Turn off the light
$remoteControl->setCommand($lightOffCommand);
$remoteControl->pressButton();  // Output: Light is OFF

/*
In this example, the `LightOnCommand` and `LightOffCommand` classes encapsulate
the actions of turning the light on and off, respectively. The `Light` class is
the receiver, which knows how to perform the actions. The `RemoteControl` class
is the invoker, which triggers the execution of commands.

The Command Pattern allows you to decouple the sender and receiver of a request.
The invoker does not need to know the specifics of the receiver's implementation,
promoting loose coupling and easier extensibility.
*/