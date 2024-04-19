<?php 

function add_user_exercise($userName, $workoutName, $exerciseName, $reps, $sets, $weight){
    global $db;
    $query = 'INSERT INTO user_workouts 
                    (userName, workoutName, exerciseName, reps, sets, weight)
              VALUES
                    (:userName, :workoutName, :exerciseName, :reps, :sets, :weight)';

    $statement = $db->prepare($query);
    $statement->bindValue(':userName', $userName);
    $statement->bindValue(':workoutName', $workoutName);
    $statement->bindValue(':exerciseName', $exerciseName);
    $statement->bindValue(':reps', $reps);
    $statement->bindValue(':sets', $sets);
    $statement->bindValue(':weight', $weight);
     
    $statement->execute();
    $statement->closeCursor();
}

function get_workout_exercices($userName, $workoutName){
    global $db;

    $query = 'SELECT * FROM user_workouts WHERE userName = :userName AND workoutName = :workoutName';
    $statement = $db->prepare($query);
    $statement->bindValue(':userName', $userName);
    $statement->bindValue(':workoutName', $workoutName);
    $statement->execute();
    $workoutExercises = $statement->fetchAll();
    $statement->closeCursor();
    return $workoutExercises;
}

function delete_user_workouts($userName){
    global $db;
    $query = 'DELETE FROM user_workouts WHERE userName = :userName';
    $statement = $db->prepare($query);
    $statement->bindvalue(':userName', $userName);
    $statement->execute();
    $statement->closeCursor();
}

function get_user_workouts($userName){
    global $db;

    $query = 'SELECT workoutName FROM user_workouts WHERE userName = :userName';
    $statement = $db->prepare($query);
    $statement->bindvalue(':userName', $userName);
    $statement->execute();
    $user_workouts = $statement->fetchAll();
    $statement->closeCursor();
    return $user_workouts;
}

function delete_exercise_from_workout($userName, $workoutName, $exerciseName){
    global $db;
    $query = 'DELETE FROM user_workouts WHERE userName = :userName AND workoutName = :workoutName AND exerciseName = :exerciseName';
    $statement = $db->prepare($query);
    $statement->bindvalue(':userName', $userName);
    $statement->bindvalue(':workoutName', $workoutName);
    $statement->bindvalue(':exerciseName', $exerciseName);
    $statement->execute();
    $statement->closeCursor();
}

function update_workout_exercise($userName, $workoutName, $exerciseName, $reps, $sets, $weight){
    global $db;
    $query = 'UPDATE user_workouts SET reps = :reps, sets = :sets, weight = :weight WHERE userName = :userName AND workoutName = :workoutName AND exerciseName = :exerciseName';
    $statement = $db->prepare($query);
    $statement->bindvalue(':userName', $userName);
    $statement->bindvalue(':workoutName', $workoutName);
    $statement->bindvalue(':exerciseName', $exerciseName);
    $statement->bindvalue(':reps', $reps);
    $statement->bindvalue(':sets', $sets);
    $statement->bindvalue(':weight', $weight);
    $statement->execute();
    $statement->closeCursor();
}