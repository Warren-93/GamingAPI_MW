<?php
/* 
    Created on : 15-Sep-2018
    Author     : Mark Warren
*/
include ("dbConnection/dbConn.php");

// Functions for API 



//Functiopn with added filter on Getting artiocles from the database and storing in JSON
    function getAllArticles($filter)
    {
        global $conn;

        $articles =  ("SELECT article_id, headline, SUBSTRING(description, 1 , 150) AS summary, image, SUBSTRING(date, 1, 10) AS DATE, author FROM tb_articles $filter ORDER BY date desc");
        $sth = $conn->prepare($articles);
        $sth->execute();
        //JSON
        $rows = array();
        while ($r = $sth->fetch(PDO::FETCH_ASSOC)){
            $rows[] = $r;            
    }
        
    return json_encode($rows);    
    }
    
    //Function to get Articles by selected ID
    function getArticle($article_id)
    {
        global $conn;

        $article = ("SELECT * FROM tb_articles WHERE article_id = '$article_id'");
        //Prepares the statement
        $sth = $conn->prepare($article);
        //Executes the select satatement
        $sth->execute();
        //JSON
        //Makes an Array for all the data selected from the SQL
        $rows = array();
        while ($r = $sth->fetch(PDO::FETCH_ASSOC)){
            $rows[] = $r;            
        }
        //Returns the code in an array JSON
    return json_encode($rows);    
    }

    function demote($user_id)
    {
        global $conn;
        //SQL Statement setup prepare and execute
        $promote = "UPDATE tb_users SET user_type = 'user' WHERE user_id = $user_id";
        $sth = $conn->prepare($promote);
        $success = $sth->execute();

        $count = $sth->rowCount();
        if($success)
        {
            header("location:https://mayar.abertay.ac.uk/~1605460/Web_Dev/GamingAPI_MW/View/accounts.php");
        }
        else
        {    
            echo $sth->errorInfo()[2];
        }             
           
    }     
	
    function promote($user_id)
    {
        global $conn;
        //SQL Statement setup prepare and execute
        $promote = "UPDATE tb_users SET user_type = 'admin' WHERE user_id = $user_id";
        $sth = $conn->prepare($promote);
        $success = $sth->execute();
        
        $count = $sth->rowCount();
        if($success)
        {
            header("location:https://mayar.abertay.ac.uk/~1605460/Web_Dev/GamingAPI_MW/View/accounts.php");
        }
        else
        {    
            echo $sth->errorInfo()[2];
        }           
           
    }
  
    function deleteUser($user_id)
    {
      
        global $conn;
        //SQL Statement setup prepare and execute
        $delete = "DELETE from tb_users WHERE user_id = $user_id";
        $sth = $conn->prepare($delete);
        $success = $sth->execute();
        
        $count = $sth->rowCount();
        if($success)
        {
            header("location:../View/accounts.php");
        }
        else
        {    
            echo $sth->errorInfo()[2];
        }           
       
    }
    
    function deleteArticle($article_id)
    {
      
        global $conn;
        //SQL Statement setup prepare and execute
        $delete = "DELETE from tb_articles WHERE article_id = $article_id";
        $sth = $conn->prepare($delete);
        $success = $sth->execute();
        
        if($success)
        {              
            header("location:https://mayar.abertay.ac.uk/~1605460/Web_Dev/GamingAPI/View/index.php");
        }
        else
        {    
            echo $sth->errorInfo()[2];
        }           
       
    }

     function getAllUsers()
    {
        global $conn;
        //SQL Statement setup prepare and execute
        $users =  ("SELECT * from tb_users");
        $sth = $conn->prepare($users);
        $sth->execute();
        //JSON Encodeing
        $rows = array();
        while ($r = $sth->fetch(PDO::FETCH_ASSOC)){
            $rows[] = $r;            
        }
    return json_encode($rows);    
    }
    
     function getComments($article_id)
    {
        global $conn;
        //SQL Statement setup prepare and execute
        $comments =  ("SELECT username, comment, article_id, time FROM tb_comments
                    INNER JOIN tb_users ON tb_users.user_id = tb_comments.user_id WHERE article_id = '$article_id'");
        
        $sth = $conn->prepare($comments);
        $sth->execute();
        //JSON Encoding
        $rows = array();
        while ($r = $sth->fetch(PDO::FETCH_ASSOC)){
            $rows[] = $r;            
        }
        return json_encode($rows);    
    }  
    
    function postComment($comment, $article_id, $user_id)
    {
        global $conn;
        //SQL Statement setup prepare and execute
        $query = "INSERT INTO tb_comments (comment, article_id, user_id) VALUES (:comment, :article_id, :user_id)";
        
        //  Prepare the statement
        $stmt = $conn->prepare($query);
        
        //  Bind values and execute
        $success = $stmt->execute([
            'comment' =>  $comment,
            'article_id'  =>  $article_id,
            'user_id' => $user_id
        ]);
        
        $count = $stmt->rowCount();
        if($success)
        {
            echo "Comment Posted";
            json_encode($stmt);            
        }
        else
        {    
            echo $stmt->errorInfo()[2];
        }           
    }

    function auth($un, $pwd)           
    {
        session_start();
        global $conn;    
        //SQL Statement setup prepare and execute
        $sql = "SELECT * FROM tb_users WHERE username = :username";

        $stmt = $conn->prepare($sql);

        $stmt->execute(['username' => $un]);
        
        $result = $stmt->fetch();
        
        $verify = $result['password'];
        //Verifying password match
        if(password_verify($pwd, $verify))
            {
                //Session Data
                $_SESSION['loggedin'] = true;
                $_SESSION['user_id'] = $result['user_id'];
                $_SESSION['username'] = $result['username'];
                $_SESSION['first_name'] = $result['first_name'];
                $_SESSION['user_type'] = $result['user_type'];
                $_SESSION["token"] = rand(100000, 999999); 
            }
        else
            {
              echo "Login failed";  
            }         
    } 
   
    function destroySession()
    {   
        //Destroy session data
        $_SESSION=array();
            if (session_id() != "" || isset($_COOKIE[session_name()]))
                setcookie(session_name(), '', time()-2592000, '/');
                session_destroy();
    }

    function uploadArticle($user_id, $headline, $article, $imageName, $author)
    {
        global $conn;
        //SQL Statement setup prepare and execute
        $query = "INSERT INTO tb_articles (user_id, headline, description, image, author) VALUES (:user_id, :headline, :description, :image, :author)";

  	 //execute query
  	$stmt = $conn->prepare($query);
        
        $success = $stmt->execute([
            'user_id' => $user_id,
            'headline' => $headline,
            'description' => $article,
            'image' =>  $imageName,
            'author' => $author
        ]);

        if($success){                       
            header("location:https://mayar.abertay.ac.uk/~1605460/Web_Dev/GamingAPI_MW/View/index.php");
        }
        else{
            echo "upload failed";           
        }
    }
    
    function moveFile($user_id, $headline, $article, $imageName, $author)
    {  
        global $conn;
        
        $target_dir = "img/";
        $imageName = $target_dir .basename($_FILES["file"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($imageName,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["file"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        //// Check if file already exists
        if (file_exists($imageName)) {
           echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $imageName)) {
                echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
                header("location:https://mayar.abertay.ac.uk/~1605460/Web_Dev/GamingAPI_MW/View/index.php");
                  
                
                //SQL Setup prepare and execute
                $query = "INSERT INTO tb_articles (user_id, headline, description, image, author) VALUES (:user_id, :headline, :description, :image, :author)";

                   //execute query
                   $stmt = $conn->prepare($query);

                   $success = $stmt->execute([
                       'user_id' => $user_id,
                       'headline' => $headline,
                       'description' => $article,
                       'image' =>  $imageName,
                       'author' => $author
                   ]);

                   if($success)
                       {           
                        header("location:https://mayar.abertay.ac.uk/~1605460/Web_Dev/GamingAPI_MW/View/index.php");               
                       json_encode($stmt);
                        }
                   else{
                       echo "upload failed";           
                   }          
                
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }       
    }
    

    
