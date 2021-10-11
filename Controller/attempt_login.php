
<?php
session_start();
    include '../Model/api.php';
    
     //Sanitisation and Calling of Authorisation login function
    $un = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    
    $pwd = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    
    
    auth($un, $pwd);
    //Checking for status of login and redirecting 
    if(isset($_SESSION['loggedin']))
        {
            header("location:https://mayar.abertay.ac.uk/~1605460/Web_Dev/GamingAPI_MW/View/index.php");
        }
    else
        {
            echo "<br><a href= 'https://mayar.abertay.ac.uk/~1605460/Web_Dev/GamingAPI_MW/View/index.php'>return to home page </a>";            
        }
        

    
    

    
