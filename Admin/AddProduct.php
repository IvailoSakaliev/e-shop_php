<?php 

	$table = $_SESSION['table'];
	if (isset($_POST['add'])) {	
		$title = $price = $description = $image = "";
		$errorTitle = $errorPrice = $errorDesc = $errorImage = ""; 
		$isCorrectinfo = true;
		if (empty($_POST['title'])) {
			$errorTitle = "Задължително поле";
			$isCorrectinfo = false;
		}
		else
		{
			$title = $_POST['title'];
		}

		if (empty($_POST['price'])) {
			$errorPrice = "Задължително поле";
			$isCorrectinfo = false;
		}
		else
		{
			$price = $_POST['price'];
		}

		if (empty($_POST['desc'])) {
			$errorDesc = "Задължително поле";
			$isCorrectinfo = false;
		}
		else
		{
			$description = $_POST['desc'];
		}

		EnterImagePath();

		if ($isCorrectinfo) {
			include("../databaseAccess/models/AddModel.php");
			$data = new AddModel($title, $price , $description , $image);
			$data->AddProduct($table);
		}
	}

	function EnterImagePath()
		{
			global $image , $errorImage;
			$target_dir = "info/avarat/";
			$target_image = basename($_FILES["img"]["name"]);
			if ($target_image == "") {
				$errorImage = "Задължително поле";
				$isCorrectinfo = false;

			}
			else
			{
				$image = $target_dir . $target_image;
			}	
		}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 	</title>
 	<?php 
		include('../blocks/boostrap.php')
	 ?>
	 <link rel="stylesheet" type="text/css" href="css/style.css">
	 <link rel="stylesheet" type="text/css" href="../css/styleOtherPages.css">
 </head>
 <body>
 	<div class="row">

 		<div class="col-md-6" style="margin:15px;">
 		<h2>Add Product</h2>
 			
 			<form method="post" enctype="multipart/form-data">
		 		<label>Title</label></br>
		 		<input type="text" name="title" class="form-control"></br>

		 		<label>Price</label></br>
		 		<input type="text" name="price" class="form-control"></br>
		 		
		 		<label>Description</label></br>
		 		<textarea cols="100" rows="10" name="desc" class="form-control"></textarea></br>

		 		<div class="avatar">
					<img src="../images/noIMG.png" width="100" height="100">
					<input style="display: inline-block;vertical-align:bottom;" type="file" name="img"></br>
				</div>
		 		
		 		<input type="submit" style="margin-top: 10px;" name="add" value="Add" class="btn btn-success">
		 	</form>
 		</div>
 	</div>
 	
 </body>
 </html>