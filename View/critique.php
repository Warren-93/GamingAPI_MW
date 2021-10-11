<?php 
     require_once 'inc_headerv2.php';
?>    
<!--    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
    </head>-->
    
<html>
<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>Gaming</title>  
<script> 
$(document).ready(function(){
    $("#heading1").click(function(){
        $("#critique1").slideToggle("slow");
    });
    
    $("#heading2").click(function(){
        $("#critique2").slideToggle("slow");
    });
    
    $("#heading3").click(function(){
        $("#critique3").slideToggle("slow");
    });
    
    $("#heading4").click(function(){
        $("#critique4").slideToggle("slow");
    });
    
    $("#heading5").click(function(){
        $("#critique5").slideToggle("slow");
    });
    
    $("#heading6").click(function(){
        $("#critique6").slideToggle("slow");
    });
    
    $("#heading7").click(function(){
        $("#critique7").slideToggle("slow");
    });
    
    $("#heading8").click(function(){
        $("#critique8").slideToggle("slow");
    });
    
    $("#heading9").click(function(){
        $("#critique9").slideToggle("slow");
    });
    
    $("#heading10").click(function(){
        $("#critique10").slideToggle("slow");
    });
    
    $("#heading11").click(function(){
        $("#critique11").slideToggle("slow");
    });
    
    $("#heading12").click(function(){
        $("#critique12").slideToggle("slow");
    });
});
</script>

<style> 
.critique 
{
    margin-left: 10%;
    margin-right: 10%;
    margin-bottom: 2%;
    padding: 100px;
    text-align: center;
    background-color: #484e54;
    border: solid 1px red;
    display: none;
}
.heading
{
    border: solid 1px red;
    margin-left: 10%;
    margin-right: 10%;
    padding: 50px;
    text-align: center;
    background-color: black;
}

.week1, .week2, .week3, .week4, .week5, .week6, .week7, .week8, .week9, .week10, .week11, .week12
{
    margin-top: 2%;
    margin-bottom: 2%;
}
</style>
</head>
<body>

 <!-- Critique page with javascript and CSS inline-->   
<div class = "week1">    
    <div id="heading1" class= 'heading'>   
        <h1>Frameworks</h1>
    </div>
    <div id="critique1" class='critique'>
        <h1>Frameworks</h1>
        <p>
            At the core of HTML5 Frameworks are 2 prominent frameworks which are both mobile focused, they have there own advantages and disadvantages to using
            each one. Bootsrap is the more mainstream and widely used however foundation has its own purpose and abilities with its use. I have used bootstrap for my site
        </p>
        
        <h3>Bootstrap</h3>
        <h4>Advantages</h4>
        <ul>
            <li>
                Mass amount of templates which are easy to implement and understand
            </li> 
            <li>
                Little to no knowledge of CSS is needed for this to be implemented with a Decent UI
            </li> 
            <li>
                Great Mobile Support
            </li> 
            <li>
                Limited in potential customisation
            </li>
        </ul>
        
        
        <h4>Disadvantages</h4>
        <ul>
            <li>
                Not as Customisable as rival frameworks such as Foundation, leaving it quite limited for some higher experienced in CSS developers
            </li> 
        </ul>
                      
        <h3>Foundation</h3>
        <h4>Advantages</h4>
        <ul>
            <li>
                Vastly more Customisable within there CSS and structure
            </li> 
            <li>
                CSS knowledge is needed 
            </li> 
        </ul>
                
        <h4>Disadvantages</h4>
        
        <ul>
            <li>
                CSS knowledge is needed 
            </li> 
            <li>
                Could become complicated and complex is attempting to customise 
            </li> 

        </ul>
        
        
        <h3>Bootstrap Features</h3>
        
        <ol>
            <li>
                <p>
                    Tables are a feature bootstrap supports, which provides clean and responsive layouts for displaying data within a table, with an easy to understand implementation.
                </p>
            </li>
            
            <li>
                <p>
                    Animations support within bootstrap allows for easiness in implementing some extra flair to buttons or images, very simple and without any real need for knowledge in Javascript animation functions as they are there for you.
                </p>
            </li>
            <li>
                <p>
                    Input groups, in bootstrap allow for added features to input forms such as adding in an @ within its own block to make sure of an @ being inserted automatically instead of depending on the user remembering to add an @ sign, much other functionality to provide an ease of use of forms for users can be implemented with the input group classes.
                </p>
            </li>
            <li>
                <p>
                    Responsive embed, allows for the embedding of media, whilst they are dynamic to displaying across multiple platforms, such as a YouTube video embedded would be automatically scaled for display on a mobile device as well as a desktop.
                </p>
            </li>
            <li>
                <p>
                    Thumbnails allow for a easy to use display of an image with a nice looking border, whilst being resizable to the users desire, allowing for display of images as thumbnails for articles on a homepage to be scaled down and nicely designed.
                </p>    
            </li>
        </ol>
        
        <p>
            To begin with using bootstrap is a bit of a jump from needing to use general HTML and CSS, which was always a negative for myself in the CSS and design department, using Bootstrap has allowed for the coding side to be more of the focus than the design of the UI.          
        </p>    
    </div>
