<?php

    include '../Model/api.php';
    //Comment field sanitisation 
    $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
    //Comment passing of article _id and user_id sanitisaion 
    $article_id = filter_input(INPUT_POST, 'article_id', FILTER_SANITIZE_STRING);  

    $user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING);
    
    //Posting comment Function call with parameter passing
    postComment($comment, $article_id, $user_id);
    
    //redirect to index
    header("location:https://mayar.abertay.ac.uk/~1605460/Web_Dev/GamingAPI/View/index.php");
    
    