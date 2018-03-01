<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "stylesheet" href="ebusstyle.css" type="text/css" />

<header>
		<div id = "Title">
		<h1> eBusiness </h1>
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


        <title>RECEIPT</title>
    </head>
    <body>
        <h4 class="ebus3_heading">Purchase Receipt</h4>
        
        <?php  
        // Set session variables
          $_SESSION["user_name"] = $_POST["user_name"];
          $_SESSION["user_email"] = $_POST["user_email"];
        ?>
        
        <p class="ebus3_name">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Name: " . $_SESSION["user_name"] . ".";
            ?>
        </p>
        
        <p class="ebus3_email">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Email: " . $_SESSION["user_email"] . ".";
            ?>
        </p>
        
        <p class="ebus3_total">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Total: " . $_SESSION["total"] . ".";
            ?>
        </p>
         <div id="Footer">
		<p>Copyright &COPY; All Rights Reserved. Design By David Andrews</p>
   </div>
    </body>
</html>