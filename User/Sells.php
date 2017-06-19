 <html>
 <head>
 	<title></title>
 </head> 
 <body>
 	<table width='100%' style="margin-bottom: 20px;">
		<tr>
			<td><h4>Product name</h4></td>	
			<td><h4>Price</h4></td>
			<td><h4>ID order</h4></td>
		</tr>
		<?php 
		$idElemnt = array("");
		include("../databaseAccess/models/Repository.php");
		$data = new Repository();
		$data->Getorders($_SESSION['LOGIN']);
		 ?>
	</table>
</body>
</html