<?php
	//start session
	session_start();
	
	require_once('component.php');
	
	
     //require_once('connectcart.php');
	 if (isset($_POST['add'])) {
	    //print_r($_POST['product_id']);
		 if(isset($_SESSION['cart'])) { // check session 'cart have some data or not'
			 
	       $item_array_id = array_column($_SESSION['cart'], "product_id");
		   //print_r($item_array_id);	
		   
	         if(in_array($_POST['product_id'], $item_array_id)){
	            echo "<script>alert('Product is already added in the cart..!')</script>";
	            echo "<script>window.location = 'indexbynina.php'</script>"; 
	        } else {
				$count = count($_SESSION['cart']);
	            $item_array = array(
	                'product_id' => $_POST["product_id"]
	            );
				// create new session variable
	            $_SESSION['cart'][$count] = $item_array;
				//print_r($_SESSION['cart']);
	        }	 	        		
		 } else {
	
	        $item_array = array(
	                'product_id' => $_POST["product_id"]
	        );
	        // Create new session variable
	        $_SESSION['cart'][0] = $item_array;
	        //print_r($_SESSION['cart']);
	    }
	}
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Shopping cart</title>
		<!--Font awesome-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
		
	    <!-- Bootstrap CDN -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    	<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
		
		<?php require_once("headerbynina.php"); ?>
		
		<div class="container">
			<div class="row text-center py-5">
				<?php 
					require_once('connectcartbynina.php');			
					//require_once('addcarttest.php');
				?>
			</div>
		</div>
		
		
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
	
	
<!-- Bootstrap CSS 
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">	
		<link rel="stylesheet" href="style.css">-->

