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
		
		$connection = mysqli_connect("localhost", "root", "","deadneon_myphpproject");
		
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);
		
		//$db = mysqli_select_db("deadneon_myphpproject", $connection);
		
		$querry = mysqli_query($connection, "SELECT * FROM login WHERE password='$password' AND username='$username'");
		$rows = mysqli_num_rows($querry);
		if ($rows == 1){
			$_SESSION['login_user']=$username;
			//mysqli_free_result($rows);
			header("location : profile.php");
		} else {
			$error = "Username or Password is invalid";
		}
		mysqli_close($connection);
	}
}
?>