</div>

<div class = 'week2'>    
   <div id="heading2" class= 'heading'>   
        <h1>Realtional Database</h1>
    </div>
    <div id="critique2" class='critique'>
        <h1>ERD Diagram</h1>
        <img src ='img/ERD.PNG' alt="ERD Diagram"/>
        
        <p>
            This is a good design within the database as it excludes duplicate data being entered into multiple tables individually by being 3NF it is in the best state for an ERD Database design using foreign and primary keys to join data from each table together in SQL statements easier, by taking IDs from each of the other tables they are connected to.
        </p>
        <p>
            To setup using a summary of the article in the index page, you select the description data whilst limiting the data it outputs and renaming it AS Summary or as you wish really. It is then referenced in accessing the data as Summary or whatever it is named and displays the limited amount of data which you specified the length of.
        </p>
        <p>
            Using 3NF data is the best form of data storage which negates complicated repetitive stored data being within a database and allows for a more streamlined approach to storing data, however with using a relational database, there is the need to develop all the data you want to be storing before development of the web app or application which will use the database to be developed as it is incredibly hard to then adapt the ERD to store more data within a huge database and to be constructed to a ERD in 3NF.
        </p>
    </div>
</div>

<div class= 'week3'>    
    <div id="heading3" class= 'heading'>   
        <h1>API</h1>
    </div>
    <div id="critique3" class='critique'>
        <h1>API</h1>
        <p>
            
            The API has been implemented by decoding or encoding data which Is retrieved or sent between the database and the website, this is done through a bunch f functions incorporating SQL statements, this allows for more flexibility in how data is retrieved and stored. The API is a good idea in development as it introduces an extra layer of security between the website and the database and the data which has been stored while also allowing flexibility in the data which is stored.
        </p>   
        
        <pre>
            function getArticle ($article_id)<br>
            {
                global $conn;
                $article = ("SELECT * FROM tb_articles WHERE article_id = '$article_id'");
                $sth = $conn->prepare($article);
                    $sth->execute();
                     
                //JSON
                $rows = array();
                while ($r = $sth->fetch(PDO::FETCH_ASSOC)){
                    $rows[] = $r;            
            }
                return json_encode($rows);    
            <br>}
        </pre>      
        
        <p>
            This code shows the use of a function with the parameter for the data required being passed after being initially sanitised, and returning the data into an array and encoding the data in JSON, this provides the security layer and the flexibility for the data that is stored and retrieved 
            Using an API also allows for added development within the API approach to allow external sites to gain access to the data you store, without them hitting the database for the data base and adding extra stress on your database.  
        </p>   
    </div>
</div>

