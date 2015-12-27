<?php 
session_start();
if(isset($_SESSION['user'])!=""){
	header("Location: index.php");
}
require_once 'session.php';

if(isset($_POST['btn_register'])){
	$username = mysql_real_escape_string($_POST['username']);
	$password = md5(mysql_real_escape_string($_POST['password']));
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register Form</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<div id="main">
<h1>Register Session</h1>
<div id="login">
<h2>Register your account.</h2>
<form action="" method="post">
<input id="name" name="username" placeholder="Username" type="text">
<input id="password" name="password" placeholder="Password" type="password">
<input name="submit" type="submit" value="Register">
</form>
</div>
</div>
</center>
</body>
</html>