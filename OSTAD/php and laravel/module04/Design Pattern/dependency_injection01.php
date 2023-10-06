<?php
/*
Dependency injection is a design pattern where a class receives its dependencies
from an external source rather than creating them itself. This helps in making the
code more modular, flexible, and testable. In PHP, dependency injection can be
implemented in several ways, such as constructor injection, setter injection, or
method injection. Here's an example of dependency injection using constructor injection
in PHP:

Let's consider two classes: `Database` and `UserRepository`. `UserRepository`
requires a database connection (`Database` object) to operate. Instead of creating
a new `Database` object inside `UserRepository`, we inject it from outside.
*/
class Database {
    private $connection;

    public function __construct($host, $username, $password, $dbname) {
        $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }

    public function getConnection() {
        return $this->connection;
    }
}

class UserRepository {
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getUsers() {
        $connection = $this->database->getConnection();
        // Perform database operations to get users
        // ...
        //return $users;
    }
}

// Example usage:

// Create a Database object (dependency)
$database = new Database("localhost", "username", "password", "mydatabase");

// Create a UserRepository object and inject the Database dependency
$userRepository = new UserRepository($database);

// Call the method to get users
$users = $userRepository->getUsers();

/*
In this example:

1. The `Database` class handles the database connection.
2. The `UserRepository` class depends on the `Database` class, which is injected
through its constructor.
3. When creating a `UserRepository` object, we pass the `Database`
object as a parameter, allowing the `UserRepository` to use the database connection
without creating it internally.

Dependency injection promotes decoupling between classes, making it easier to
replace dependencies, unit test classes in isolation, and improve the overall
maintainability of the code.
*/