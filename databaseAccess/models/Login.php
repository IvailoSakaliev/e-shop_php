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
			$incorectUser = true;
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
							header('Location: ../Welcome.php');
						}
						else
						{
							return "incorect user";
						}
						$incorectUser = false;
					}	
			if ($incorectUser) {
				return "incorect user";
			}
			
			
		}
		

		function LoggOut()
		{
			session_unset();
		}
	}
?>