<?php
	
	session_start();
	
	require_once('createdb.php'); //create ordermama
	
	$servername = "127.0.0.1:53018";
	$username = "azure";
	$password = "6#vWHD_$";
	$dbname = "mamastore";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	require_once("component.php");	
	
	if (isset($_POST['remove'])) {
		if ($_GET['action'] == 'remove') {
	      foreach ($_SESSION['cart'] as $key => $value){
	          if($value["product_id"] == $_GET['id']){
	              unset($_SESSION['cart'][$key]);
	              echo "<script>alert('Product has been Removed...!')</script>";
	              echo "<script>window.location = 'cart.php'</script>";
	          }
	      }
	  	}
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>basket</title>
		<!--Font awesome-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
		<!-- Bootstrap CDN -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="style-basket.css"/>
		<link id="stylesheet" rel="stylesheet" href="/thbanklogos.min.css">
	</head>
	
	<body class ="bg-light">
	<?php require_once('headerbynina.php'); ?>
	
	<div class="container-fluid">
	    <div class="row px-5 pb-5"> 
			
	        <div class="col-md-7">
				<div class="shopping-cart">
					<h3>My Cart</h3>
					<hr>
					
					  	<?php
						  
						$total = 0;
				            // output data of add cart
				               if (isset($_SESSION['cart'])){
								   $product_id = array_column($_SESSION['cart'],'product_id');
								   // Check connection
				    				if ($conn->connect_error) {
				    	  				die("Connection failed: " . $conn-> connect_error);
				    				}
				    				//echo "Connected successfully";						
								// get product from the database  	
				        		$sql = "SELECT * FROM product"; // "SELECT id, firstname, lastname FROM MyGuests";
								//ProductName,ProductPrice,ProductPicture,ProductID
				        		$result = mysqli_query($conn, $sql); // $result = $conn->query($sql);
								   while ($row = mysqli_fetch_assoc($result)) {
										foreach($product_id as $id) {
									  		if($row['ProductID'] == $id) {		 
										  		cartElementpim($row['ProductPicture'],$row['ProductName'],$row['ProductPrice'], $row['ProductID'], $row['ProductQuantity']);
												  $total = $total + (int)$row['ProductPrice'];
									  		}
							  			}       	
									}  
								} else {
                       	 			echo "<h5>Cart is Empty</h5>";
                    			}
				  		?>
	   
	   			</div>
		  </div>

	   <div class ="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
		   <div class="pt-4">
		   		<h3>Price Details</h3>
		   		
				<div class="row price-details">
					<div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
						<h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
		    		</div>
	 				<div class="col-md-6">
					  	<h6> <?php echo $total; ?> Baht</h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6><?php echo $total; ?> Baht</h6>
					</div>
				</div>
				
				<hr>
				
				<form action="updatedbpim.php" method="post">
					<h3>Order Information</h3>
					<div class="form-group">
		            	<label for="fname"><i class="fa fa-user"></i> Full Name</label>
		            	<input type="text" id="fname" name="fname" class="form-control" placeholder="Peter Pan" required>
					</div>
					
					<div class="form-group">
		            	<label for="email"><i class="fa fa-envelope"></i> Email</label>
		           	 	<input type="email" id="email" name="email" class="form-control" placeholder="peterpan@example.com" required>
					</div>	
					
					<div class="form-group">	
						<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
		            	<input type="text" id="adr" name="address" class="form-control" placeholder="555 W. 10th Street" required>
					</div>	
					
	            	<div class="form-group">
						<label for="city"><i class="fa fa-institution"></i> City</label>
		            	<input type="text" id="city" name="city"  class="form-control" placeholder="Bangkok" required>
					</div>
					
					<div class="form-group">
						<label for="zip">Zip</label><br>
		                <input type="text" id="zip" name="zip" class="form-control" placeholder="10900"  pattern="[0-9]{5}$" required><br>				
					</div>
				
					<hr>		
					
					
					<h3>Select your payment</h3>
	
					<input type="radio" id="bank" name="payment" value="Bank Transfer" required>
		  			<label for="bank">Bank Transfer</label><br>
					<input type="radio" id="cod" name="payment" value="COD">
		  			<label for="cod">Cash On Delivery</label><br>
					<div class="col-md-12 text-center">
						<br><input type="submit" name="order"class="btn btn-info"  value="Check out" ></input>
					</div>
					<hr>
				</form>

		  	</div>
		  </div>
	 	</div>
	</div>

        
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	</body>
</html>			  
			