<?php 
	$isDeleted= false;
	$table = $_SESSION['table'];
	
	if (isset($_POST['delete'])) {
		$isDeleted = true;
		include('../databaseAccess/models/Repository.php');
		$data = new Repository();
		$data->DeleteElement();
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="row" style="width: 93%; margin-left: 30px; margin-top:20px;">
		<?php 
			if ($isDeleted) {
				echo "<h5 class='alert alert-success'>The product has been deleted succsessful!</h5>";
			}


		 ?>
			 <h2 style="color:white">Are you shure ?</h2>
			 <form method="post" >
			 	<input type="submit" class="btn btn-danger" name="delete" value="Delete" style="padding: 5px 20px 5px 20px ">
			 </form>
	</div>
</body>
</html>