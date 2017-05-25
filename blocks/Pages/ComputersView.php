<?php 
	$table = $_SESSION['table'];
	include("../databaseAccess/models/GetModel.php");
	$data = new GetModel();
	$condiiton = $data->GettAllComputers($table);
?>