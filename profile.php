<?php
include('session.php');


?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo ucfirst($login_session);?>'s Profile</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo ucfirst($login_session); ?></i></b>
<b id="logout"><a href="logout.php">Logout</a></b>
</div>
</body>
</html>