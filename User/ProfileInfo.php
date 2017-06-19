<?php 
	$_SESSION['product_id'] = $_SESSION['LOGIN'];
	$_SESSION['table'] = "login";
	include("../databaseAccess/models/Repository.php");
	$data = new Repository();
	$result = $data->GetElement();
	while ($row = mysqli_fetch_array($result)) {
				echo "
				<img src='../images/avatar.png' width'300px' height='300px'/>
				<table width='100%'>
					<tr>
						<td>Username</td>
						<td>$row[username]</td>
					</tr>
					<tr>
						<td>First name</td>
						<td>$row[firstName]</td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td>$row[lastName]</td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td>$row[email]</td>
					</tr>
					
				</table>
				";

			}
 ?>
