<?php 

	$_SESSION['table'] = "";
	$adress = $_SERVER['REQUEST_URI'] ;
	$id = substr($adress, -2);
	$_SESSION['id'] = $id;
	$tables = array("computers","laptops","tablets","phone");
	switch ($id) {
		case '10':Page('AllProducts' , $tables[0]);break;
		case '11':Page('AddProduct',$tables[0]);break;
		case '12':Page('UpdateProduct',$tables[0])	;break;
		case '13':Page('DeleteProduct',$tables[0]);break;
		case '20':Page('AllProducts',$tables[1]);break;
		case '21':Page('AddProduct',$tables[1]);break;
		case '22':Page('UpdateProduct',$tables[1]);break;
		case '23':Page('DeleteProduct',$tables[1]);break;
		case '30':Page('AllProducts',$tables[2]);break;
		case '31':Page('AddProduct',$tables[2]);break;
		case '32':Page('UpdateProduct',$tables[2]);break;
		case '33':Page('DeleteProduct',$tables[2]);break;
		case '40':Page('AllProducts',$tables[3]);break;
		case '41':Page('AddProduct',$tables[3]);break;
		case '42':Page('UpdateProduct',$tables[3]);break;
		case '43':Page('DeleteProduct',$tables[3]);break;
		case '60':LogOut();break;
		case '50':Index() ;break;

			
		default:
			Page('Home', "");
			break;
	}
	function Page($page,$table)
	{
		$_SESSION['table'] = $table;
		return include ($page.'.php');
	}
	
	function LogOut()
	{
		include('../databaseAccess/models/Login.php');
		$log = new Login();
		
		header('Location: http://localhost/PHP_Project/Welcome.php');
		$log->LoggOut();
	}
	function Index()
	{
		header('Location: http://localhost/PHP_Project/Welcome.php');
	}


 ?>