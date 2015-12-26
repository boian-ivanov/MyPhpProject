<?php
session_start();
$error='';
//$_SESSION['login_user']= $username;
//echo $_SESSION['login_user'];
if (isset($_POST['submit'])) {
	if(empty($_POST['username']) || empty($_POST['password'])){
		$error = "Username or Password is invalid!";
	} else {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$connection = mysql_connect("localhost", "root", "");
		
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		
		$db = mysql_select_db("myphpproject", $connection);
		
		$querry = mysql_query("SELECT * FROM login WHERE password='$password' AND username='$username'", $connection);
		$rows = mysql_num_rows($querry);
		if ($rows == 1){
			$_SESSION['login_user']=$username;
			header("location : profile.php");
		} else {
			$error = "Username or Password is invalid";
		}
		mysql_close($connection);
	}
}
?>