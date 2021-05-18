<?php
		// create connection
        $servername = "127.0.0.1:53018";
    	$username = "azure";
    	$password = "6#vWHD_$";
    	$dbname = "mamastore";
		//$tablename = "customer";
		
		// Create connection
    	$conn = new mysqli($servername, $username, $password, $dbname);
        
    	// Check connection
    	if ($conn->connect_error) {
    	  die("Connection failed: " . $conn-> connect_error);
    	}
    	//echo "Connected successfully";
?>