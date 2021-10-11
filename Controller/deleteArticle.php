<?php 
    include '../Model/api.php';	
    //Sanitisaion
    $article_id = filter_input(INPUT_POST, 'article_id', FILTER_SANITIZE_STRING);
    //deleting Article function call
    deleteArticle($article_id);