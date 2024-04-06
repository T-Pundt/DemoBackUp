<?php
require('../model/database.php');
require('../model/user_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL){
        $action = 'view_sign_up_page';
    }
}


if ($action == 'view_sign_up_page'){
    include('Sign_Up.php');
}

else if ($action == 'add_user'){
    $email = filter_input(INPUT_POST, 'email');
    $userName = filter_input(INPUT_POST, 'userName');
    $password = filter_input(INPUT_POST, 'password');

    $sameUserNameCheck = get_user($userName);
    
    if(empty($sameUserNameCheck)){
    add_user($email, $userName, $password);
    header("Location: ./Sign_Up_Successful.php");
    }

    else{
        $error = "That Username Already exists please try a different name";
        include('../Errors/error.php');
    }
}

?>