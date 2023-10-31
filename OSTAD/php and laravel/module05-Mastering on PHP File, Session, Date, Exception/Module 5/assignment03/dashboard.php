<?php
session_start();
if (!isset($_SESSION['isLoggedIn'])) {
    header("Location: login.php");
    exit();
}
function saveUsers($users, $file)
{
    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
}

//$users = file("users.json", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$usersFile = 'users.json';
$users = json_decode(file_get_contents($usersFile),true);

if(isset($_POST['add_role'])){
    $newRole = $_POST['role'];
    if($newRole == 'Choose a role...'){
        $_SESSION['message'] = "Please add a role properly !";
    }else{
        $email = $_SESSION['user']['email'];
       if(!$users[$email]){
           $_SESSION['message'] = "Email not found !";
       }else{
           if(isset($users[$email])){
               $users[$email]['role'] = $newRole;
               saveUsers($users,$usersFile);
               $_SESSION['message'] = "Role assigned successfully !";
           }
       }


    }
}

if (isset($_GET['email'])) {
    $email = $_GET['email'];
    if (isset($users[$email])) {

        unset($users[$email]);
        saveUsers($users, $usersFile);
        header("Location: dashboard.php");
        exit();
    }

}



//echo '<pre>';
//
//die();

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

//echo '<pre>';
//print_r($_SESSION['user']);
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
                <?php if($_SESSION['user']['role'] == 'Admin'){
                    foreach ($users as $user) {?>
                        <tr>
                            <td><?php echo $user['username']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <?php $user['role'] = $user['role'] ?? ''; ?>
                            <td><?php echo $user['role']  ?></td>
                            <td><a href="assign_role.php?reference_email=<?php echo $user['email']; ?>">Assign Role</a> | <a href="dashboard.php?email=<?php echo $user['email']; ?>">Delete</a></td>

                        </tr>
                    <?php }
                }else{
                foreach ($users as $user) {?>
                <tr>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <?php $user['role'] = $user['role'] ?? ''; ?>
                    <td><?php echo $user['role']  ?></td>
                </tr>
                <?php }
                } ?>

            </table>


        </div>
        <div class="form-inner">


                <div class="field btn">
                    <div class="btn-layer"></div>
                    <a href="logout.php">Logout</a>
                </div>

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


