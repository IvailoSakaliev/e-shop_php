
<?php 
 	session_start();
 	$name = $price = "";
 	if (isset($_POST['filter'])) {
 			$name = $_POST['name'];
 			$price = $_POST['price'];
 			$_SESSION['parms']['name'] = $name;
 			$_SESSION['parms']['price'] = $price;
 		}	

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>siSystem</title>
	<?php 
		include('../blocks/boostrap.php')
	 ?>
	<style type="text/css">
		body
		{
			background-image: none !important;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/styleOtherPages.css">
</head>
<body>
	<div class="row" id="fixedMenu">
		<div class="container" id="main_nav">
			<div class="col-md-9">	
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="Products.php?id=11">Computers</a></li>
					<li><a href="Products.php?id=21">Laptops</a></li>
					<li><a href="Products.php?id=31">Tablets</a></li>
					<li><a href="Products.php?id=41">Phones</a></li>
					<li><a href="Products.php?id=5">About us</a></li>
					<li><a href="">Contacts</a></li>
				</ul>
			</div>
			<div class="col-md-3">	

				<?php 
				$name = $_SESSION['name'];
				$id = $_SESSION['LOGIN'];
					if ($id ==1)
					{
						

						echo '<ul>	
								<li><a href="../Admin/index.php">'.$name.'</a></li>
								<li><a href="../index.php">Sing out</a></li>
							</ul>';
					}
					else if ($id != 1 && $id != 0 ) {
						echo '<ul>	
								<li><a href="../Templates/User.php">'.$name.'</a></li>
								<li><a href="../index.php" >Sing out</a></li>
							</ul>';
					}
					else if($id == 0 || $id = "")
					{
						echo '<ul>	
								<li><a href="../Login/Login.php">Sing in</a></li>
								<li><a href="../index.php">Sing up</a></li>
							</ul>';
					}
				?>
			</div>
		</div>
	</div>
	<div class="row" id="pagetemplateHeader">
		<div class="tonirane">
			
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div class="col-md-3">
				<form method="post">
					<label>Name</label>
					<input type="text" class="form-control" name="name" value="<?php echo $name ?>">
					<label>Price to </label>
					<input type="text" class="form-control" name="price" value="<?php echo $price ?>">
					
					<input type="submit" value="Folter" name="filter">
				</form>
			</div>
			<div class="col-md-9" id="information">
				<?php 
					include("../blocks/Route.php");

					
				 ?>
				
			</div>
		</div>
	</div>
	<?php
		include('../blocks/footer.php');
	?>
	
</body>
</html>