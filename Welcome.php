<?php 
	session_start();

 ?>
<html>
<head>
	<title>siSystem</title>
	<?php 
		include('blocks/boostraps.php')
	 ?>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="JS/menu.js"></script>
</head>
<body>
	<div class="row" id="fixedMenu">
		<div class="container" id="main_nav">
			<div class="col-md-9">	
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="Templates/Products.php?id=aa">Computers</a></li>
					<li><a href="Templates/Products.php?id=ba">Laptops</a></li>
					<li><a href="Templates/Products.php?id=ca">Tablets</a></li>
					<li><a href="Templates/Products.php?id=da">Phones</a></li>
					<!-- <li><a href="Templates/Products.php?id=5">About us</a></li>
					<li><a href="">Contacts</a></li> -->
				</ul>
			</div>
			<div class="col-md-3">	

				<?php 
				$name = $_SESSION['name'];
				$id = $_SESSION['LOGIN'];
					if ($id ==1)
					{
						echo '<ul>	
								<li><a href="Admin/index.php">'.$name.'</a></li>
								<li><a href="index.php">Sing out</a></li>
							</ul>';
					}
					else if ($id != 1 && $id != 0 ) {
						echo '<ul>	
								<li><a href="Templates/User.php?id=1"><img  src="images/cart.png" width="20px" height="20px"></a></li>
								<li><a href="Templates/User.php">'.$name.'</a></li>
								<li><a href="index.php" >Sing out</a></li>
							</ul>';
					}
					else if($id == 0 || $id = "")
					{
						echo '<ul>	
								<li><a href="Login/Login.php">Sing in</a></li>
								<li><a href="Templates/SingUp.php">Sing up</a></li>
							</ul>';
					}
				?>
			</div>
		</div>
	</div>
	<div class="row" id="headerImage">
		<div id="start"> 
			<h1>Welcome</h1>
			<h3>Click buttor to start the magic</h3>
			<button onclick="Start()">Click here</button>
		</div>
	</div>
	<div class="row" id="categories">
		<div class="container">
		<h3 style="margin-top: 30px;text-align: left"> Categories</h3>
		<hr>
			<div class="row">
				<div class="col-md-3">
					<div class="imageContainer">
						<img src="images/categoriesImages/computer.png">
					</div>
					<div class="infoContainer">
						<p>Можете да наметире най-добрите настолни компютри които влизат в употреба както за вашия бизнес така и за обикновенния потребител</p>
						<a href="Templates/Products.php?id=aa" class="btn btn-primary"> Got ot page</a>
					</div>

				</div>
				<div class="col-md-3">
					<div class="imageContainer">
						<img src="images/categoriesImages/laptop.png" style="margin-top: 35px;">
					</div>
					<div class="infoContainer">
						<p>Най-добрите здрави и производителни лапторпи на свет а от клас А</p>
						<a style="margin-top: 40px;" href="Templates/Products.php?id=ba" class="btn btn-primary"> Got ot page</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="imageContainer">
						<img src="images/categoriesImages/tablet.png" style="height: 120px;margin-top: 15px;">

					</div>
					<div class="infoContainer">
						<p>Таблети за всеки и за всичко което обичте и искате да е със вас навсякъде и по всяко време </p>
						<a style="margin-top: 20px;" href="Templates/Products.php?id=ca" class="btn btn-primary"> Got ot page</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="imageContainer">
						<img src="images/categoriesImages/phone.png">
					</div>
					<div class="infoContainer">
						<p>Най-добрите смартфони, удобни, проризводителни с красив външен вид, а отвъртре са производителни и още по красиви</p>
						<a href="Templates/Products.php?id=da" class="btn btn-primary"> Got ot page</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<div class="row" id="contact">
		<div class="container">
		<h3>Contact us</h3>
			<hr>
			<div class="col-md-6">
			<form>
				<label>Name</label></br>
				<input type="text" class="form-control" name="name"></br>

				<label>E-mail</label></br>
				<input type="text" class="form-control" name="email"></br>

				<label>Subject</label></br>
				<input type="text" class="form-control" name="subject"></br>

				<label>Message</label></br>
				<textarea rows="10" name="message">asdasdasda</textarea>
				<input type="sybmit" class="btn btn-success  sub" name="submitEmail" value="Send" >
			</form>
		</div>
		<div class="col-md-6">
			<img src="images/connection.png" width="100%" style="margin-top: 30px;">
		</div>
		</div>
	</div>
	<div class="row" id="footer">
		<div class="container">
			<footer>
				<div class="col-md-6">
					<P>Copyright: <a href="https://www.facebook.com/ivailo.sakaliev1">Ivailo Sakaliev</a></P>
				</div>
				<div class="col-md-6" id="socialIcons">
					<div id="socialIcons">
						<a href="https://www.facebook.com/ivailo.sakaliev1" target="_blank"><img src="images/socialIcons/facebook.png"></a>
						<a href="https://plus.google.com/105980430441220372509" target="_blank"><img src="images/socialIcons/google.png"></a>
						<a href="https://github.com/IvailoSakaliev" target="_blank"><img src="images/socialIcons/git.png"></a>
						<a href="https://www.youtube.com/channel/UCuArerbeJOobP3HM9lc_Bag" target="_blank"><img src="images/socialIcons/youtube.png"></a>
					</div>
				</div>
			</footer>
		</div>
	</div>
</body>
</html>