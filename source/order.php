<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ordercss.css">
</head>
<body>
    <section class="order" id="order">

        <h3 class="sub-heading"> Order Now </h3>
        <h1 class="heading"> Please Enter Your Details</h1>
    
        <form method = "post" action="connection.php">
    
            <div class="inputBox">
                <div class="input">
                    <span>Your name</span>
                    <input type="text" placeholder="Enter your name" name = "name">
                </div>
                <div class="input">
                    <span>Your number</span>
                    <input type="text" placeholder="Enter your number" name="number">
                </div>
            </div>
            
            
            <div class="inputBox">
                <div class="input">
                    <span>Your address</span>
                    <input type="text" placeholder="Enter your address" name = "address">
                   
                </div>
                
            </div>

            

          

           

            
        
    <center>
            <input type="submit" value="Continue" name="submit" class="btn">
        </center>
        </form>
    
    </section>
    
</body>
</html>