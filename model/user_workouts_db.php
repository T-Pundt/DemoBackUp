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