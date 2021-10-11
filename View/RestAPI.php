<?php
include 'inc_headerv2.php';

//$url = 'https://newsapi.org/v1/articles?source=associated-press&apiKey=2074a3ba66ef43e198b19d8b37a4e391'; // path to your JSON file
//$data = file_get_contents($url); // put the contents of the file into a variable
//$tests = json_decode($data); // decode the JSON feed

//echo $tests->articles[0]->author;


//$url = 'https://newsapi.org/v1/articles?source=associated-press&apiKey=2074a3ba66ef43e198b19d8b37a4e391'; // path to your JSON file
//$data = file_get_contents($url); // put the contents of the file into a variable
//$tests = json_decode($data, true); // decode the JSON feed

//API Manipulation code 
$context = stream_context_create(
    array(
        "http" => array(
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        )
    )
);

//Rest API Access key and decoding
$url = 'https://www.gamespot.com/api/articles/?api_key=06b474df546b44196362bcd3f92e2d1340058df4&filter=categories:18&sort=publish_date:desc&limit=12&format=json';
$data = file_get_contents($url, false, $context);
$articles = json_decode($data, true); // decode the JSON feed       


    echo "<div class='container'>";
    echo "<div class='row'>";
                $counter=0;
                foreach ($articles['results'] as $article) 
                {
                if ($counter==3) 
                    {
                    $counter = 0;
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-md-4'>";
                        echo "<h2>".$article['title']."</h2>";
                        echo "<img src=".$article['image']['square_small']." class='img-responsive' height='300px' width='300px'>";
                        echo "<p>".$article['deck']."</p>";
                        echo "<p>".$article['authors']."</p>";
                        echo "<p>".$article['publich_date']."</p>";
                        echo "<form action='RestArticleAPI.php' method='post'>";
                        echo "<input type='hidden' name='article_id' value='".$article['id']."'>";
                        echo "<input type='submit' value='View Article'>";
                        echo "</form>";
                        echo "</div>";                   
                    $counter; 
                    $counter++;
                }
                else {
                    echo "<div class='col-md-4'>";
                        echo "<h2>".$article['title']."</h2>";
                        echo "<img src=".$article['image']['square_small']." class='img-responsive' height='300px' width='300px'>";
                        echo "<p>".$article['deck']."</p>";
                        echo "<p>".$article['authors']."</p>";
                        echo "<p>".$article['publish_date']."</p>";
                        echo "<form action='RestArticleAPI.php' method='post'>";
                        echo "<input type='hidden' name='article_id' value='".$article['id']."'>";
                        echo "<input type='submit' value='View Article'>";
                        echo "</form>";
                        
                    echo "</div>";
                    $counter; 
                    $counter++;
                    }
                }
        echo "</div>";
        echo "</div>";





            include 'inc_footer.php';
            

   

