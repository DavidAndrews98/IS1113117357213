<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type= "text/javascript" src="cost_calc.js"></script>
    </head>
    
    <body>
            <h4>Select a product</h4>
        
            <br/>
        
            <form method = "POST" action = "E-Business2.php">
        
        <label for = "salesforce">
        <input type = "radio" id="salesforce" name= "product" checked onClick = "disablebtn">
        SalesForce @100
        </label>
    
        <br/>
        <label for = "aws">
        <input type = "radio" id="aws" name= "product" onClick = "disabletnProcess()"/>
        AWS @ 30
        </label>
        
        <br/>
        <br/>
        
         <label for ="subtotal">
                Subtotal
                <input type = "text" id = "subtotal" value  = "0.00" readonly/>
                
            </label>
            <br/>
            <label for ="total">
                Subtotal
                <input type = "text" id = "total" value  = "0.00" readonly/>
                
            </label>
            
            <br/>
            
            <button type ="submit" id = "btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        <br/>
        <button onClick = "calcSub()">Calculate Cost</button>
        <a role ="button" href = "E-Business1.php">Clear Choice</a>
      
    </form>    
        </body>
</html>



