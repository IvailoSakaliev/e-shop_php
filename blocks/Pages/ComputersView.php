<?php 
	include("../databaseAccess/models/Repository.php");
	$data = new Repository();
	$result = $data->GettAllComputers();
?>