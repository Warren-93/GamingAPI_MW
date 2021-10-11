<?php
include 'inc_headerv2.php';
//Check for usertype of Admin to view the accounts page        
if ($user_type == 'admin'){
echo "
        <div class='container'>";
            //Users Function call and Decoided JSON 
            $userstxt = getAllUsers();
            $usersjson = json_decode($userstxt);
            
            //Display of user data with usertype management and deletion capability
            echo"<div class='table-responsive-xl'>";
            echo"<table class='table table-dark'>";
                    echo"<thead>";
                        echo"<tr>";
                          echo"<th scope='col'>User Id</th>";
                          echo"<th scope='col'>First Name</th>";
                          echo"<th scope='col'>Last Name</th>";
                          echo"<th scope='col'>Email</th>";
                          echo"<th scope='col'>Mobile No.</th>";
                          echo"<th scope='col'>Username</th>";
                          echo"<th scope='col'>User Type</th>";
                          echo"<th scope='col'>Make Admin</th>";
                          echo"<th scope='col'>Delete Account</th>";                         
                        echo"</tr>";
                    echo"</thead>";    
                    
                    //For loop for accessing each set of data in database for users 
               for($row = 0; $row< sizeof($usersjson); $row++)
                {             
                        echo "<tbody>";
                        echo "<tr>";
                        echo "<td>".$usersjson[$row]->user_id."</td>";                                                                                           
                        echo "<td>".$usersjson[$row]->first_name."</td>";
                        echo "<td>".$usersjson[$row]->last_name."</td>";
                        echo "<td>".$usersjson[$row]->email."</td>";
                        echo "<td>".$usersjson[$row]->mobile_no."</td>";
                        echo "<td>".$usersjson[$row]->username."</td>";
                        echo "<td>".$usersjson[$row]->user_type."</td>";
                                               
                        //Display of user promote/Demnote depending of the usertype which is displayed in the row 
                        if($usersjson[$row]->user_type == 'admin'){
				echo "<td><form action='../Controller/demote.php' method='post'>";
				echo "<input type='hidden' name='id' value='" .$usersjson[$row]->user_id."'>";
				echo "<input type='submit' value='Demote' class=''></td></form>";      
                                //Delete button
                                echo "<td><form action='../Controller/delete.php' method='post'>";
				echo "<input type='hidden' name='id' value='" .$usersjson[$row]->user_id."'>";
				echo "<input type='submit' value='Delete' class=''></td></form>";
			}else 
                            if($usersjson[$row]->user_type == 'user') {
				echo "<td><form action='../Controller/promote.php' method='post'>";
				echo "<input type='hidden' name='id' value='" .$usersjson[$row]->user_id."'>";
				echo "<input type='submit' value='Promote' class=''></td></form>";                             
                                echo "<td><form action='../Controller/delete.php' method='post'>";
				echo "<input type='hidden' name='id' value='" .$usersjson[$row]->user_id."'>";
				echo "<input type='submit' value='Delete' class=''></td></form>";
                                echo "</tr>";
                            }                               
                        echo "</tbody";
                        echo "</table>";
                        echo "</div>";
                }
}
    else
    {    
        //Redirect if the user is not an admin
        header("location:https://mayar.abertay.ac.uk/~1605460/Web_Dev/GamingAPI/View/index.php");
        
    }