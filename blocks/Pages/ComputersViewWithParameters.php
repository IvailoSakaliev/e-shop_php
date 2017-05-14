<?php 
	$table = $_SESSION['table'];
	include ("../databaseAccess/models/BaceModel.php");
	$comp = new BaceModel();
	$condiiton = $comp->GetProductByParameters($table);
	echo $condiiton;
?>