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
    session_start();
    $userName = $_SESSION['userName'];
    $previous_workoutName = $_SESSION['previous_workoutName'];

    $workoutExercies = get_workout_exercices($userName, $previous_workoutName);
    include('display_exercises.php');
}

if ($action == 'add_exercise'){
    session_start();
    $userName = $_SESSION['userName'];
    $workoutName = $_SESSION['workoutName'];
    $exerciseName = filter_input(INPUT_POST, 'exerciseName');
    $reps = filter_input(INPUT_POST, 'reps');
    $sets = filter_input(INPUT_POST, 'sets');
    $weight = filter_input(INPUT_POST, 'weight');
    

    if(empty($workoutName)){
        $error = "Workout Name field is empty: Please try again";
    }

    // Add the exercise to the database
    add_user_exercise($userName, $workoutName, $exerciseName, $reps, $sets, $weight);
    
    header("Location: ./index.php");
}
