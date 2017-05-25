<?php 



	class GetModel
	{
		
		
		function __construct()
		{
			
		}

		function GettAllComputers($table)
		{
			include_once ('../databaseAccess/Databace.php');
			$data = new Databace();
			$result = $data->GetAll($table);
			while ($row = mysqli_fetch_array($result)) {
				echo "
					<div class='product'>
						<img src='../info/Computers/img/$row[imagePath]' width='100%'' height='200px'>
						<h5>$row[title]</h5>
						<h6>$row[price]</h6>
						<button>Click me </button>
					</div>
				";

			}
			
		}

		function GetProductByParameters($table)
		{
			$name = $_SESSION['parms']['name'];
			$price = $_SESSION['parms']['price'];
			include_once ('../databaseAccess/Databace.php');
			$data = new Databace();
			$condition = "`title` = '$name' `price`= $price " ;
			$result = $data->GetByParameters($table, $condition);
			while ($row = mysqli_fetch_array($result)) {
				echo "
					<div class='product'>
						<img src='../info/Computers/img/$row[imagePath]' width='100%'' height='200px'>
						<h5>$row[title]</h5>
						<h6>$row[price]</h6>
						<button>Click me </button>
					</div>
				";

			}
		}

		function GetComputerAdmin($table)
		{
			include_once ('../databaseAccess/Databace.php');
			$data = new Databace();
			$result = $data->GetAll($table);
			return $result;
		}


		

	}
?>
