<?php 

	
	$correctAdd = "";
	$errorTitle = $errorPrice = $errorDesc = $errorImage = ""; 
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

		

		if ($isCorrectinfo) {
			include("../databaseAccess/models/Repository.php");
			$data = new Repository();
			$data->AddProduct($title, $price , $description , EnterImagePath());
			CopyImage();
			$correctAdd = "Success add product in database !!!";
		}
	}

	function EnterImagePath()
		{
			global $image , $errorImage;
			$target_dir = "info/Computers/img/";
			$target_image = basename($_FILES["img"]["name"]);
			echo $target_image;
			if ($target_image != "") {

				return  $target_image;
			}
			else
			{
				return  ""; 
			}

		}
	function CopyImage()
	{

		
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
	 <meta charset="utf-8">
 </head>
 <body>
 	<div class="row">

 		<div class="col-md-6" style="margin:15px;">
 		<?php 
 		if ($correctAdd != "") {
 		 	echo "<H5><p class='alert alert-success'> $correctAdd</h5>";
 		 } 
 		 ?>
 		<h2>Add Product</h2>
 			
 			<form method="post" enctype="multipart/form-data">
		 		<label>Title</label></br>
		 		<input type="text" name="title" class="form-control" ></br>
		 		<P><?php echo $errorTitle; ?></P>

		 		<label>Price</label></br>
		 		<input type="text" name="price" class="form-control" ></br>
		 		<P><?php echo $errorPrice; ?></P>

		 		<label>Description</label></br>
		 		<textarea cols="100" rows="10" name="desc" class="form-control" ></textarea></br>
		 		<P><?php echo $errorDesc; ?></P>

		 		<div class="avatar">
					<img src="../images/noIMG.png" width="100" height="100">
					<input style="display: inline-block;vertical-align:bottom;" type="file" name="img" ></br>
				</div>
		 		
		 		<input type="submit" style="margin-top: 10px;" name="add" value="Add" class="btn btn-success">
		 	</form>
 		</div>
 	</div>
 	
 </body>
 </html>