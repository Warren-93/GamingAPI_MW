<?php

include '../Model/api.php';
//Registration form sanitisation
$first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);

$last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);

$mobile_no = filter_input(INPUT_POST, 'mobile_no', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

$un = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

$pwd = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

//Password Hashing function
$pwdhash = password_hash($pwd, PASSWORD_DEFAULT);  
//SQL Query for inserting new user registration details 
    $query = "INSERT INTO tb_users (first_name, last_name, mobile_no, email, username, password)
            VALUES ( :first_name, :last_name, :mobile_no, :email, :username, :password )";

        //  Prepare the statement
        $stmt = $conn->prepare($query);

        //  Bind values and execute
        $success = $stmt->execute([
            'first_name' =>  $first_name,
            'last_name'  =>  $last_name,
            'mobile_no' => $mobile_no,
            'email' => $email,
            'username' =>  $un,
            'password' => $pwdhash
        ]);
    //Check for successful execution     
    $count = $stmt->rowCount();
    if($success)
       {
            echo "Registration successful";
        }
   else
        {    
            echo $stmt->errorInfo()[2];
        }           



