<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="row">
 		<div class="col-md-6" style="margin:15px;">
 		<h2>Update Product</h2>
 			<form method="post">
		 		<label>Title</label></br>
		 		<input type="text" name="titel" class="form-control"></br>

		 		<label>Price</label></br>
		 		<input type="text" name="price" class="form-control"></br>
		 		
		 		<label>Description</label></br>
		 		<textarea cols="100" rows="10" name="desc" class="form-control"></textarea></br>

		 		<div class="avatar">
					<img src="../images/noIMG.png" width="100" height="100">
					<input style="display: inline-block;vertical-align:bottom;" type="file" name="imagePath"></br>
				</div>
		 		
		 		<input type="submit" style="margin-top: 10px;" name="add" value="Update" class="btn btn-success">
		 	</form>
 		</div>
 	</div>
</body>
</html>