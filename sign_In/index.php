<?php
require('../model/database.php');
require('../model')

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
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');


}

?>