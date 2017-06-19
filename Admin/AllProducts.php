<?php 				
	$idAdd = $_SESSION['id'] + 1;
	$idDelete = $_SESSION['id'] + 3;
	$idUpdate = $_SESSION['id'] + 2;
	$table = $_SESSION['table'];
	if (isset($_POST['delete'])) {
		$idProduct = $_POST['id'];
		$_SESSION['product_id'] = $idProduct;
		header('Location: index.php?id='.$idDelete);
	}

	if (isset($_POST['update'])) {
		$_SESSION['product_id']= $_POST['id'];
		header('Location: index.php?id='.$idUpdate);
	}
	
 ?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/styleOtherPages.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="row">
		<a href="index.php?id=<?php echo $idAdd?>" style="font-size: 20px;margin: 27px; padding: 7px;color: white">Add</a>	
	</div>
	<div class="row">
		<div style="margin-left:20px; " id="information">
			<?php  
				include("../databaseAccess/models/Repository.php");
				$data = new Repository();
				$result = $data->GetComputerAdmin($table);	
				while ($row = mysqli_fetch_array($result)) {
				$title = $row['title'];
				$price = $row['price'];
				$image = $row['imagePath'];
				$id = $row['id'];

			?>
					<div class='product' style='border:0px;'>
						<form method="post">
						<input style="display: none" type="text" name="id" value="<?php echo  $id ?>">
						<img src="../info/Computers/img/defaut.png" width="100%" height="200px">
						<h5><?php echo $title; ?></h5>
						<h6><?php echo $price ?> lv.</h6>
						
						<input type="submit" name="update" value="Update" class="btn btn-primary" id="buttons_admin" style="margin-top:20px; margin-left:5px;">
						<input type="submit" name="delete" value="Delete"
						class="btn btn-danger" id="buttons_admin"  style="margin-top:20px;">
						</form>
					</div>
				<?php
				}
			?>	
		</div>
	</div>
</body>
</html>