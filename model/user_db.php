<?php 

function get_user($userName){
    global $db;

    $query = 'SELECT * FROM users WHERE userName = :userName';
    $statement = $db->prepare($query);
    $statement->bindValue(':userName', $userName);
    $statement->execute();
    $user = $statement->fetchAll();
    $statement->closeCursor();

    return $user;
}