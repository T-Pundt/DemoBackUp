<?php
require('../model/database.php');
require('../model/workout_template_db.php');
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

else if($action == 'procede_to_templates'){
     $workoutName = filter_input(INPUT_POST, 'workoutName');
     session_start();
     $_SESSION['workoutName'] = $workoutName;
     include('template_selection_page.php');
}

else if ($action == 'view_leg_template'){
    $templates = get_template('leg_template');
    include('view_template.php');
}

else if ($action == 'view_arms_template'){
    $templates = get_template('arms_template');
    include('view_template.php');
}

else if ($action == 'view_chest_template'){
    $templates = get_template('chest_template');
    include('view_template.php');
}

else if ($action == 'view_back_template'){
    $templates = get_template('back_template');
    include('view_template.php');
}

else if ($action == 'review_workout'){
    header("Location: ../review_workout_current");
}

else if ($action == 'add_exercise') {
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
    
    include('template_selection_page.php');
}

?>