<?php



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
