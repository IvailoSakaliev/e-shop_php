<?php 
	$table = $_SESSION['table'];
	include ("../databaseAccess/models/BaceModel.php");
	$comp = new BaceModel();
	$comp->GettAllComputers($table);
?>