<?php
include '../Model/api.php';
//Sanitisation of article upload form data
$user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING);
$headline = filter_input(INPUT_POST, 'Title', FILTER_SANITIZE_STRING);
$article = filter_input(INPUT_POST, 'article', FILTER_SANITIZE_STRING);
$author = filter_input(INPUT_POST, 'writer', FILTER_SANITIZE_STRING);

//Image file name
$image = $_FILES['file']['name'];

//Pathway of image to be stored in database 
$imageName = 'img/'.$image;
//Moving file to database and server function Call
moveFile($user_id, $headline, $article, $imageName, $author);

