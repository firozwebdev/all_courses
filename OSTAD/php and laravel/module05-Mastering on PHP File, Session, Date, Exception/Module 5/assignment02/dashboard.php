<?php
session_start();
if(!isset($_SESSION['isLoggedIn'])){
    header("Location: login.php");
    exit();
}

/*
 * Array
(
    [user] => Array
        (
            [email] => admin@gmail.com
            [role] => Admin
            [password] => 123456
        )

    [message] => User saved successfully
    [isLoggedIn] => 1
)
 */


