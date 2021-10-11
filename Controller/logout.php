<?php

include "../Model/api.php";

session_start();
    //Destroying session data  when logging out 
    if (isset($_SESSION['loggedin']))
    {
    destroySession();
    header("Location: ../View/index.php");
    exit();
    }
    else {echo "<div class='main'><br>".
                "You cannot log out because you are not logged in";
    }