<div class = 'State'>    
    <div id="heading4" class= 'heading'>   
        <h1>Register and Login</h1>
    </div>
    <div id="critique4" class='critique'>
        <h1>User Security</h1>
       
        <p>
            Using POST, prevents the data being entered into the form for registering and logging in being visible in the browser when its passed. This prevents the data being visible to the user or anyone else easily when entering data into forms especially when entering login details, this is then added to by using Sanitisation, which sanitises the data to prevent SQL injection possibilities.
            Sanitisation, being used in PHP for sanitising inputs to the SQL query from forms, sanitizes the data that has been entered by the user from using any kind of SQL statement that could expose the data and potentially critical data such as usernames emails and passwords of users of a site <p/>
        </P>
        <p>
            Prepared Statements being used allow for the SQL query to be separated from the direct data variable adding even more layers to the attempted prevention of the likelihood of an SQL attack, by using field fillers to then be executed and the parameters binded into the SQL for the successful and secure entry of proper data and no potentially dangerous data being executed within the database
            The data being transferred and retrieved through functions and being encodedand decoded with JSON adds an extra layer of security with the implementation of Login and registration, which prevents the data being accessible easily within the database and only storing what is required in the JSON from each API function within the JSON.
        </p>

        <h2>Login</h2>
        <p>
            Logging in brings its own security risks, and needs, on logging in users passwords must not be visible to a database admin, and stored correctly and properly adding an extra layer of security in any potential threat trying to gain access to userr passwords, with them being encrypted properly with the most up to date encryption method adds to the layers any potential hacker needs to go through
            to gain access to the plain text version of passwords stored in a database.
        </p>    
        <p>
            On users login, session data is stored from the database about the user and checked for proper login and user verification, this data is used to keep track of specific users, access rights and any potential profile they have on a site and keeps it securely for them to edit onl, with every user potentially having different profiles and also access rights 
        </p>
        <pre>
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
        </pre>
        <p>
            Thew function authenticating a users login details and storing session data about the user which can be used on the site for access permissions and even a welcome message 
        </p>
        <p>
            The main session variables generally used are the logged in boolean to validate a user being logged in, a users status such as user_type, to manage access permissions.
            and the users username which can be displayed as a name viewed by everyone after a comment for example, or as a profile name and even a welcome message 
        </p>
        
        <h2>Comments</h2>
        <p>
            Comments bring another level of security in themselves, comments should be able to be anything entered but this gives the risk of an SQL injection, this is where sanitisation can be used and also 
            setting a comment limit and prepared statements to clear any unwanted symbols or potential SQL Statements being attempted to be inserted 
        </p>

    </div>
</div>

<div class= 'week5'>    
    <div id="heading5" class= 'heading'>   
        <h1>Security</h1>
    </div>
    <div id="critique5" class='critique'>
        
        <h2>
            Sanitisation
        </h2>
        <p>
            Sanitisation is the first step in securing data transfer from user input forms
            Sanitisation takes the data which is entered and filters out any potentially dangerous code or characters which has been entered into the form, to attempt to access data in the database, which is a form of SQL Injection                       
        </p>
        <p>
            In my implementation i seperated out the transfer and sanitisation of the data to the SQL statement functions, so there was an extra page between the functions accessing the database           
        </p>
        
        
            
            <p>$first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);</p>

            <p>$last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);</p>

            <p>$mobile_no = filter_input(INPUT_POST, 'mobile_no', FILTER_SANITIZE_STRING);</p>

            <p>$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);</p>

            <p>$un = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);</p>

            <p>$pwd = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);</p>
            
            <p>As i said previously this would be seperated from the functions accessing the database on this same page i would then call the function passing the parameters from here</p>
        
        
        <h2>
            Hashing
        </h2>
            <p>
                The 2nd step in security, for passwords, there is hashing algorithms which enable the website creator to completely scramble the users password when they register and therefore the password
                is not completely open for viewing in the database, it is not visible in plain form, instead hashing transforms the password into a 256 bit string made up of random characters.
            </p>
            <p>
                There is many different Hashing algorythms which have been used over the years, which diminish in being a viable option to be used with hackers constanty trying to crack them and ultimately being succesful wtih the earlier forms such as MD5 and sha256, being the more recently used and becoming more vulnerable
                In my implementation is used an in built algorythm function from PHP called password_hash, this is the most secure as there is no open source to how this is done or no vulnerable salts which are manually entered by the developer which made hashing algorythms easier to crack if you could see what salt words where being used 
            </p>
            <p>
                The password_hash algorithm doesnt use a hard coded salt, making this more secured
                The code for this is 
            </p>
            <p>
                $pwdhash = password_hash($pwd, PASSWORD_DEFAULT);
            </p>
            <p>It takes the initially entered password which has been sanitised in a variable, takes the variable and combines the password into a hashed string, being saved as a new variable in this case $pwdhash
            </p>
        <h2>
            Salting
        </h2>
        <p>
            In my website i didnt use a salt which has been hard coded, because the function i used for the passwords was an automaticly salted hash function, however salts are what are used to had extra security when using other hashing methods as i mentioned above
            
        </p>
        <p>Usually takes this sort of form</p>
        <p>
            $salt1 = "4b3rt4y";
            $salt2 = "C0mput1ng";
            
            $pwdhash = $salt1$password$salt2l;
            
        </p>
        <h2>
            Prepared Statements
        </h2>
        <p>
            Prepared statements, another step in adding secure data transfer between the website and the database, this is also a method for preventing SQL injection attempts, by preventing any unwanted data to be inserted into the database from the form inputs
        </p>
        <p>
            Prepared Statements look like this is PDO :
        </p>
        <p>
            $query = "INSERT INTO tb_users (first_name, last_name, mobile_no, email, username, password)
            VALUES ( :first_name, :last_name, :mobile_no, :email, :username, :password )";
        </p>  
        <p>
            //  Prepare the statement
            $stmt = $conn->prepare($query);
        </p>
        <p>
            //  Bind values and execute
            $success = $stmt->execute([</p>
        <p>       'first_name' =>  $first_name,</p> 
        <p>       'last_name'  =>  $last_name,</p>
        <p>'mobile_no' => $mobile_no,</p>
        <p>'email' => $email,</p>
        <p>'username' =>  $un,</p>
        <p>'password' => $pwdhash</p>
        <p> ]);</p>
        
    </div>
