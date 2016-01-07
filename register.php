<?php 
session_start();
if(isset($_SESSION['login_user'])!=""){
	header("Location: index.php");
}

$connection = mysqli_connect("localhost","root","","deadneon_myphpproject");
if($connection == 0){
    echo "Connection Failed";
}

/*function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}*/

if(isset($_POST['btn_register'])){
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$name = mysqli_real_escape_string($connection, $_POST['name']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);
	/*if ('password' == 'password2'){
		$password = mysql_real_escape_string($_POST['password']);
	} else {
		$error = "The password is different";
	}
	if(!empty($_POST['password']) && ($_POST['password'] == $_POST['password2'])) {
		$password = test_input($_POST['password']);
		$password2 = test_input($_POST['password2']);
		if (strlen($_POST['password']) <= '8'){
			$pass_error = "Your password must contain at least <b>8<b> characters";
		} elseif(!preg_match("#[0-9]+#", $password)){
			$pass_error = "Your password must contain at least <b>1<b> number"; 
		} elseif(!preg_match("#[A-Z]+#", $password)){
			$pass_error = "Your password must contain at least <b>1<b> capital letter";
		} elseif(!preg_match("#[a-z]+#", $password)){
			$pass_error = "Your password must contain at least <b>1<b> lowercase letter";
		}	
		
	}*/
	
	//mysql_query("INSERT INTO `deadneon_myphpproject`.`login` (`id`, `username`, `password`) VALUES (NULL, '$username', '$password')");
	//<!--<script>alert('succesfully registered');</script>-->
	//header("Location: index.php");
	//function register(){
		if(mysqli_query($connection, "INSERT INTO `deadneon_myphpproject`.`login` (`id`, `username`, `email`, `password`, `name`) VALUES (NULL, '$username', '$email','$password', '$name')")){
				mysqli_close($connection);
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
<!--<b id="Home"><a href="index.php">Home</a></b>-->
<br>
<center>
<div id="main">
<h1>Register Session</h1>
<div id="login">
<h2>Register your account.</h2>
<form action="" method="post">
<input id="username" name="username" placeholder="Type your username" type="text">
<br>
<input id="email" name="email" placeholder="Type your e-mail" type="email">
<br>
<input id="password" name="password" placeholder="Type your password" type="password">
<br>
<!--<input id="password2" name="password2" placeholder="Type your password again" type="password">
<span><?php //echo $pass_error; ?></span>
<br>-->
<input id="name" name="name" placeholder="Type your name" type="text">
<br>
<input id="btn_register" name="btn_register" type="submit" value="Register">
<b id="Home1"><a href="index.php">Already registered? Click Here.</a></b>
</form>
</div>
</div>
</center>
</body>
</html>