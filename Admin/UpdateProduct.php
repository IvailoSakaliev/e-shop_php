
<?php 
	$correctAdd = "";
	$title = $price = $desc = $image = "" ;
	include ("../databaseAccess/models/Repository.php");
	$data = new Repository();
	$result = $data->GetElement();
	while ($row = mysqli_fetch_array($result)) {
				$title = $row['title'];
				$price = $row['price'];
				$desc = $row['descriptionPath'];
				$image = $row['imagePath'];
	 		}
	$data->DeleteElement();

	if (isset($_POST['update'])) {
		
		$data->AddProduct($_POST['title'], $_POST['price'], $_POST['desc'], EnterImagePath());
		$correctAdd = "Success update product in database !!!";
	}
	function EnterImagePath()
		{
			
			$target_dir = "info/Computers/img/";
			$target_image = basename($_FILES["img"]["name"]);
			if ($target_image != "") {
				return $target_dir . $target_image;
			}
			else
			{
				return ""; 
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
 		<?php 
 		if ($correctAdd != "" ) {
 		 	echo "<H5><p class='alert alert-success'>$correctAdd</h5>";
 		 } 
 		 ?>
 		<h2>Update Product</h2>
 			<form method="post" enctype="multipart/form-data">
		 		<label>Title</label></br>
		 		<input type="text" name="title" class="form-control" value="<?php echo $title;?>"></br>

		 		<label>Price</label></br>
		 		<input type="text" name="price" class="form-control" value="<?php echo $price;?>"></br>
		 		
		 		<label>Description</label></br>
		 		<textarea cols="100" rows="10" name="desc" class="form-control" ><?php echo $desc;?></textarea></br>

		 		<div class="avatar">
					<img src="../images/noIMG.png" width="100" height="100">
					<input style="display: inline-block;vertical-align:bottom;" type="file" name="img" value="<?php echo $image;?>"></br>
				</div>
		 		
		 		<input type="submit" style="margin-top: 10px;" name="update" value="Update" class="btn btn-success">
		 	</form>
 		</div>
 	</div>
</body>
</html>
Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Privacy Security Status Help