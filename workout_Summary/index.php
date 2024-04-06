<?php
require('../model/database.php');
require('../model/user_workouts_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL){
        $action = 'view_workout_summary';
    }
}

if ($action == 'view_workout_summary') {
    session_start();
    $userName = $_SESSION['userName'];
    $workoutName = $_SESSION['workoutName'];
    $_SESSION['workoutName'] = '';
    $workoutExercies = get_workout_exercices($userName, $workoutName);
    include('view_workout_summary.php');
}