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
	<link rel="stylesheet" type="text/css" href="profileStyle.css">
</head>
<body>
	<div class="row" id="fixedMenu">
		<div class="container" id="main_nav">
			<div class="col-md-9">	
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="Products.php?id=1">Computers</a></li>
					<li><a href="Products.php?id=2">Laptops</a></li>
					<li><a href="Products.php?id=3">Tablets</a></li>
					<li><a href="Products.php?id=4">Phones</a></li>
					<li><a href="Products.php?id=5">About us</a></li>
					<li><a href="">Contacts</a></li>
				</ul>
			</div>
			<div class="col-md-3">	
				<ul>	
					<li><a href="../Login/Login.php">Sing in</a></li>
					<li><a href="">Sing up</a></li>
				</ul>
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
					<li><a href="">Профил</a></li>
					<li><a href="">Поръчки</a></li>
				</ul>
			</div>
			<div class="col-md-9">
				<?php
					include("../User/ProfileInfo.php");
				?>
			</div>
		</div>
	</div>
	<?php
		include('../blocks/footer.php');
	?>
	
</body>
</html>