</div>



<div class= 'week7'>    
    <div id="heading7" class= 'heading'>   
        <h1>Internet Of Things</h1>
    </div>
    <div id="critique7" class='critique'>
        <h1>Electric Imp</h1>
        <p>
             This initial task working with the electric imp was filled with issues and problems the functionality of them are not the best whilst the facilitation of the rooms external to Eduroam network has limited connectivity and they would not connect to our mobile devices for a very long time.
            The device is not very good for what it was supposed to be for, to provide some knowledge on the Internet of things and implement some form of data or functionality from an external site over the internet, this device would have been better off being replaced with a more commonly used minicomputer device such as Arduino’s or Raspberry Pi’s.
        </p>
        <p>
            The task was to be able to switch the lights on the device on and off using the code provided which need to be adapted to work. This was not done simply with a lack of knowledge of the C programming languages. However, it was good see it working when it eventually did.           
        </p>
        <h3>Sending Data to Website/DB</h3>
        <p>
            Such as with the initial task with using the Imps, there was continual issues connecting and configuring the devices. Added to this the lack of documentation or tutorial on how to actually code the device whilst also then sending the data to the website to be stored within our database, was not an easy task to get my head around, which took a while and ended up being a lengthy process preventing some development time for a couple of other features we had been “taught”. However, I got there in the end and managed to be able to store the data within the database, and then display it on my website. This was done as an ERD rather than as a 1 field process which was 1 of the 2 options discussed how the data could be stored. This was not displayed in jQuery Mobile, however Javascript has been included elsewhere in the site which was the requirement attached to this task.
        </p>
        <p>
            With the storing of data from the imp, there were 2 options, i could of stored the data as a json string in 1 column in the database or had mutliple columns for each dtaset, i chose the latter as i felt that was the better way and way that i knew best for storing data in a database to be seperate data columns to be displayed cleanly on the website 
        </p>
        
        <h2>
            Device Code
        </h2>
        <pre>
            //Device Code

            // Assign hardware.pin9 to a global variable, therm
            therm <- hardware.pin9;

            // Configure pin5/therm for analog input
            therm.configure(ANALOG_IN);

            // These constants are particular to the thermistor we're using.
            // Check your datasheet for what values you should be using
            const B_THERM = 3977.0;
            const T0_THERM = 298.15;

            // The resistor in the circuit (10KΩ)
            const R2 = 10000.0;

            function getTemp() {
                local vin = hardware.voltage();
                local vout = vin * therm.read() / 65535.0;
                local rTherm = (R2 * vin / vout) - R2;
                local lnTherm = math.log(10000.0 / rTherm);
                local tempK = (T0_THERM * B_THERM) / (B_THERM - T0_THERM * lnTherm);

                local tempC = tempK - 273.15;
                local tempF = tempC * 9.0 / 5.0 + 32.0;

                local temp = {};
                temp.celsius <- tempC;
                temp.fahrenheit <- tempF;
                return temp;
            }

            function getVoltage() {
                local vin = hardware.voltage();
                local vout = vin * therm.read() / 65535.0;

                local volt = {};
                volt.age <- vout;

                return volt;
            }

            function getLightLevel() {
                local level = hardware.lightlevel();

                local light = {};
                light.level <- level;

                return light;
            }

            function poll() {
                // Get and log the temperature in both scales
                local temp = getTemp();
                local volt = getVoltage();
                local light = getLightLevel();

                local readings = {};
                readings.temp <- temp;
                readings.volt <- volt;
                readings.light <- light;
                agent.send ( "eiData", readings ) ;

                // Wake in 5 seconds and read the value again:
                imp.wakeup(5, poll);
            }

            // Call the function to make an inital poll
            poll();
        </pre>
        
        <h2>
            Agent Code
        </h2>
        <pre>
            //agent code

            function getReadings(readings) {
                local url = "https://mayar.abertay.ac.uk/~1605460/Web_Dev/GamingAPI/IOT.php";
                local headers = { "Content-Type" : "application/json"} ;

                server.log (format("Temperature: %.2fC, %.2fF\nVoltage: %.2fV\nLight Level: %.2f", readings.temp.celsius, readings.temp.fahrenheit, readings.volt.age, readings.light.level)) ;
                local body = (format("?cel=%.2f&fahr=%.2f&volt=%.2f&light=%.2f", readings.temp.celsius, readings.temp.fahrenheit, readings.volt.age, readings.light.level));

                server.log((url + body));
                local request = http.get(url + body);
                local response = request.sendsync();

                //local jsonReadings = http.jsonencode(readings) ;
               }

            device.on("eiData", getReadings);
        </pre>
    </div>
