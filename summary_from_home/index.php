<?php
require('../model/database.php');
require('../model/user_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL){
        $action = 'workoutName_lookup';
    }
}

if ($action == 'workoutName_lookup'){
    include('workoutName_lookup.php');
}

if ($action == 'lookup_workout'){
    $workoutName = filter_input(INPUT_POST, 'workoutName');
    session_start();
    $userName = $_SESSION['userName'];

    $workoutExercies = get_workout_exercices($userName, $workoutName);

    if(empty($workoutExercies)){
        $error = "Workout not found: Please Try Again";
        include('../errors/error.php');
    }
    else{
        
    }
}