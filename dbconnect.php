<?php
$link = mysqli_connect("localhost","root","","deadneon_myphpproject");

if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//$mysqli = new mysqli("localhost","root","","deadneon_myphpproject");
?>