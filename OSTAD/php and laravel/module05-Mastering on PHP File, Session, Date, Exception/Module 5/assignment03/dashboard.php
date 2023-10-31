<?php
session_start();
if (!isset($_SESSION['isLoggedIn'])) {
    header("Location: login.php");
    exit();
}


//$users = file("users.json", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$users = 'users.json';
$users = json_decode(file_get_contents($users),true);


//$usersData = [];
//foreach ($users as $user) {
//    $usersData[] = json_decode($user, true);
//
////            if ($userData["email"] === $email && password_verify($password, $userData["password"])) {
////                $_SESSION["user"] = $userData;
////                header("Location: dashboard.php");
////                exit();
////            }
//}
////        echo '<pre>';
////        print_r($usersData);


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
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login and Registration Form in HTML | CodingNepal</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <style>
        .wrapper {
            max-width: none;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="wrapper">
    <div class="title-text">
        <div class="title login">
            Users List
        </div>

    </div>
    <div class="form-container">

        <div class="form-inner">
            <table border="1">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($users as $user) {?>
                    <tr>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <?php $user['role'] = $user['role'] ?? ''; ?>
                        <td><?php echo $user['role']  ?></td>
                        <td><a href="#">Edit</a> | <a href="">Delete</a></td>
                    </tr>
                <?php } ?>
            </table>


        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


<?php

if (isset($_SESSION['message'])) {
    echo "<script type=\"text/javascript\">toastr.success(\"{$_SESSION['message']}\")</script>";
    //echo '<script type="text/javascript">toastr.success("{$_SESSION[\'message\']}")</script>';
    unset($_SESSION['message']);
}


?>

<script>


</script
</body>
</html>


