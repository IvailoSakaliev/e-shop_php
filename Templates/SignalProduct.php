
<?php 
 	session_start();
 	$succsessAddToCard = false;
 	$adress = $_SERVER['REQUEST_URI'];
	$_SESSION['product_id'] = substr($adress,44, strlen($adress) );
	$title ="";
	$price = "";
	include ("../databaseAccess/models/Repository.php");
	$data = new Repository();
	$result = $data->GetElement();
	while ($row = mysqli_fetch_array($result)) {
				$title = $row['title'];
				$price = $row['price'];
				$desc = $row['descriptionPath'];
				$image = $row['imagePath'];
	 		}
 	if (isset($_POST['addToCard'])) {
 		$data->AddOrder('orders', $_SESSION['number_of_order'], $_SESSION['LOGIN'],$title, $price );
 	}
 ?>
<html>
<head>
	<title>siSystem</title>
	<?php 
		include('../blocks/boostrap.php');
	 ?>
	<style type="text/css">
		body
		{
			background-image: none !important;
		}
		#fixedMenu
		{
			background-color: rgba(0,0,0,0.4) !important;
		}
	</style>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/styleOtherPages.css">
	<script type="text/javascript" src="../JS/menu.js"></script>
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
								<li><a href="../Templates/User.php">'.$name.'</a></li>
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
			
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div class="col-md-9" id="information">
			<?php 
				if ($succsessAddToCard) {
					echo '<h5 class="alert alert-success">Success add product in card !!!</h5>';
				}

			 ?>
			
				<img src="../info/Computers/img/defaut.png" width="500px" '="" height="500px">
				<h3><?php echo $title ; ?></h3>
				<p><?php echo $desc ; ?></p>
				<h2 style="color:blue"><?php echo $price; ?> лв.</h2>
				<form name="addInCard" method="post">
					<input class="btn btn-success" type="submit" name="addToCard" value="Sell">
				</form>
			</div>
			<div class="col-md-3" id="information">
				<h3>Контакти при нередности</h3>
				<hr>
				-
				-
				-
			</div>
		</div>
	</div>
	<?php
		include('../blocks/footer.php');
	?>
	
</body>
</html>