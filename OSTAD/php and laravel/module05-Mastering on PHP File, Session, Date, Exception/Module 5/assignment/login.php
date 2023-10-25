<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Read user data from the file (users.json)
    $users = file("users.json", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($users as $user) {
        $userData = json_decode($user, true);
        if ($userData["email"] === $email && password_verify($password, $userData["password"])) {
            $_SESSION["user"] = $userData;
            header("Location: dashboard.php");
            exit();
        }
    }
    echo "Invalid email or password.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
<h2>Login Form</h2>
<form method="post" action="">
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>
</body>
</html>
