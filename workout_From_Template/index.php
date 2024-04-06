<?php
require('../model/database.php');
require('../model/workout_template_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL){
        $action = 'view_template_selection_page';
    }
}

if ($action == 'view_template_selection_page') {
    include('choose_workout_name.php');
}


else if ($action == 'view_leg_template'){
    include('choose_workout_name.php');
    $templates = get_template('leg_template');
    include('view_template.php');
}

else if ($action == 'view_arms_template'){
    include('choose_workout_name.php');
    include('view_template.php');
}

else if ($action == 'view_chest_template'){
    include('choose_workout_name.php');
    include('view_template.php');
}

else if ($action == 'view_back_template'){
    include('choose_workout_name.php');
    include('view_template.php');
}

else if ($action =='add_exercise'){

}
?>