<?php
	session_start();
	
	if(!isset($_SESSION['customer']) && empty($_SESSION['customer'])) {
		header('location:login.php');
        session_destroy();
	} 
	
	$servername = "127.0.0.1:53018";
	$username = "azure";
	$password = "6#vWHD_$";
	$dbname = "mamastore";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);	
	
	require_once("component.php");	
	//$db = new createdb("mamastore","product");	

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>My Profile</title>
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
	<?php
		require_once('headerbynina.php');
	?>
	
	<div class="container-fluid">
	    <div class="row px-5">
			
	        <div class="offset-md-2 col-md-8">
				<div class="shopping-cart">
					<h3>My Order</h3>
					<hr>
					
					  	<?php
						  $cid = $_SESSION['customerid'];
						  $select = "SELECT * FROM ordermama where UserID = $cid"; 
    						$result = mysqli_query($conn, $select);
							//$row['OrderID'] , $row['OrderTotalprice'] , $row['OrderFullname'] , $row['OrderEmail'], $row['OrderAddress'] , 
							//$row['OrderCity'] , $row['OrderZip'], $row['OrderPayment']
							
						if(mysqli_num_rows($result) > 0) {
            				// output data of each row
                				while ($row = mysqli_fetch_assoc($result)) {
											displayorder($row['OrderID'], $row['OrderTotalprice'],  $row['OrderFullname'], $row['OrderPayment']);
									}
						}
				  		?>
	   
	   			</div>
		  	</div>
		</div>
	</div>

        
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	</body>
</html>			  
			