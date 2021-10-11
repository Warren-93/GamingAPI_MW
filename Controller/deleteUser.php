<?php 
    include '../Model/api.php';
    //Sanitisation
    $user_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    //Function call for deleting user
    deleteUser($user_id);