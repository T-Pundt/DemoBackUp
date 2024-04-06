<?php 

function get_template($table_name){
    global $db;

    $query = "SELECT * FROM $table_name";
    $statement = $db->prepare($query);
    $statement->execute();
    $templates = $statement->fetchAll();
    $statement->closeCursor();

    return $templates;
}