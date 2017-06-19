	<?php 

	/**
	* 
	*/
	include_once ('../databaseAccess/Databace.php');
	class Repository
	{
		private $data;
		private $id;
		private $table;


		function __construct()
		{
			$this->data = new Databace();
			$this->id = $_SESSION['product_id'];
			$this->table = $_SESSION['table'];
			
		}
		
		function AddProduct($title, $price , $desc , $image)
		{
			if ($image == "") {
				$image ="defaut.png" ;
			}
			$condition = "'".$title."',".$price.",'".$desc."','".$image."'";
			$this->data->Add($this->table, $condition);
		}
		function AddOrder($table , $number, $user , $title, $price )
		{
			$condition = "'".$number."',".$user.",'".$title."'," .$price."" ;
			$this->data->Add($table, $condition);
		}

		function GettAllComputers()
		{
			
			$result = $this->data->GetAll($this->table);
			while ($row = mysqli_fetch_array($result)) {
				echo "
					<div class='product'>
						<img src='../info/Computers/img/$row[imagePath]' width='100%'' height='200px'>
						<h5>$row[title]</h5>
						<h6>$row[price]</h6>
						<button onClick='Product($row[id])' >Click me </button>
					</div>
				";
			}
		}

		function GetProductByParameters()
		{
			$name = $_SESSION['parms']['name'];
			$price = $_SESSION['parms']['price'];
			$condition = "`title` = '$name' `price`= $price " ;
			$result = $this->data->GetByParameters($this->table, $condition);
			while ($row = mysqli_fetch_array($result)) {
				echo "
					<div class='product'>
						<img src='../info/Computers/img/$row[imagePath]' width='100%'' height='200px'>
						<h5>$row[title]</h5>
						<h6>$row[price]</h6>
						<button onClick='Product($row[id])' >Click me </button>
					</div>
				";
			}
		}

		function GetComputerAdmin()
		{
			$result = $this->data->GetAll($this->table);
			return $result;
		}

		function GetElement()
		{
			$condition = "`id` = '".$this->id." ' " ;
			$result = $this->data->GetByParameters($this->table,$condition );
			return $result;
		}

		

		function DeleteElement()
		{
			$this->data->Delete($this->table , $this->id);
		}
		
		function Getorders($ids)
		{
			$condition = "`user_id` = ".$ids ;
			$result = $this->data->GetByParameters('orders',$condition );
			while ($row = mysqli_fetch_array($result)) {
				echo "
					<tr>
						<td>$row[productName]</td>
						<td>$row[ProductPrice]</td>
						<td>$row[nuber_order]</td>
					</tr>
				";
			}
			
		}
	}
 ?>