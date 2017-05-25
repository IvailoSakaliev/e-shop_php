<?php 
	$table = $_SESSION['table'];
	include("../databaseAccess/models/GetModel.php");
	$data = new GetModel();
	$condiiton = $data->GetProductByParameters($table);
	echo $condiiton;
?>
