<?php
	//include(headerbynina.php);
	session_start();
	
	// create connection
        $servername = "127.0.0.1:53018";
    	$username = "azure";
    	$password = "6#vWHD_$";
    	$dbname = "mamastore";
		$tablename = "created_customer";
		
		// Create connection
    	$conn = new mysqli($servername, $username, $password, $dbname);
        
    	// Check connection
    	if ($conn->connect_error) {
    	  die("Connection failed: " . $conn-> connect_error);
    	}
    	//echo "Connected successfully";
		
		if (isset($_POST['login_user'])) {
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = $_POST['password'];
			// password_hash($_POST['password_1'], PASSWORD_DEFAULT);
			
			$sql = "SELECT * FROM users WHERE users_email='$email'";
			$result = mysqli_query($conn, $sql); 
			$row = mysqli_fetch_assoc($result);
			$dbStoredPASSWORD = $row['users_password']; // in db store hash value
			
			if (password_verify($password, $dbStoredPASSWORD) > 0) {
				$_SESSION['customer'] = $email;
				$_SESSION['customerid'] = $row['users_id'];
				header('location:indexbynina.php');
			} else {
				header('location:login.php?message=1');
				//$message = 'incorrect credentials';
			}
		}
?>