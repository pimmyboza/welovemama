<?php 
		// create connection
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
		
		// get product from the database
    	
        $sql = "SELECT * FROM product"; // "SELECT id, firstname, lastname FROM MyGuests";
//ProductName,ProductPrice,ProductPicture,ProductID
        $result = mysqli_query($conn, $sql); // $result = $conn->query($sql);

        if(mysqli_num_rows($result) > 0) {
            // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
					component($row['ProductName'], $row['ProductPrice'],$row['ProductQuantity'], $row['ProductPicture'], $row['ProductID'],  $row['ProductDescription'] );
                }           	
		}            
?>
				  
