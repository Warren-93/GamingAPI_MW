<?php 
include '../Model/api.php';
	
    $user_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    
    promote($user_id);