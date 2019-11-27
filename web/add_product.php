<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<link rel="stylesheet" href="css/foundation.css" />
	<style type="text/css">
		body{
			background-color: lightgreen;
		}
		.containe{
			border: 1px solid black;
			border-radius: 5px;
			text-align: center;
			background-color: #e3e3e3;
		}

	</style>
</head>
<body>
<div class="containe">
	<h1>Add Product</h1>
</div>
<form method="post" action="add_product.php" enctype="multipart/form-data">
	<table border="1" align="center" style="width: 70%; margin-top: 40px;">
		<tr>
			<th>Product Code</th>
			<td><input type="text" name="product_code" placeholder="Enter Product Code" required></td>
		</tr>
		<tr>
			<th>Product Name</th>
			<td><input type="text" name="product_name" placeholder="Enter Product Name" required></td>
		</tr>
		<tr>
			<th>Product Description</th>
			<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
		</tr>
		<tr>
			<th><b>Product Image</b></th>
			<td><input type="file" name="product_img_name" /></td>
			</tr>
		<tr>
			<th>Product Quantity</th>
			<td><input type="number" name="qty" placeholder="Enter Quantity" required></td>
		</tr>
		<tr>
			<th>Product Price</th>
			<td><input type="number" name="price" placeholder="Enter Price" required></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center" width="100%;"><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>
<?php 

	if(isset($_POST['submit'])){
		$product_code = $_POST['product_code'];
		$product_name = $_POST['product_name'];
		$product_desc = $_POST['product_desc'];
		$qty = $_POST['qty'];
		$price = $_POST['price'];

		$product_img_name = $_FILES['product_img_name']['name'];
		$product_img_name_tmp = $_FILES['product_img_name']['tmp_name'];
		

		move_uploaded_file($product_img_name_tmp,"images/products/$product_img_name");


		$query = "INSERT INTO `products`(`product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES ('$product_code','$product_name','$product_desc','$product_img_name','$qty','$price')";
		$run = mysqli_query($mysqli, $query);
		if($run){
		 echo "<script>alert('Product Has been inserted!')</script>";
		 window.open("admin_dash.php");
		}

		
	}

?>