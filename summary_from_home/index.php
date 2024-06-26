<?php
require('../model/database.php');
require('../model/user_workouts_db.php');

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
        include('../workout_Summary/view_workout_summary.php');
    }
}


if ($action == 'list_all_workouts'){
    session_start();
    $userName = $_SESSION['userName'];

    $workout_names = get_user_workouts($userName);
    $workout_names = array_unique($workout_names, SORT_REGULAR);

    if(empty($workout_names)){
        $error = "No workouts found: Please create a workout first";
        include('../errors/error.php');
    }
    include('list_all_workouts.php');
}
