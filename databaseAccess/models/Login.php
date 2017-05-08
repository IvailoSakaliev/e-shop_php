<?php
session_start();
	class Login
	{
		private $username;
		private $password;
		
		function __construct($user, $pass)
		{
			$this->username = $user;
			$this->password = $pass;
		}
		// function __construct()
		// {
			
		// }

		
		function LoginInSystem()
		{
			include('../databaseAccess/Databace.php');
			$data = new Databace();
			$table = "login";
			$condition = "username = '".$this->username ."' && password = '".$this->password."'";
			$result = 	$data->GetByParameters($table, $condition);
			while ($row = mysqli_fetch_assoc($result)) {
				if ($this->username == $row['username']  && $this->password == $row['password']) {
					$_SESSION['LOGIN'] = $row['id'];
					if ($row['id'] == 1) {
						$_SESSION['name'] = 'admin'; 
					}
					else
					{
						$_SESSION['name'] = $row['firstName']; 
					}
					header('Location: ../index.php');
				}
				else
				{
					return "incorect user";
				}

			}
		}

		function LoggOut()
		{
			if($_SESSION['LOGIN'] != 0)
			{
				$_SESSION['LOGIN'] = 0;
				header("Location: index.php");
			}
		}
	}
