<head>
    <title>Internet Of Things</title>

</head>


<?php
include 'inc_headerv2.php';

        
//Getting Data from Imp
        $cel = ($_GET['cel']);
	$fahr = ($_GET['fahr']);
	$volt = ($_GET['volt']);
	$light = ($_GET['light']);
        
        //If data is recieved insert into database table 
        if ($cel && $fahr && $volt && $light){
        $q = "INSERT INTO tb_readings (cel, fahr, volt, light) VALUES (:cel, :fahr, :volt, :light)";
        $stmt = $conn->prepare($q);
        //Executing the SQL Query after preparing
        $success = $stmt->execute([
            'cel' => $cel,
            'fahr' => $fahr,
            'volt'=> $volt,
            'light'=> $light
        ]);
        
        //Execute success check
        $count = $stmt->rowCount();
        if($success)
        {
            json_encode($stmt);
        }
        else
        {    
            echo $stmt->errorInfo()[2];
        }       
    }
        //Displaying the Internet of Things data in table 
        echo "
        <div class='container'>";
            $iottxt = getData();
            $iotjson = json_decode($iottxt);            
            echo"<table data-role='table' id='iotData-table-custom' data-mode='reflow' class='iotData'>";
                    echo"<thead>";
                        echo"<tr>";
                          echo"<th style ='width:5%'>Reading Id</th>";
                          echo"<th style ='width:10%'>Celsius</th>";
                          echo"<th style ='width:10%'>Fahrenheit</th>";
                          echo"<th style ='width:10%'>Voltage</th>";
                          echo"<th style ='width:10%'>Light</th>";  
                          echo"<th style ='width:20%'>Time</th>";  
                        echo"</tr>";
                    echo"</thead>";      
                //For loop for each data set in the database, limited to 10    
               for($row = 0; $row< sizeof($iotjson); $row++)
                {             
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>".$iotjson[$row]->readings_id."</td>";                                                                                           
                    echo "<td>".$iotjson[$row]->cel."&#8451;</td>";
                    echo "<td>".$iotjson[$row]->fahr."&#8457;</td>";
                    echo "<td>".$iotjson[$row]->volt." KWh</td>";
                    echo "<td>".$iotjson[$row]->light." lx</td>";
                    echo "<td>".$iotjson[$row]->time."</td>";
                    echo "</tr>"; 
                    echo "</tbody";
                }                               
                echo "</table>";
                echo "</div>";

    
    
    
    
    
    
    
    
    
    
    
    
    
    



