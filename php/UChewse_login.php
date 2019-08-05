<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>UChewse Login Page</title>
  <link rel="stylesheet" type="text/css" href="stupid.css">
</head>
<body>
<center>
  <div class="header">
  	<h2>UChewse Login</h2>
  </div>	 
  <form method="post" action="UChewse_login.php">
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn blue rounded" name="login_user">Login</button>
  	</div>
  	<br>
  		Not yet a member? <a href="UChewse_signup.php">Sign up</a>
  </form>
</center>
</body>
</html>


