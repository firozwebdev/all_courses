<?php
//Say, This is User List In Database 
$users = [
    ['username' => 'JohnDoe', 'password' => 'securepassword123', 'role' => 'admin'],
    ['username' => 'JaneSmith', 'password' => 'mypassword456', 'role' => 'editor'],
    ['username' => 'BobJones', 'password' => 'password789', 'role' => 'viewer']
];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();

    $StringData = file_get_contents("php://input");
    $PHPAsocArray = json_decode($StringData, true);


    $inputUsername = $PHPAsocArray['username'];
    $inputPassword = $PHPAsocArray['password'];

    foreach ($users as $user) {
        if ($user['username'] === $inputUsername && $user['password'] === $inputPassword) {

            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            echo "Logged in successfully!";
            exit;
        }
    }

    echo "Invalid username or password.";
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    session_start();
    echo $_SESSION['role'];
}