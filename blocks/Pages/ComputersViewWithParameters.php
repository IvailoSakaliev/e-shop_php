<?php 
	include("../databaseAccess/models/Repository.php");
	$data = new Repository();
	$condiiton = $data->GetProductByParameters();
	echo $condiiton;
?>
