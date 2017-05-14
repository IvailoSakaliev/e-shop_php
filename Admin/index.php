<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
		include('../blocks/boostrap.php')
	 ?>
	 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="row">
		<div class="col-md-2" id="menu">
			<h2>SiSystem</h2>
			<hr>
			<ul>
				<li><a href="index.php">Dashboard</a></li>
				<li><a href="index.php?id=10">Computers</a></li>
				<li><a href="index.php?id=20">Laptops</a></li>
				<li><a href="index.php?id=30">Tablets</a></li>
				<li><a href="index.php?id=40">Phones</a></li>
				<hr>
				<li><a href="index.php?id=50">Go to site</a></li>
			</ul>
		</div>
		<div class="col-md-10">
			<div id="dashboardLine">
				<a href="../index.php">Exit</a>
			</div>
			
				<?php 
					include("Route.php");
				 ?>

			
		</div>
	</div>
</body>
</html>