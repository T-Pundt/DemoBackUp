<?php


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

if ($action == 'sign_in'){

}

?>