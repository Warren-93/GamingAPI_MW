<?php 
    require_once 'inc_headerv2.php';
?>    
 <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <title>Gaming 2018</title>
        <meta name='description' content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
    </head> 
    
  
     <?php
//Creating article form
echo "<div class= 'container'>
    <form action='../Controller/upload.php' method= 'post' enctype='multipart/form-data'>

         <label>Headline</label>
         <input type='text' name= 'Title' id='headline' class='form-control' maxlength= '40'>

       <p>
            <label for='image'>Image Upload</label>
            <input type='file' name='file' id='file'>
        </p>
        
        <p>
               <label>Article</label>
                <textarea class='form-control' rows='5' name= 'article' maxlength= '500'></textarea> 
        </p>
                
        <p>
           <label>Author</label>
           <input type='text' name='writer' id='headline' class='form-control' maxlength=>                  
        </P>
       
        <input type = 'hidden' name= 'user_id' value= '$user_id'> 
        
        <p>
            <input type='submit' value='Upload' name='submit'>
        </p>       
    </form>
        </div>";
      
    
     