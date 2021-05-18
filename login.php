<?php
	include_once('server.php')
?>
 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>Login page</title>
		
		<link rel="stylesheet" href="register_style.css">
	</head>
	<body>
		
		<div class="header">
			<h2>Login</h2>
			<h5>Welcome to welovemama store!</h5>
		</div>

		<form class="logregform" action="loginProcess.php" method="post">
			<div class="input-group">
				<label for="username">Email</label>
				<input type="text" value="" class="form-control" name="email" placeholder="example@gmail.com" required>
			</div>
			<div class="input-group">
				<label for="password">Password</label>
				<input type="password" value="" class="form-control" name="password" placeholder="Enter your password" required>
			</div>
			<br>
			<div class="input-group">
				<button type="submit" name="login_user" class="btn">Login</button><br>			
			</div>
			<hr>
			<br>
			<p>Not a member yet? Click here to<a href="register.php"> Register</a></p>
		</form>
	</body>
</html>