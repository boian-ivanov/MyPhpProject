<?php
if(!mysql_connect("localhost","root",""))
{
     die('connection problem --> '.mysql_error());
}
if(!mysql_select_db("deadneon_myphpproject"))
{
     die('database selection problem --> '.mysql_error());
}
?>