<?php 
	include ("../databaseAccess/models/BaceModel.php");
	$comp = new BaceModel();
	$comp->GettAllComputers("tablets");
?>