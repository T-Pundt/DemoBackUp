<?php

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL){
        $action = 'view_template_selection_page';
    }
}

if ($action == 'view_template_selection_page') {
    include('template_selection_page.php');
}

?>