<?php
	include_once('server.php')
?>
 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>Register page</title>
		
		<link rel="stylesheet" href="register_style.css">
	</head>
	<body>
		<div class="header">
			<h2>Register an account</h2>
		</div>
		
		<form class="logregform" action="registerProcess.php" method="post">
			<div class="input-group">
				<label for="email">E-mail</label>
				<input type="email" value="" class="form-control" placeholder="example@gmail.com" name="email" required>
			</div>
			<div class="input-group">
				<label for="password_1">Password</label>
				<input type="password" id="password" onkeyup='check();' value="" class="form-control" placeholder="Create password" name="password_1" required>
			</div>
			<div class="input-group">
				<label for="password_2">Confirm password</label>
				<input type="password" onkeyup='check();'id="confirm_password"  value="" class="form-control" placeholder="Confirm password" name="password_2" required>	
				<span id='message'></span>			
			</div>
			<br>
			<div class="input-group">
				<button type="submit"  name="reg_user" class="btn">Register</button><br>			
			</div>
			<hr>
			<br>
			<p>Already have an account? <a href="login.php">Sign in</a></p>
		</form>
		<script src="script.js"></script>
	</body>
</html>