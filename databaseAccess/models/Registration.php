<?php 			
	class Registration
	{
		private $fname;
		private $lname;
		private $email;
		private $user;
		private $pass;
		private $imagePath;

		function __construct($fistName, $lastName, $e_mail, $username, $password, $image)
		{
			$this->fname = $fistName;
			$this->lname = $lastName;
			$this->email = $e_mail;
			$this->user = $username;
			$this->pass = $password;
			$this->imagePath = $image;
		}

		function Registration()
		{
			include('../databaseAccess/Databace.php');
			$data = new Databace();
			$table = "login";
			$condition = "'".$this->user."','".$this->pass."','".$this->fname."','".$this->lname."','".$this->email."','".$this->imagePath."'";
			$data->Add($table, $condition);

		}
	}

 ?>