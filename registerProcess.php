<?php
	//include(headerbynina.php);
	session_start();
	
	// create connection
        $servername = "127.0.0.1:53018";
    	$username = "azure";
    	$password = "6#vWHD_$";
    	$dbname = "mamastore";
		$tablename = "users";
		
		// Create connection
    	$conn = new mysqli($servername, $username, $password, $dbname);
        
    	// Check connection
    	if ($conn->connect_error) {
    	  die("Connection failed: " . $conn-> connect_error);
    	}
    	//echo "Connected successfully";
		
		if (isset($_POST['reg_user'])) {
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = password_hash($_POST['password_1'], PASSWORD_DEFAULT);
			//$password_2 = password_hash($_POST['password_2'], PASSWORD_DEFAULT);
			//password_hash($_POST['password_1'], PASSWORD_DEFAULT);
			
	
			$sql = "INSERT INTO users (users_email, users_password) VALUES ('$email','$password')"; 
			// $result = mysqli_query($conn, $sql); 
			
			if(mysqli_query($conn, $sql)) {
				$_SESSION['customer'] = $email;
				$_SESSION['customerid'] = mysqli_insert_id($conn);
				header('location:indexbynina.php');
			} else {
				// header('location:login.php?message=2');
				echo ("Error description:" . mysqli_error($conn));
			}
			
		}
		
				// execute query
		 //query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
		
        if(mysqli_query($conn, $sql)){
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
        	$sql = " CREATE TABLE IF NOT EXISTS $tablename
                            (users_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             users_email VARCHAR (200) NOT NULL,
                             users_password VARCHAR (200) NOT NULL,
                             users_timestamp datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
                            );";

            if (!mysqli_query($conn, $sql)) {
                echo "Error creating table : " . mysqli_error($conn);
            } else {
	            return false;
	        }
		}
		
?>
