<?php
require('../model/database.php');
require('../model/user_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL){
        $action = 'view_home_page';
    }
}

if ($action == 'view_home_page'){
    include('Home_Page.php');
}

else if($action == 'view_profile'){
    include('Profile_Page.php');
}

else if($action == 'update_user'){
    session_start();
    $userName = $_SESSION['userName'];

    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    update_user($userName, $password, $email);
    header("Location: ./Profile_Update_Successful.php ");
}

else if($action == 'delete_user'){
    session_start();
    $userName = $_SESSION['userName'];

    delete_user($userName);
    setcookie(session_name(), '', time() - 3600, '/');
    session_destroy();
    header("Location: ../main_index.php");

}

else if($action == 'logout_user'){
    setcookie(session_name(), '', time() - 3600, '/');
    session_destroy();
    header("Location: ../main_index.php");
}
