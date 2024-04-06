<?php 

function get_user($email){
    global $db;

    $query = 'SELECT * FROM users WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $statement->closeCursor();
}