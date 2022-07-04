<?php 
	session_start();
	if(!isset($_SESSION['email']))
		header("Location: login.php");


?>
<a href="logout.php"> Click here to logout </a>