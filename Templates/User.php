<!DOCTYPE html>
<html>
<head>
	<title>siSystem</title>
	<?php 
		session_start();
		$id = $_SESSION['LOGIN'];
		$table = $_SESSION['table'];
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
	<link rel="stylesheet" type="text/css" href="profileStyle.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="row" id="fixedMenu">
		<div class="container" id="main_nav">
			<div class="col-md-9">	
				<ul>
					<li><a href="../Welcome.php">Home</a></li>
					<li><a href="Products.php?id=aa">Computers</a></li>
					<li><a href="Products.php?id=ba">Laptops</a></li>
					<li><a href="Products.php?id=ca">Tablets</a></li>
					<li><a href="Products.php?id=da">Phones</a></li>
					<!-- <li><a href="Page.php?id=ao">About us</a></li>
					<li><a href="Page.php?id =co">Contacts</a></li> -->
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
								<li><a href="User.php">'.$name.'</a></li>
								<li><a href="../index.php" >Sing out</a></li>
							</ul>';
					}
					else if($id == 0 || $id = "")
					{
						echo '<ul>	
								<li><a href="../Login/Login.php">Sing in</a></li>
								<li><a href="SingUp.php">Sing up</a></li>
							</ul>';
					}
				?>
			</div>
		</div>
	</div>
	<div class="row" id="pagetemplateHeader">
		<div class="tonirane">
			<!-- header image -->
		</div>
	</div>
	<div class="row">
		<div class="container">		
			<div class="col-md-3">
				<ul>
					<li><a href="User.php">Профил</a></li>
					<li><a href="User.php?id=1">Поръчки</a></li>
				</ul>
			</div>
			<div class="col-md-9">
				<?php
					include("../User/UserRoute.php");
				?>
			</div>
		</div>
	</div>
	<?php
		include('../blocks/footer.php');
	?>
	
</body>
</html>