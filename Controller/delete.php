<?php 
	include '../Model/api.php';	
    //user id sanitisation    
    $user_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    //Deleting user function call
    deleteUser($user_id);