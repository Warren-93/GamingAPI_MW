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
if (isset($_POST['article_id'])) {
  $id = $_POST['article_id'];
} else { header("Location: index.php");}

$context = stream_context_create(
    array(
        "http" => array(
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        )
    )
);

$url = 'https://www.gamespot.com/api/articles/?api_key=06b474df546b44196362bcd3f92e2d1340058df4&format=json&filter=id:'.$id;
$data = file_get_contents($url, false, $context);
$article = json_decode($data, true); // decode the JSON feed


        echo "<div class='container'>";
            echo "<h2>".$article['results'][0]['title']."</h2>";            
            echo "<p>".$article['results'][0]['authors']."";
            echo "<br>".$article['results'][0]['publish_date']."</p>";
            echo "<p>".$article['results'][0]['body']."</p>";

        echo "</div>";

?>
     
     
     ?>

    
    <?php 
        require_once 'inc_footer.php';
   ?>
  
