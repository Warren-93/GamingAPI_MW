<?php 
    include '../Model/api.php';
    //sanitisaion 
    $user_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    
    //Function Call
    demote($user_id, $user_type);
    
    
	


