<?php

session_start();
if (isset($_POST["signup"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = [];
        $data['email'] = $_POST["email"];
        $data['role']  = $_POST['role'];
        if($_POST['password'] == $_POST['check_password']){
            $data['password']  = $_POST["password"];
        }else{
            echo "Invalid email or password.";
        }

        print_r($data);

        // Read user data from the file (users.json)
//        $users = file("users.json", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
//
//        foreach ($users as $user) {
//            $userData = json_decode($user, true);
//            if ($userData["email"] === $email && password_verify($password, $userData["password"])) {
//                $_SESSION["user"] = $userData;
//                header("Location: dashboard.php");
//                exit();
//            }
//        }
//        echo "Invalid email or password.";
    }
}

if (isset($_POST["login"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = [];
        $data['email'] = $_POST["email"];
        $data['password'] = $_POST["password"];

        print_r($data);
    }
}

?>


<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login and Registration Form in HTML | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="wrapper">
    <div class="title-text">
        <div class="title login">
            Login
        </div>
        <div class="title signup">
            Registration
        </div>
    </div>
    <div class="form-container">
        <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup" >
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
            <form action="#" class="login" method="POST">
                <div class="field">
                    <input name="email" type="text" placeholder="Email Address" required>
                </div>
                <div class="field">
                    <input name="password" type="password" placeholder="Password" required>
                </div>
                <div class="pass-link">
                    <a href="#">Forgot password?</a>
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input name="login" type="submit" value="Login">
                </div>
                <div class="signup-link">
                    Not a member? <a href="">Signup now</a>
                </div>
            </form>
            <form action="#" class="signup" method="POST">
                <div class="field">
                    <input name="email" type="text" placeholder="Email Address" required>
                </div>
                <div class="field">
                    <select name="role" id="">
                        <option>Choose a role...</option>
                        <option>Admin</option>
                        <option>Editor</option>
                        <option>User</option>
                    </select>
                </div>
                <div class="field">
                    <input name="password" type="password" placeholder="Password" required>
                </div>
                <div class="field">
                    <input name="check_password" type="password" placeholder="Confirm password" required>
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="signup" value="Signup">
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (() => {
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (() => {
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (() => {
        signupBtn.click();
        return false;
    });
</script>
</body>
</html>