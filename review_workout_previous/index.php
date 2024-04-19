<?php
require('../model/database.php');
require('../model/user_workouts_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL){
        $action = 'display_exercises';
    }
}

if ($action == 'display_exercises') {
    
    include('display_exercises.php');
}
