
<?php 
				$name = $_SESSION['name'];
				$id = $_SESSION['LOGIN'];
					if ($id ==1)
					{
						

						$menu =  '<ul>	
								<li><a href="../Admin/index.php">'.$name.'</a></li>
								<li><a href="../index.php">Sing out</a></li>
							</ul>';
					}
					else if ($id != 1 && $id != 0 ) {
						$menu =  '<ul>	
								<li><a href="../Templates/User.php">'.$name.'</a></li>
								<li><a href="../index.php" >Sing out</a></li>
							</ul>';
					}
					else if($id == 0 || $id = "")
					{
						$menu =  '<ul>	
								<li><a href="../Login/Login.php">Sing in</a></li>
								<li><a href="SingUp.php">Sing up</a></li>
							</ul>';
					}
				?>
		<?php echo '<div class="container" id="main_nav">
			<div class="col-md-9">	
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="Products.php?id=aa">Computers</a></li>
					<li><a href="Products.php?id=ba">Laptops</a></li>
					<li><a href="Products.php?id=ca">Tablets</a></li>
					<li><a href="Products.php?id=da">Phones</a></li>
					<!-- <li><a href="Page.php?id=ao">About us</a></li>
					<li><a href="Page.php?id =co">Contacts</a></li> -->
				</ul>
			</div>
			<div class="col-md-3">	
			<?php echo $menu; ?>
				$name
			</div>
		</div>' ?>

 ?>
