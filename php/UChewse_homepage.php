<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>UChewse</title>
		<link href= "stupid.css" type = "text/css" rel = "stylesheet"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<style>
			div.logoCenter
			{
				text-align:center;
			}
			div.buttonCenter
			{
				margin-top:3%;
				text-align:center;
			}
			#avatar
			{
				background-image: url(<?php echo ($image_name);?>);
				width: 300px;
				height: 300px;
				background-size: cover;
				background-position: center;
				border-radius:50%;
			}
		</style>
	</head>
	<body>
		<div class = "container">
			<center><h2>NO U Chewse :))</h2></center>
			<br>
			<center>
			<div id="avatar"></div>
			</center>
			<br>
			<div class = "logoCenter">
				<a href="userprofile_extended.php" class="btn large pink rounded"><tt>My Profile<i class="material-icons">person</i></tt></a> 	
			</div>
				<div class = "buttonCenter">
					<div class = "container">
						<a href="friends.php" class="btn large blue rounded"><tt>Friends&#128214;</tt></a> 
						<a href = "matches.php" class="btn large blue rounded"><tt>YoloSnipeThatShit&#x1F50D;</tt></a> 	
						<a href = "stageStrike.html" class="btn large blue rounded"><tt>Stage Strike System&#9993;</tt></a>
						<a href="quiz_home.php" class="btn large blue rounded"><tt>TBD&#10004 </tt></a>
						<a href="logout.php" class="btn large blue rounded"><tt>Logout <i class="fa fa-sign-out"></i></tt></a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
