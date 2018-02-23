<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>

</head>
<body>

<ul>
  <li><a class="active" href="../homepage.html">Home</a></li>
  <li><a href="../CV/cv_page1.html">CV</a></li>
  <li><a href="../Interests/sports.html">Interests</a></a></li>
  <li><a href="E-Business/E-Business1.php">E-Business</a></li>
</ul>

<div style="padding:20px;margin-top:30px;background-color:#DFECFF;height:1500px;">
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        <?php
        //Echo session variables that were set on previus page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        </div>
    </body>
</html>