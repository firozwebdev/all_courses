<?php
/*
The Repository Pattern is a design pattern used to separate the logic that
retrieves data from a database (or any other data source) from the business
 logic of the application. It provides a way to centralize data access logic in one place,
 making the codebase more maintainable and testable. Here's how you can implement
the Repository Pattern in PHP:
*/

### Step 1: Define the Repository Interface

//First, create an interface that defines the methods for data retrieval.
// This interface will be implemented by concrete repository classes.


interface UserRepository {
    public function getById($id);
    public function getAll();
    public function save(User $user);
    public function delete($id);
}

### Step 2: Create a Concrete Repository

//Implement the `UserRepository` interface in a concrete class.
// This class will handle the database operations related to the `User` entity.


class DbUserRepository implements UserRepository {
    private $dbConnection;

    public function __construct(PDO $dbConnection) {
        $this->dbConnection = $dbConnection;
    }

    public function getById($id) {
        // Logic to fetch user by ID from the database
    }

    public function getAll() {
        // Logic to fetch all users from the database
    }

    public function save(User $user) {
        // Logic to save user data into the database
    }

    public function delete($id) {
        // Logic to delete user by ID from the database
    }
}

### Step 3: Create a User Entity Class

//Create a `User` class to represent the data entity.


class User {
    private $id;
    private $name;
    // ... other properties and methods
}

### Step 4: Usage Example


// Example usage:

// Database connection
$dbConnection = new PDO('mysql:host=localhost;dbname=mydatabase', 'username', 'password');

// Create a repository instance
$userRepository = new DbUserRepository($dbConnection);

// Get user by ID
$user = $userRepository->getById(1);

// Get all users
$users = $userRepository->getAll();

// Create a new user
$newUser = new User();
$newUser->setName('John Doe');
$userRepository->save($newUser);

// Delete user by ID
$userRepository->delete(2);

/*
In this example, the `DbUserRepository` class implements the `UserRepository` interface,
providing concrete implementations for fetching users by ID, fetching all users,
saving users, and deleting users from the database.

By using the Repository Pattern, the database operations are encapsulated within
the `DbUserRepository` class, providing a clean separation between the database logic
and the rest of the application. This makes it easier to switch to a different
data source or perform unit testing on the business logic without touching
the database operations.
*/