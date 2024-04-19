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

if ($action == 'proceed_to_add'){
     $workoutName = filter_input(INPUT_POST, 'workoutName');
     session_start();
     $_SESSION['workoutName'] = $workoutName;
     include('add_exercise_page.php');
}

if ($action == 'add_exercise'){
    session_start();
    $workoutName = $_SESSION['workoutName'];
    $userName = $_SESSION['userName'];
    $exerciseName = filter_input(INPUT_POST, 'exerciseName');
    $reps = filter_input(INPUT_POST, 'reps');
    $sets = filter_input(INPUT_POST, 'sets');
    $weight = filter_input(INPUT_POST, 'weight');

    if(empty($workoutName)){
        $error = "Workout Name field is empty: Please try again";
    }

    // Add the exercise to the database
    add_user_exercise($userName, $workoutName, $exerciseName, $reps, $sets, $weight);

    include('add_exercise_page.php');
}

if ($action == 'review_workout'){
    header("Location: ../review_workout_current");
}