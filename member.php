<?php
session_start();

if($_SESSION["name"] == true)
{
	echo "Welcome"." ".$_SESSION["name"];
}
else
{
	header('location:login.php');
}
?>
<a href="logout.php">Logout</a>