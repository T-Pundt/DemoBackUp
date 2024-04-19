<?php
require('../model/database.php');
require('../model/user_workouts_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL){
        $action = 'review_exercises';
    }
}

if ($action == 'review_exercises') {
    session_start();
    $userName = $_SESSION['userName'];
    $workoutName = $_SESSION['workoutName'];

    $workoutExercies = get_workout_exercices($userName, $workoutName);

    if(empty($workoutExercies)){
        $error = "No exercises found for the workout. Please try adding a workout.";
        include('../errors/error.php');
    }
    else{
        include('review_new_workout.php');
    }
}

if ($action == 'update_exercise'){
    session_start();
    $userName = $_SESSION['userName'];
    $workoutName = $_SESSION['workoutName'];
    $exerciseName = filter_input(INPUT_POST, 'exerciseName');
    $reps = filter_input(INPUT_POST, 'reps');
    $sets = filter_input(INPUT_POST, 'sets');
    $weight = filter_input(INPUT_POST, 'weight');


    if (isset($_POST['update_exercise_value'])){
        update_workout_exercise($userName, $workoutName, $exerciseName, $reps, $sets, $weight);
        include('updated.php');
    }
    else{
        delete_exercise_from_workout($userName, $workoutName, $exerciseName);
        include('deleted.php');
    }

}

if ($action == 'start_workout'){
    header("Location: ../workout_In_Progress");
}