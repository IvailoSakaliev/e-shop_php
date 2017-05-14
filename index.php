<?php 
	session_start();
	$_SESSION['name'] = "";
	$_SESSION['LOGIN'] = "";
	header("Location: http://localhost/PHP_Project/Welcome.php")
 ?>