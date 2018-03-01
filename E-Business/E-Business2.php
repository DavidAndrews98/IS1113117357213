<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel= "stylesheet" href="ebusstyle.css" type="text/css" />
<header>
		<div id = "Title">
		<h1> Shopping Cart </h1>
		</div>
		
   </header>
   
	<nav>
      
		<div id="menu">
			<ul>
				<li><a href="../homepage.html">Homepage</a></li>
				<li><a href="../CloudServices.html">Andrew's Cloud Services</a></li>
				
			</ul>
		</div>
	</nav>
        
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/> 



        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "E-Business3.php">
                
               <label for="user_name" class="lbl_name">
                Name
                <input type="name" id="user_name" name="user_name" placeholder="Enter Your Name">
            </label>
            
            <br>
                
                <label for="user_email" class="lbl_email">
                Email address
                <input type="email" id="user_email" name="user_email" placeholder="example@gmail.com">
            </label>
            <br/>
                
                <label for="user_pin">
                     PIN 
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
            
            <script type="text/javascript" src="E-Business2_validator.js"></script>
            
            <?php
            //Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
            
            </div>
      <div id="Footer">
		<p>Copyright &COPY; All Rights Reserved. Design By David Andrews</p>
   </div>   
    </body>
</html>