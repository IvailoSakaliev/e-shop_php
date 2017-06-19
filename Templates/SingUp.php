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
					<li><a href="../Welcome.php">Home</a></li>
					<li><a href="Products.php?id=aa">Computers</a></li>
					<li><a href="Products.php?id=ba">Laptops</a></li>
					<li><a href="Products.php?id=ca">Tablets</a></li>
					<li><a href="Products.php?id=da">Phones</a></li>
					<!-- <li><a href="Page.php?id=ao">About us</a></li>
					<li><a href="Page.php?id =co">Contacts</a></li> -->
				</ul>
			</div>
			
		</div>
	</div>
	<div class="row" id="pagetemplateHeader">
		<div class="tonirane">
			
		</div>
	</div>
	<div class="row">
		<div class="container">
			
				<?php 
					include("../blocks/registration.php");
				 ?>
				
			
		</div>
	</div>
	<?php
		include('../blocks/footer.php');
	?>
	
</body>
</html>