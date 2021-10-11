<?php

    try{
        $host = "lochnagar.abertay.ac.uk";
        $dbname = "sql1605460";
        $un = "sql1605460";
        $pw = "Laa26L6uWJrz";
        
        $conn = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8",$un, $pw);
    } 
    catch (PDOException $ex) {
        die("An error occured");
    }
    
    
