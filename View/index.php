<?php
//include 'inc_design.php';  

include "inc_headerv2.php";

?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gaming 2018</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
    </head>   
        
    
<?php       
    
    //Filter display of index
    echo "<div class='container'>";
    
    echo "<h3>Welcome $name </h3>";
    
    echo 
    "<form method='post' action='index.php'>
    <select name='month'>
    <option value='all' >All</option>
    <option value='1'>January</option>
    <option value='2'>February</option>
    <option value='3'>March</option>
    <option value='4'>April</option>
    <option value= '5'>May</option>
    <option value='6'>June</option> 
    <option value='7'>July</option> 
    <option value='8'>August</option> 
    <option value='9'>September</option>
    <option value='10'>October</option> 
    <option value='11'>November</option>
    <option value= '12'>December</option>
    </select>
    <input type='submit' value='Filter'>
    </form>";
        $filter = "";
        if (isset($_POST['month']))
        {
            $month = $_POST['month'];

        if ($month == "all")
            $filter = "";
        else
        {
            $filter = "WHERE MONTH(DATE) = '$month'";
        }
        }
        
        echo "<div class='row'>";        
        
        //article JSON 
        $articlestxt = getAllArticles($filter);
        $articlesjson = json_decode($articlestxt);
                $counter= 0;
                //For loop for display of articles into rows of 3 witrh counter to keep track 
                for($row = 0; $row< sizeof($articlesjson); $row++){ 
                if ($counter==3) 
                    {
                    $counter = 0;
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-md-4'>";
                        echo "<h2>".$articlesjson[$row]->headline."</h2>";
                        echo "<img src=".$articlesjson[$row]->image." class='img-responsive' height='500px' width='500px'>";
                        echo "<p>".$articlesjson[$row]->summary."</p>";
                        echo "<p>".$articlesjson[$row]->author."</p>";
                        echo "<p>".$articlesjson[$row]->DATE."</p>";
                        echo "<form action='../View/article.php' method='post'>";
                        echo "<input type='hidden' name='article_id' value='".$articlesjson[$row]->article_id."'>";
                        echo "<input type='submit' value='View Article'>";
                        echo "</form>";
                        
                        if($user_type == 'admin')
                            {
                                echo "<form action='../View/article.php' method='post'>";
                                echo "<input type='hidden' name='article_id' value='".$articlesjson[$row]->article_id."'>";
                                echo "<input type='submit' value='Delete'>";
                                echo "</form>";
                            }
                    echo "</div>";                   
                    $counter; 
                    $counter++;
                    }
                else{
                        echo "<div class='col-md-4'>";
                        echo "<h2>".$articlesjson[$row]->headline."</h2>";
                        echo "<img src= '".$articlesjson[$row]->image."' class='img-responsive' height='500px' width='500px'>";
                        echo "<p>".$articlesjson[$row]->summary."</p>";
                        echo "<p>".$articlesjson[$row]->author."</p>";
                        echo "<p>".$articlesjson[$row]->DATE."</p>";
                        echo "<form action='../View/article.php' method='post'>";
                        echo "<input type='hidden' name='article_id' value='".$articlesjson[$row]->article_id."'>";
                        echo "<input type='submit' value='View Article'>";
                        echo "</form>";
                        
                        if($user_type == 'admin')
                            {
                                echo "<form action='../Controller/deleteArticle.php' method='post'>";
                                echo "<input type='hidden' name='article_id' value='".$articlesjson[$row]->article_id."'>";
                                echo "<input type='submit' value='Delete'>";
                                echo "</form>";
                            }
                        
                    echo "</div>";
                    $counter; 
                    $counter++;
                    }                                                        
                }
        echo "</div>";
        echo "</div>";
        
                
        
?>
       
 <?php require_once 'inc_footer.php'?>
        

