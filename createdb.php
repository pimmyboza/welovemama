<?php

        // create connection
        $servername = "127.0.0.1:53018";
    	$username = "azure";
    	$password = "6#vWHD_$";
    	$dbname = "mamastore";
		$tablename = "ordermama"; 
		
		// Create connection
    	$conn = new mysqli($servername, $username, $password, $dbname);
        
    	// Check connection
    	if ($conn->connect_error) {
    	  die("Connection failed: " . $conn-> connect_error);
    	}
    	//echo "Connected successfully";
		
		 //query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($conn, $sql)){
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
        	$sql = " CREATE TABLE IF NOT EXISTS $tablename
                            ( OrderID int(3) not null auto_increment,
                            OrderTotalprice int(4) Not null,
                            OrderFullname varchar(100) Not null,
                            OrderEmail varchar(50) Not null ,
                            OrderAddress varchar(300) Not null ,
                            OrderCity varchar(30) Not null,
                            OrderZip int(5) Not null,
                            OrderPayment int(1) Not null,
                            UserID int(3) not Null ,
                            primary key (OrderID)
                            );";

            if (!mysqli_query($conn, $sql)) {
                echo "Error creating table : " . mysqli_error($con);
            } else {
	            return false;
	        }
		}
   
?>


	