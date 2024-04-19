<?php
require('../model/database.php');
require('../model/user_workouts_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL){
        $action = 'choose_workout_name';
    }
}


if ($action == 'choose_workout_name') {
    include('choose_workout_name.php');
}

if ($action == 'procede_to_selection'){
    $workoutName = filter_input(INPUT_POST, 'workoutName');
    session_start();
    $userName = $_SESSION['userName'];
    $_SESSION['workoutName'] = $workoutName;

    $workout_names = get_user_workouts($userName);
    $workout_names = array_unique($workout_names, SORT_REGULAR);

    if(empty($workout_names)){
        $error = "No workouts found: Please create a workout first";
        include('../errors/error.php');
    }
    else{
    include('workout_selection.php');
    }
}

if ($action == 'review_workout'){
    $previous_workoutName = filter_input(INPUT_POST, 'workoutName');
    session_start();
    $_SESSION['previous_workoutName'] = $previous_workoutName;

    header("Location: ../review_workout_previous");
}