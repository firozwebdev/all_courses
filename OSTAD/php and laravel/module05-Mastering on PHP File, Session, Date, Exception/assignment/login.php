<?php
session_start();
$usersFile = 'users.json';
$users = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];
function saveUsers($users, $file)
{
    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
}

function goPage($username,$role)
{
    echo $role;
    switch ($role) {

        case "Admin":
            $_SESSION['message'] = "Welcome Mr. " . $username;
            header("Location: dashboard.php");
            exit();
            break;
        case "Editor":
            $_SESSION['message'] = "Welcome Mr. " . $username;
            header("Location: editor.php");
            exit();
            break;
        case "User" :
            $_SESSION['message'] = "Welcome Mr. " . $username;
            header("Location: user.php");
            exit();
            break;
        default:
            header("Location: user.php");
            exit();

    }
}

if (isset($_POST["signup"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $role = '';
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if (empty($username || empty($email) || empty($password))) {
            $_SESSION['message'] = "Please fill all fields properly !";
        } else {
            if (isset($users[$email])) {
                $_SESSION['message'] = "Email already exists !";
            } else {
                if ($password === $confirm_password) {
                    $users[$email] = [
                        'username' => $username,
                        'email' => $email,
                        'role' => '',
                        'password' => password_hash($password, PASSWORD_DEFAULT),
                    ];
                    saveUsers($users, $usersFile);
                    $_SESSION['user'] = $users[$email];
                    $_SESSION['message'] = "User saved successfully !";
                    $_SESSION['isLoggedIn'] = true;
                    $username = $users[$email]['username'];
                    $role = $users[$email]['role'];
                    goPage($username, $role);

                } else {
                    $_SESSION['message'] = "Password not match !";
                }
            }

        }

    }
}


if (isset($_POST["login"])) {
    echo "hello";
    die();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST["email"];
        $password = $_POST["password"];
//        echo '<pre>';
//        print_r($users[$email]);
//        die();

        if (isset($users[$email]['email'])) {

            if ($users[$email]['email'] === $email && password_verify($password, $users[$email]['password'])) {

                $_SESSION["user"] = $users[$email];
                $_SESSION['isLoggedIn'] = true;
                //$_SESSION['message'] = "Login successfully !";
                $username = $users[$email]['username'];
                $role = $users[$email]['role'];
                goPage($username, $role);

            } else {
                $_SESSION['message'] = "Credential not match !";
            }

        } else {
            $_SESSION['message'] = "Email not found !";
        }

    }
}

?>


<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login and Registration Form in HTML | CodingNepal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
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
            <input type="radio" name="slide" id="signup">
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
<!--                <div class="pass-link">-->
<!--                    <a href="#">Forgot password?</a>-->
<!--                </div>-->
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input name="login" type="submit" value="Login">
                </div>
<!--                <div class="signup-link">-->
<!--                    Not a member? <a href="">Signup now</a>-->
<!--                </div>-->
            </form>
            <form action="login.php" class="signup" method="POST">
                <div class="field">
                    <input name="username" type="text" placeholder="Username" required>
                </div>
                <div class="field">
                    <input name="email" type="text" placeholder="Email Address" required>
                </div>

                <div class="field">
                    <input name="password" type="password" placeholder="Password" required>
                </div>
                <div class="field">
                    <input name="confirm_password" type="password" placeholder="Confirm password" required>
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="signup" value="Signup">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
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

<?php

if (isset($_SESSION['message'])) {
    echo "<script type=\"text/javascript\">toastr.success(\"{$_SESSION['message']}\")</script>";
    //echo '<script type="text/javascript">toastr.success("{$_SESSION[\'message\']}")</script>';
    unset($_SESSION['message']);
}


?>


</body>
</html>