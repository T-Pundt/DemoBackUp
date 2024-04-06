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

function add_user($email, $userName, $password){

    global $db;
    $query = 'INSERT INTO users 
                    (email, userName, password)
              VALUES
                    (:email, :userName, :password)';

    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':userName', $userName);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

function update_user($userName, $password, $email){

    global $db;
    $query = 'UPDATE users SET email = :email, password = :password WHERE userName = :userName';

    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':userName', $userName);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

function delete_user($userName){
    global $db;
    $query = 'DELETE FROM users WHERE userName = :userName';
    $statement = $db->prepare($query);
    $statement->bindvalue(':userName', $userName);
    $statement->execute();
    $statement->closeCursor();
}