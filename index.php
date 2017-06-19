<?php 
	session_start();
	$_SESSION['name'] = "";
	$_SESSION['LOGIN'] = "";
 	$_SESSION['number_of_order'] = rand();
	header("Location: http://localhost/PHP_Project/Welcome.php")
 ?>