<?php
include('session.php');

if(isset($_POST['btn_edit'])){
	$ch_username =  mysqli_real_escape_string($connection, $_POST['ch_username']);
	$ch_name =  mysqli_real_escape_string($connection, $_POST['ch_name']);
	$ch_email =  mysqli_real_escape_string($connection, $_POST['ch_email']);
	$ch_pass_old =  mysqli_real_escape_string($connection, $_POST['ch_pass_old']);
	$ch_pass =  mysqli_real_escape_string($connection, $_POST['ch_pass']);
	
	if ($pass_db == $ch_pass_old){
		mysqli_query($connection, "UPDATE `deadneon_myphpproject`.`login` SET `username` = '$ch_username', `email` = '$ch_email', `password` = '$ch_pass', `name` = '$ch_name' WHERE `login`.`id` = $id_db;");
		$msg = "Your data has been altered succesfully!";
	} else {
		$msg = "Your old password doesn't match.";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo ucfirst($name_db);?>'s Profile</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome <i><?php //echo ucfirst($login_session); ?></i></b>
<b id="logout"><a href="logout.php">Logout</a></b>
<br><br>
</div>

<!--<form method="post" action="upload_file.php" enctype="multipart/form-data">
	Select file: <input type="file" name="imenafail">
	<input type="submit" value="Upload">
</form>-->
<form action="" method="post">
<table style="width:20%">
<tr>
	<td>Name : </td>
	<td><?php echo $name_db;?></td>
</tr>
<tr>
	<td>Username : </td>
	<td><?php echo $username_db?></td>
</tr>
<tr>
	<td>E-mail : </td>
	<td><?php echo $email_db?></td>
</tr>
</table>
<br><br><br><br>
<b id="edit">Edit you data</b><br>
<table style="width:20%">
<tr>
	<td>Name : </td>
	<td><input id="ch_name" name="ch_name" type="text"></td>
</tr>
<tr>
	<td>Username : </td>
	<td><input id="ch_username" name="ch_username" type="text"></td>
</tr>
<tr>
	<td>E-mail : </td>
	<td><input id="ch_email" name="ch_email" type="email"></td>
</tr>
<tr>
	<td>Old Password : </td>
	<td><input id="ch_pass_old" name="ch_pass_old" type="password"></td>
</tr>
<tr>
	<td>New Password : </td>
	<td><input id="ch_pass" name="ch_pass" type="password"></td>
</tr>
</table>
<input id="btn_edit" name="btn_edit" type="submit" value="Change">
<br>
<span><?php echo $msg; ?></span>
</form>
</body>
</html>