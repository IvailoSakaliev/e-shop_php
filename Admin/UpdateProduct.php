<?php 
	$table = $_SESSION['table'];
	$id = $_SESSION['product_id'];
	$title = $price = $desc = $image = "" ;
	
	GetElements($table, $id)
	DeleteProsuct($id);

	if (isset($_POST['update'])) {
		include("../databaseAccess/models/AddModel.php");
		$data = new AddModel($title, $price , $description , $image);
		$data->AddProduct($table);
	}

	function DeleteProsuct($id)
	{
		include('../databaseAccess/Databace.php');
		$data = new Databace();
		$data->Delete($table, $id);
		$_SESSION['product_id'] = 0;
	}
	function GetElements( $table,$id);
	{
		global $title , $price, $desc , $image;
		include('../databaseAccess.models/GetModel.php');
		$data = new GegModel();
		$result  = $data->GetupdatetingProduct($table, $id);
		while ($row = mysqli_fetch_array($result)) {
			$title = $row['title'];
			$price = $row['price'];
			$desc = $row['descriptionPath'];
			$image = $row['imagepath']

		}

	}
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="row">
 		<div class="col-md-6" style="margin:15px;">
 		<h2>Update Product</h2>
 			<form method="post" enctype="multipart/form-data">
		 		<label>Title</label></br>
		 		<input type="text" name="titel" class="form-control" value="<?php echo $title;?>"></br>

		 		<label>Price</label></br>
		 		<input type="text" name="price" class="form-control" value="<?php echo $price;?>"></br>
		 		
		 		<label>Description</label></br>
		 		<textarea cols="100" rows="10" name="desc" class="form-control" value="<?php echo $desc;?>"></textarea></br>

		 		<div class="avatar">
					<img src="../images/noIMG.png" width="100" height="100">
					<input style="display: inline-block;vertical-align:bottom;" type="file" name="imagePath" value="<?php echo $image;?>"></br>
				</div>
		 		
		 		<input type="submit" style="margin-top: 10px;" name="update" value="Update" class="btn btn-success">
		 	</form>
 		</div>
 	</div>
</body>
</html>