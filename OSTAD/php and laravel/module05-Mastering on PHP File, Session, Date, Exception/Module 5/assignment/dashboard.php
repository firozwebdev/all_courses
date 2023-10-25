<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION["user"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome, <?php echo $user["username"]; ?></title>
</head>
<body>
<h2>Welcome, <?php echo $user["username"]; ?>!</h2>
<p>Email: <?php echo $user["email"]; ?></p>
<p>Role: <?php echo $user["role"]; ?></p>
<a href="logout.php">Logout</a>
</body>
</html>
