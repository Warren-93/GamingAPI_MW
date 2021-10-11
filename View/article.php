<?php 
    require_once 'inc_headerv2.php';
?>    
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gaming 2018</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
    </head>   
        
     <?php  
    echo "<div class= 'container-fluid width = '100%'>";     
    echo    "<div class='row content'>";                 
//    echo        "<div class='col-md-8 text-centre'>" ;
     
    //Article Display
        if (isset($_POST['article_id']))
        {
        $article_id = $_POST['article_id'];
            //Article Function and JSON
            $articlestxt = getArticle($article_id);
            $articlesjson = json_decode($articlestxt);
                //For loop for the display of each set of data in the article by article_id
                        echo "<div class='container'>";
               
                for($row = 0; $row< sizeof($articlesjson); $row++)
                {       
                        
                        echo "<h2>".$articlesjson[$row]->headline."</h2>";                                          
                        echo "<img src=".$articlesjson[$row]->image." class='img-responsive thumbnail'>";    
                        echo "</div>";
                        echo "<div container-fluid width = '100%'>";
                        echo "<pre>".$articlesjson[$row]->description."</pre>";
                        echo "<p>".$articlesjson[$row]->author."</p>";
                        echo "<p>".$articlesjson[$row]->date."</p>";                       
                }
               
                echo "</div>";
                echo "</div>";
//                echo "</div>";
                
/////////////////////////////////////////////Comments Section///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////               
        //Comments Section, only displays if logged in statuis is true                 
        echo    "<div class= 'container-fluid'>";
        if ($loggedin){   
        echo    "<div class='well'>
                    <h4>Leave a Comment:</h4>
                    <form action= '../Controller/comments.php' method= 'post' role= 'form'>
                                                           
                        <div class='form-group'>
                            <textarea class='form-control' rows='5' name= 'comment' ></textarea>                            
                        </div>
                         
                        <input type = 'hidden' name= 'user_id' value= '$user_id'>                            
                        <input type= 'hidden' name= 'article_id' value= '$article_id'>
                                                        
                        <button type='submit' class='btn btn-primary'>Submit</button>
                    </form>
                </div>";
        
        }
        else {
            echo    "<h1>Login to comment</h1>";
        }       
        echo        "<div>        
                    <div class='media'>";
                //JSON for getting comments stored in database through JSON
                $commentstxt = getComments($article_id);
                
                $commentsjson = json_decode($commentstxt);
                
                //For loop for displaying each comment that has been posted  
                for($row = 0; $row< sizeof($commentsjson); $row++)
                    {
                        echo "<div class= 'well' id='comments'>";
                       
                        echo "<h4 class='media-heading'>".$commentsjson[$row]->username.
                                "</br>".
                                
                                "<small>".$commentsjson[$row]->time."</small>";
                                "</h4>";                       
                        echo "<pre>".$commentsjson[$row]->comment."</pre>";
                             
                            "</div>";
                        
                        echo"</div>";                      
                    }           
        }
                else
                {
                echo "Something went wrong";
                }
    
              echo "</div>";
              echo "</div>";
              echo"</div>";
    ?>

    
    <?php 
        require_once 'inc_footer.php'
    ?>
  
