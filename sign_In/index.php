<?php
require('../model/database.php');
require('../model/user_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL){
        $action = 'view_sign_in_page';
    }
}


if ($action == 'view_sign_in_page'){
    include('Sign_In.php');
}

else if ($action == 'sign_in'){
    $userName = filter_input(INPUT_POST, 'userName');
    $password = filter_input(INPUT_POST, 'password');


    $users = get_user($userName);

     if(empty($users)){
         $error = "User not found. Please try again";
         include('../Errors/error.php');
     }

     foreach($users as $user){
        if($password != $user['password']){
            $error = "The incorrect password was entered. Please try again";
            include('../Errors/error.php');
        }
        else{
            session_start();
            $_SESSION['userName'] = $userName;
            header("Location: ../home_Page");
        }
     }
}

?>