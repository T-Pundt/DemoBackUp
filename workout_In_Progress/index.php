<?php
require('../model/database.php');
require('../model/user_workouts_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL){
        $action = 'view_workout_progress';
    }
}

if ($action == 'view_workout_progress') {
    include('view_workout_progress.php');
}