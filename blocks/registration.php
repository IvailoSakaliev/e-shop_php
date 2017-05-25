<?php 
	session_start();
	$fname= $lname = $email = $user = $pass =$cpass= $target_file = "";
	$errorFname = $errorLname = $errorEmail = $errorUser = $errorPass=$errorCpass = $errorImage = "";
	$isCorectInfromation = true;
	if (isset($_POST['registration'])) {
		// start validation
		

		
		if (!empty($_POST['fname'])) {
			$fname = test_input($_POST['fname']);
			if (strlen($fname) > 2) {
					if (!preg_match("/^[a-zA-Z]*$/",$fname)) 
					{
						$errorFname = "Невалидно име. ";	
						$isCorectInfromation = false;
					}
				}
				else
				{
					$errorFname = "Недостатъчни символи";
					$isCorectInfromation = false;
				}
			}
			else
			{
				$errorFname = "полето е задължително";
				$isCorectInfromation = false;
			}

		if (!empty($_POST['lname'])) {
			$lname = test_input($_POST['lname']);
			if (strlen($lname) > 3) {
					if (!preg_match("/^[a-zA-Z]*$/",$lname)) 
					{
						$errorLname = "Невалиднa фамилия. ";	
						$isCorectInfromation = false;
					}
				}
				else
				{
					$errorLname = "Недостатъчни символи";
					$isCorectInfromation = false;
				}
			}
			else
			{
				$errorLname = "полето е задължително";
				$isCorectInfromation = false;
			}

		if (!empty($_POST['email'])) {
			$email = test_input($_POST['email']);
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
					{
						$errorEmail = "Невалиден е-майл";	
						$isCorectInfromation = false;
					}
			}
			else
			{
				$errorEmail = "полето е задължително";
				$isCorectInfromation = false;
			}

		if (!empty($_POST['user'])) {
			$user = test_input($_POST['user']);
			if (strlen($user) > 6) {
					if (!preg_match("/^[a-zA-Z0-9]*$/",$user)) 
					{
						$errorUser = "Невалидно потребителско име. ";	
						$isCorectInfromation = false;
					}
				}
				else
				{
					$errorUser = "Недостатъчни символи";
					$isCorectInfromation = false;
				}
			}
			else
			{
				$errorUser = "полето е задължително";
				$isCorectInfromation = false;
			}

		if (!empty($_POST['pass'])) {
			$pass = test_input($_POST['pass']);
			if (strlen($pass) > 5) {
					if (!preg_match("/^[a-zA-Z0-9]*$/",$pass)) 
					{
						$errorPass = "Невалидна парола. ";	
						$isCorectInfromation = false;
					}
				}
				else
				{
					$errorPass = "Недостатъчни символи";
					$isCorectInfromation = false;
				}
			}
			else
			{
				$errorPass = "полето е задължително";
				$isCorectInfromation = false;
			}

		if (!empty($_POST['cpass'])) {
			$cpass = test_input($_POST['pass']);
				if ($pass != $cpass) {
					$errorCpass = "Паролите несъвпадат!";
					$isCorectInfromation = false;
				}
			}
			else
			{
				$errorCpass = "полето е задължително";
				$isCorectInfromation = false;
			}

		 

		$target_dir = "info/avarat/";
		$target_image = basename($_FILES["img"]["name"]);
		if ($target_image == "") {
			$target_image ="";
		}
		else
		{
			$target_file = $target_dir . $target_image;
		}
		

		if ($isCorectInfromation) {
			include("../databaseAccess/models/Registration.php");
			$data = new Registration($fname, $lname , $email , $user , $pass, $target_file);
			$data->Registration();
		}
			

		// edn of validation
	}

	function test_input($data) 
	{
		$data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}

	echo '';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 </head>
 <body>
 	<h3>Registration</h3>
			<hr>
				<div class="col-md-6">
					<form method="post" id="reg" enctype="multipart/form-data">
						<label>First name</label>
						<input type="text" class="form-control" name="fname" value="<?php  echo $fname?>">
						<P style="color:red" ><?php echo $errorFname;?></p>
						
						<label>Last name</label>
						<input type="text" class="form-control" name="lname" value="<?php  echo $lname ?>">
						<P style="color:red"><?php echo $errorLname;?></p>
						
						<label>E-mail</label>
						<input type="email" class="form-control" name="email" value="<?php  echo $email ?>">
						<P style="color:red"><?php echo $errorEmail;?></p>
						<label>Username</label>
						<input type="text" class="form-control" name="user" value="<?php  echo $user ?>">
						<P style="color:red"><?php echo $errorUser;?></p>
						<label>Password</label>
						<input type="password" class="form-control" name="pass" >
						<P style="color:red"><?php echo $errorPass;?></p>
						<label>Confirm password</label>
						<input type="password" class="form-control" name="cpass" >
						<P style="color:red"><?php echo $errorCpass;?></p>
						<div class="avatar">
							<img src="../images/noIMG.png" width="100" height="100">
							<input style="display: inline-block;vertical-align:bottom;" type="file" name="img" value="$target_file"></br>

						</div>
						<P style="color:red"><?php echo $errorImage?></p>

						<input type="submit" class="btn btn-success" value="Registration" name="registration">
					</form>
				</div>
				<div class="col-md-6">
					information for registration
				</div>
 </body>
 </html>