<?php 
session_start();
if(isset($_SESSION['login_user'])!=""){
	header("Location: index.php");
}
require_once 'dbconnect.php';

if(isset($_POST['btn_register'])){
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	
	if(mysql_query("INSERT INTO 'myphpproject'.'login'('id','username','password') VALUES ('2','$username','$passsword')")){
		?>
			<script>alert('succesfully registered');</script>
			<?php
			header("Location: index.php");
	} else {
		?>
			<script>alert('an error occured while registering you');</script>
			<?php
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register Form</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<b id="Home"><a href="index.php">Home</a></b>
<br>
<center>
<div id="main">
<h1>Register Session</h1>
<div id="login">
<h2>Register your account.</h2>
<form action="" method="post">
<input id="name" name="username" placeholder="Username" type="text">
<input id="password" name="password" placeholder="Password" type="password">
<input id="btn_register" name="btn_register" type="submit" value="Register">
</form>
</div>
</div>
</center>
</body>
</html>