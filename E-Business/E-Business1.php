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
				<li><a href="../CloudServices/CloudServices.html">Andrew's Cloud Services</a></li>


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


        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    </head>
    
    <body>
        
        <h4>Select a Product</h4>
        
        <br/>
        
        <form method ="POST" action ="E-Business2.php">
            
            <label for="salesforce">
                <input type ="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            
            <br/>
            
             <label for="c9">
                <input type ="radio" id="c9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            
            </br>
            
            <label for="aws">
                <input type ="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300 
            </label>
            
            </br>
            
            <label for="gmail">
                <input type ="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="vat">
                VAT @ 10%
                <input type="text" id="vat" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="total">
                Total (- Discount, + VAT)
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
        
            <br/>
            
            <button type ="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="E-Business1.php">Clear Choice</a>
       
        </div>
        <div id="Footer">
		<p>Copyright &COPY; All Rights Reserved. Design By David Andrews</p>
   </div>
    </body>
    
</html>