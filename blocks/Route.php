<?php 
	$adress = $_SERVER['REQUEST_URI'] ;
	$id = substr($adress, -2);
	$table = array("computers","laptops","tablets","phone");
	switch ($id) {
		case 'aa':Products("ComputersView", $table[0]);
			break;
		case 'ab':Products("ComputersViewWithParameters" ,$table[0]);
			break;
		case 'ba':Products("ComputersView",$table[1]);
			break;
		case 'bb':Products("ComputersViewWithParameters",$table[1]);
			break;	
		case 'ca':Products("ComputersView", $table[2]);
			break;
		case 'cb':Products("ComputersViewWithParameters",$table[2]);
			break;	
		case 'da':Products("ComputersView", $table[3]);
			break;
		case 'db':Products("ComputersViewWithParameters",$table[3]);
			break;
		case 'ex':SingIn("registration");
			break;
		case 'ao': About();
			break; 
		case 'co': Contact();
			break; 
		default:
			
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
	function About()
	{
		# code...
	}
	function Contact()
	{
		# code...
	}

?>