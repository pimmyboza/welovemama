<?php
    session_start();
     
    
    $servername = "127.0.0.1:53018";
	$username = "azure";
	$password = "6#vWHD_$";
	$dbname = "mamastore";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
    if ($conn->connect_error) {
    	  	die("Connection failed: " . $conn-> connect_error);
	}
    //echo "Connected successfully";
	 if(!isset($_SESSION['customer']) && empty($_SESSION['customer'])) {
		header('location:login.php');
        session_destroy();
	}   
    require_once("cart.php"); 
	if(isset($_POST['order']))
	{	
         
 
	// get values form input text and number
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $address= $_POST['address'];
    $city= $_POST['city'];
	$zip = $_POST['zip'];
	$totalprice = $total;
	$payment = $_POST['payment'];
    
    $cid = $_SESSION['customerid'];
    
    $select = "SELECT * FROM product"; 
    $result = mysqli_query($conn, $select);
    if (isset($_SESSION['cart'])){
			$product_id = array_column($_SESSION['cart'],'product_id');
            while ($row = mysqli_fetch_assoc($result)) {
									foreach($product_id as $id) {
								  			   if($row['ProductID'] == $id) {	 
									  		 $update = "UPDATE product SET ProductQuantity = (ProductQuantity -1) WHERE ProductID = $id "; 
                                             $item = mysqli_query($conn, $update);
                                            }
							  }       	
							} 
            
    }
   // mysql query to Update data
   if($item)
   {
          $sql = "INSERT INTO ordermama (UserID, OrderTotalprice, OrderFullname, OrderEmail, OrderAddress, OrderCity, OrderZip, OrderPayment) 
           VALUES ('$cid','$totalprice','$fname','$email','$address','$city','$zip','$payment')";  
           $insert = mysqli_query($conn, $sql);  
           if($insert){
                //echo 'Order Successfuly';
                echo "<script>alert('Order Successfuly')</script>";    
                 //$selectid = "SELECT OrderID FROM ordermama where OrderFullname = $fname "; 
                  //$resultid = mysqli_query($conn, $select);
                unset($_SESSION["cart"]);
                echo "<script>window.location = 'indexbynina.php'</script>";
           }
  
   }else{
       echo 'Order Not Successfuly';	   
   }
   
   mysqli_close($conn);


	}
/*try
    $selectorder = "SELECT MAX(OrderID) FROM ordermama"; 
    $resultorder = mysqli_query($conn, $selectorder);
    $select = "SELECT * FROM product"; 
    $result = mysqli_query($conn, $select);
        if (isset($_SESSION['cart'])){
			$product_id = array_column($_SESSION['cart'],'product_id');
            while ($row = mysqli_fetch_assoc($result)) {
									foreach($product_id as $id) {
								  			   if($row['ProductID'] == $id) {	 									  		
                                             $product = "INSERT INTO orderdetailmama(OrderdetailID, ProductID) VALUES ($resultorder,$id)";  
                                              $insert2 = mysqli_query($conn, $product);}
                      
							  }       	
			} 
            
            
    }
*/

    
	
    
    