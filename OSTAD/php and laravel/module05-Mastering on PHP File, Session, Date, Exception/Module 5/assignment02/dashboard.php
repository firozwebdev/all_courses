<?php
session_start();
if(!isset($_SESSION['isLoggedIn'])){
    header("Location: login.php");
    exit();
}


        $users = file("users.json", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $usersData = [];
        foreach ($users as $user) {
            $usersData[] = json_decode($user, true);

//            if ($userData["email"] === $email && password_verify($password, $userData["password"])) {
//                $_SESSION["user"] = $userData;
//                header("Location: dashboard.php");
//                exit();
//            }
        }
//        echo '<pre>';
//        print_r($usersData);



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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <style>
        .wrapper{
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
            <table id="usersTable" class="display">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>test@gmail.com</td>
                    <td>Editor</td>
                    <td><a href="#" class="signup-link">Edit</a> | <a href="#" class="signup-link">Delete</a> </td>
                </tr>
                <tr>
                    <td>test@gmail.com</td>
                    <td>User</td>
                    <td><a href="#" class="signup-link">Edit</a> | <a href="#" class="signup-link">Delete</a> </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


    <?php

    if(isset($_SESSION['message'])){
        echo "<script type=\"text/javascript\">toastr.success(\"{$_SESSION['message']}\")</script>";
        //echo '<script type="text/javascript">toastr.success("{$_SESSION[\'message\']}")</script>';
        unset($_SESSION['message']);
    }


    ?>

<script>
    $(document).ready(function () {
        $('#usersTable').DataTable({

            data: <?php echo json_encode($usersData); ?>,
            buttons: [
                {extend: 'edit', editor},
                {extend: 'remove', editor}
            ],
            columns: [
                {
                    data: null,
                    defaultContent: '',
                    className: 'select-checkbox',
                    orderable: false
                },
                {data: 'email'},
                {data: 'role'},

            ]
        });
    });


</script
</body>
</html>


