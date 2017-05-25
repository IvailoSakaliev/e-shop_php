	<?php 

	/**
	* 
	*/
	class AddModel
	{
		private $title;
		private $price;
		private $desc;
		private $image ;


		function __construct($title, $price , $desc , $image)
		{
			$this->title = $title;
			$this->price = $price;
			$this->desc = $desc;
			if ($image == "") {
				$this->image= "defaut.png";
			}
		}


		function AddProduct($table)
		{
			include ('../databaseAccess/Databace.php');
			$data = new Databace();
			$condition = "'".$this->title."',".$this->price.",'".$this->desc."','".$this->image."'";
			$data->Add($table, $condition);
		}

	}
 ?>