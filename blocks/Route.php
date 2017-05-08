<?php 
	$adress = $_SERVER['REQUEST_URI'] ;
	$id = substr($adress, -1);
	switch ($id) {
		case '1':Products("ComputersView");
			break;
		case '2':Products("LaptopsView");
			break;
		case '3':Products("TabletsView");
			break;
		case '4':Products("PhoneView");
			break;
		default:
			echo "incorect page link";
			break;
	}
	function Products($page)
	{
		return include ('../blocks/Pages/'.$page.'.php');
	}
	function SingIn($value='')
	{
		# code...
	}

?>