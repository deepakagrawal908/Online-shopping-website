<!DOCTYPE html>
<html>
<head>
	<title>Delete Student</title>
	<link rel="stylesheet" href="css/foundation.css" />
	<style type="text/css">
		body{
			background-color: lightgreen;
		}
		.container{
			border: 1px solid black;
			border-radius: 5px;
			text-align: center;
			background-color: #e3e3e3;
			margin-bottom: 20px;
		}
	</style>
</head>

<body>
<div class="container">
	<h1>Delete Product</h1>
</div>

<form action="delete_product.php?val=0" method="POST">
	<table align="center" >
		<tr>
			<th >Product Code</th>
			<td><input type="text" name="product_code" placeholder="Enter Product Code" required="required" /></td>
			<td colspan="2"><input type="submit" name="submit" value="Search"></td>
		</tr>	

	</table>	
</form>
<table align="center" width="70%" border="1" style="margin-top: 10px;">
	<tr style="background-color: #000; color: #fff">
		<th>Serial Number</th>
		<th>Product Code</th>
		<th>Image</th>
		<th>Name</th>
		<th>Action</th>
	</tr>
	<?php 
		include('config.php');
		if(isset($_POST['submit'])){
			$product_code = $_POST['product_code'];
			$sql="SELECT * FROM `products` WHERE `product_code` = '$product_code'";
			$run=mysqli_query($mysqli, $sql);

			if(mysqli_num_rows($run)<1){
				echo "<center><tr><td colspan='5'>No records found</td></tr></center>";
			}
			else{
				$data = mysqli_fetch_assoc($run);
				$count=1;
					?>
				<tr>
					<td><?php echo $count; ?></td>
					<td><?php echo $data['product_code']; ?></td>
					<td><img src="images/products/<?php echo $data['product_img_name'] ?>" align="center" style="max-width: 100px;" /></td>
					<td><?php echo $data['product_name']; ?></td>
					<td><a href="deleteform.php?sid=<?php echo $data['id'] ?>">Delete</a></td>
				</tr>
				<?php 
			
			}
		}
	?>
</table>
<footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; BOLT Sports Shop. All Rights Reserved.</p>
        </footer>

</body>
</html>