</div>

<div class= 'week8'>    
    <div id="heading8" class= 'heading'>   
        <h1>XML and XSLT</h1>
    </div>
    <div id="critique8" class='critique'>
        <h1>XML and XSLT</h1>
        <p>
            This topic was looked vastly into how to develop the XML page for my site, which I really couldn’t get around what we were supposed to do with it whether it was literally just have an XML document of our articles hard coded in XML, I understand it is for the ability for external sites to be able to access and display data on their site, which is a good thing to have and be able to do, I just didn’t understand how to or what was fully expected with this, added to the limited time I ended up with having spent a lot of time on the IOT side of things, the requirements was checked and there was no mention of this or the XLST as a definite specification requirement in the official document, so the decision was made to not try and develop it whilst there was a set requirement for the Web Service to be there within the site in some form.
        </p>
        <p>
            XSLT would be used for the inclusion of an external RSS feeder the site, where the data is searched through an XML file using XSLT and then displayed in some form. Again I really didn’t understand the stuff I found and what was actually expected, I had never come across XML or XSLT before and it threw me off completely, I don’t always take whats given online as the proper way to implement things, id rather see what has been given through an example whilst in education from the lectures in such a tutorial where I could get a better and proper understanding on how it is implemented            
        </p>
        
    </div>
</div>

<div class= 'week9'>    
    <div id="heading9" class= 'heading'>   
        <h1>Web Service</h1>
    </div>
    <div id="critique9" class='critique'>
        <h1>Web Service</h1>
        <p>
            The Web Service, was a hard task to understand, couldn’t find any relevant information on the internet which I could understand how to decipher and build myself. The API key was obtained through the Gamespot API site, which there was a requirement to sign in to be able to obtain the key. The use of the filtering keywords which I realised were there on the site was good to narrow the bundle of data into what was wanted and then displayed on my site as initial articles and summary with details of the author. 
            The key was used by using the URL given on the site with the API key added to the end as was shown on there site, this data was then needed to be manipulated to have to in a way trick the database that you are accessing through this webservice that its an external application and that it is purely a user requesting the data that they want to see.
        </p>
        <p>
            On further time given for reassessment the Web Service has been implemented properly into a bootstrap grid layout, figuring out how to access the JSON string as a n array to loop through i had rushed the implementation in the first place given i pretty much ran out of time, working out the Imp stuffed
        </p>   
        <p>
            The Rest Service code:
        </p>
        <pre>
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
        </pre>
        <p>
            I have also added extra implementation to that of just displaying the initial article image and brief description to then be able to view the full articles on the website, adding extra manipulation to the Rest for getting one article from the JSON string data
        </p>
        <pre>
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

        </pre>
    </div>
</div> 

</body>
</html>
    <?php require_once 'inc_footer.php'
    ?>
  
