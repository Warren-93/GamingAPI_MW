<?php
session_start();
include_once "inc_design.php";
include '../Model/api.php';
include '../Controller/*';


//Header session data setup
$user = 'guest';
$name = 'guest';
$user_type = '';

if (isset($_SESSION["loggedin"]))
    {
        //Defining session data into variables 
        $user = $_SESSION['username'];
        $user_id = $_SESSION['user_id'];
        $name = $_SESSION['first_name'];
        $user_type = $_SESSION['user_type'];
        $loggedin = true;          
    }
else    
    {
        $loggedin = false;
    }
//Header navigation bar and login form button
echo "<div class='sticky-top'>
        <div class='jumbotron'>
      <div class='container'>
        <h1>Gaming 2018</h1>       
      </div>
    </div>

<nav class='navbar navbar-inverse' role='navigation'>
    	<div class='container-fluid'>
			<div class='navbar-header'>
                            <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
                            <span class='sr-only'>Toggle navigation</span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
			</button>
                            <a class='navbar-brand' href=''>Gaming</a>
			</div>
			<div id='navbar' class='collapse navbar-collapse'> 
				<ul class='nav navbar-nav'>
                                    <li><a href='index.php'>Home</a></li>
                                    <li><a href='critique.php'>Critique</a></li>
                                    <li><a href='RestAPI.php'>Gamespot</a></li>
				</ul>";
//Check for user status to display menu appropriate 
if (($loggedin) && ($user_type == 'user'))
    {
    echo <<<_USER
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">$user <span class="caret"></span></a>         
                            
                        <ul class="dropdown-menu dropdown-lr  role="menu" >
                            <li class="dropdown"> 
                                <h5>$user</h5>
                                <a class="dropdown-item" href="#">Manage Account</a>
                                <a class="dropdown-item" href="#">Set Nickname</a>
                            </li>                          
                        </ul>    
                    </li> 
                    <li class="dropdown">
                        <a href="../Controller/logout.php">Logout</a>                        
                    </li>    
                </ul>        
            </div>
	</div>
      </nav>
_USER;
    
}
else
    //If admin display different menu to user
    if (($loggedin) && ($user_type == 'admin')) 
    {    
    echo <<<_ADMIN
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">$user <span class="caret"></span></a>         
                            
                        <ul class="dropdown-menu dropdown-lr  role="menu" >
                            <li class="dropdown"> 
                                <a class="dropdown-item" href="accounts.php">Manage Users</a>
                                <a class="dropdown-item" href="#">Set Nickname</a>
                                <a class="dropdown-item" href="create.php">Create Article</a>
                                <a class="dropdown-item" href="IOT.php">Internet of Things</a>
            
            

                            </li>                          
                        </ul>    
                    </li> 
                    <li class="dropdown">
                        <a href="../Controller/logout.php">Logout</a>                        
                    </li>    
                </ul>        
            </div>
	</div>
      </nav>
_ADMIN;
    
}
else
{
    //if logged out display default menu with login and register 
    echo <<<_LOGGEDOUT
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Register <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-lr  animated flipInX" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Register</b></h3></div>
				<form id="ajax-register-form" action="../Controller/attempt_register.php" method="post">
                                    <div class="form-group">
					<input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="First Name">
                                    </div>
                                        
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="last_name" tabindex="2" class="form-control" placeholder="Last Name">
                                    </div>
                                                                                    
                                    <div class="form-group">
                                            <input type="text" name="mobile_no" id="mobile_no" tabindex="3" class="form-control" placeholder="Mobile No">
                                    </div>
                                        
                                    <div class="form-group">
                                            <input type="text" name="username" id="username" tabindex="4" class="form-control" placeholder="Username">
                                    </div>
                                        
                                    <div class="form-group">
                                            <input type="email" name="email" id="email" tabindex="4" class="form-control" placeholder="Email Address">
                                    </div>
                                    
                                    <div class="form-group">
                                            <input type="password" name="password" id="password" tabindex="5" class="form-control" placeholder="Password">
                                    </div>
                                    
                                    <div class="form-group">
                                            <input type="password" name="confirm-password" id="confirm-password" tabindex="6" class="form-control" placeholder="Confirm Password">
                                    </div> 
                                    
                                    <div class="form-group">					
                                    <div class="row">
                                        
                                    <div class="col-xs-6 col-xs-offset-3">
                                        <input type="submit" name="register-submit" id="register-submit" tabindex="7" class="form-control btn btn-success" value="Register Now">
                                    </div>
                                    </div>
				</div>
                                <input type="hidden" name="user_type" value="u"/>
			</form>				
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Log In <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu" >
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Log In</b></h3></div>
                                <form id="ajax-login-form" action="../Controller/attempt_login.php" method="post" >
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">                                      
                                            <div class="col-xs-5 pull-right">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="user_type" value="u"/>
                                </form>
                            </div>
                        </ul>
                    </li>
                </ul>
			</div>
		</div>
	</nav>     
_LOGGEDOUT;
}

echo "</div>";




                    
                    






