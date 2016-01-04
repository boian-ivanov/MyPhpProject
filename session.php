<?php
$connection = mysql_connect("localhost", "root", "");

$db = mysql_select_db("deadneon_myphpproject", $connection);
session_start();

$user_check = $_SESSION['login_user'];
$ses_sql = mysql_query("SELECT username FROM login WHERE username='$user_check'", $connection);
$name_sql = mysql_query("SELECT name FROM login WHERE username='$user_check'", $connection);

//$row = mysql_fetch_assoc($ses_sql);
$row = mysql_fetch_assoc($name_sql);
//$login_session = $row['username'];
$login_session = $row['name'];
if(!isset($login_session)){
	mysql_close($connection);
	header('Location: index.php');
}
?>