<?php 
	$adress = $_SERVER['REQUEST_URI'] ;
	$id = substr($adress, -1);
	if ($id == 'p') {
		UserPage('ProfileInfo');
	}
	else
	{
		UserPage('Sells');
	}
	function UserPage($page)
	{
		return include ("".$page.".php");
	}

 ?>