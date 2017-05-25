<?php 
	$adress = $_SERVER['REQUEST_URI'] ;
	$id = substr($adress, -2);
	$table = array("computers","laptops","tablets","phone");
	switch ($id) {
		case '11':Products("ComputersView", $table[0]);
			break;
		case '12':Products("ComputersViewWithParameters" ,$table[0]);
			break;
		case '21':Products("ComputersView",$table[1]);
			break;
		case '22':Products("ComputersViewWithParameters",$table[1]);
			break;	
		case '31':Products("ComputersView", $table[2]);
			break;
		case '32':Products("ComputersViewWithParameters",$table[2]);
			break;	
		case '41':Products("ComputersView", $table[3]);
			break;
		case '42':Products("ComputersViewWithParameters",$table[3]);
			break;
		case '60':SingIn("registration");
			break;
		default:
			echo "incorect page link";
			break;
	}
	function Products($page, $table)
	{
		$_SESSION['table'] = $table;
		return include ('../blocks/Pages/'.$page.'.php');
	}
	function SingIn($page)
	{
		return include ('../Template/'.$page.'.php');
	}

?>