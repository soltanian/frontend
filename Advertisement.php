<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Advertisement</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="mycss/loginstyle.css">

  </head>
  
  <body>
  
    
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
	
    <a href="home.php">
		<img border="0" alt="home" src="img\home.png" width="150" height="150"></a>
	
    <h1 align="center">Advertisement</h1>
    
    
    <?php
		
		session_start();
		$info = $_SESSION['user'];
	?>
	
	<form action="sell.php" method="post">
  		
	  <div class="sellimg"  align="center" >
    <p>
		<img border="0" alt="sell" src="img\sell.png" width="200" height="200"></a>
	</p>
    
    </div>

  		<div class="container">
    		<label><b>Name</b></label>
     			<input type="text" placeholder="Enter the name of your product" name="name" required>

		  	<label><b>Asking Price</b></label>
   		  		<input type="text" placeholder="Enter your asking price" name="price" required>
   		  		
   		  	<label><b>Brand</b></label>
		  		<input type="text" placeholder="Enter the brand of your product" name="brand" required>
     			
     		<label><b>Condition</b></label>
		 		 <input type="text" placeholder="New or Used?" name="condition" required>
             
             <label><b>Description</b></label>
		 		 <input type="text" placeholder="write a few words about your product" name="description" required>                 
     			
     				
		  	<button type="submit" class="submitbtn">Save this product</button>
  		</div>

  		<div class="container" style="background-color:#f1f1f1">
    		<button type="button" class="cancelbtn">Cancel</button>
  		</div>
  </form>
	
  </body>
  
</html>