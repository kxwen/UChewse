<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link href= "stupid.css" type = "text/css" rel = "stylesheet"/>
		<meta charset = "UTF-8">
		<title>UChewse: Sign Up</title>
</head>
	
<body>		
		<center>
			<div class="inputBar">
				<h2>UChewse Sign Up</h2>
				Please fill out this form to register.
				<form action= UChewse_signup.php method="post">
					<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
					<br>
						<label>Username</label>
						<br><span class="help-block"><font color="red"></font></span>
						<input type="text" name="username" style = "font-family:Helvetica" class="form-control" value="<?php echo $username; ?>">
					</div>
					<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
					<br>
						<label>Email</label>
						<br><span class="help-block"><font color="red"></font></span>
						<input type="text" style = "font-family:Helvetica" name="email" class="form-control" value="<?php echo $email; ?>">
					</div>
					<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
					<br>
						<label>Password</label>
						<br><span class="help-block"><font color="red"></font></span>
						<input type="password" name="password_1" class="form-control" value="<?php echo $password; ?>">
					</div>
					<div class="form-group <?php echo (!empty($Cpassword_err)) ? 'has-error' : ''; ?>">
					<br>
						<label>Confirm Password</label>
						<br><span class="help-block"><font color="red"></font></span>
						<input type="password" name="password_2" class="form-control" value="<?php echo $Cpassword; ?>"><br><br>
					</div>
					
					<div class="form-group">
					<br>
						<input type="submit" class="btn blue rounded" name = "reg_user" value = "Submit" style = "font-family: Helvetica";>
					</div>
					<br>
					Already have an account? <a href="UChewse_login.php">Login here</a>.
				</form>
			</div>
		</center>
</body>


</html>
