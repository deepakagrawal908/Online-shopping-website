<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  header("location:index.php");
}

if($_SESSION["type"]!="admin") {
  header("location:index.php");
}

include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/foundation.css" />

	<title>Admin Dash</title>
	<style type="text/css">
		body{
			background-color: lightgreen;
		}
		.container{
			border: 1px solid black;
			border-radius: 5px;
			text-align: center;
			background-color: #e3e3e3;
		}
		.values{
			border: 1px solid black;
			border-radius: 5px;
			margin-top: 20px;
			width: 100%;
			text-align: center;
			display: inline-block;
		}
		a{
			color: white;
		}
		a:hover{
			font-size: 030px;
			color: black;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<h1>Welcome to Admin Dashboard	</h1>
		<span style="margin-top:-55px; margin-right:50px; float:right"><h4><a href="admin.php">Back</a></h4></span>
	</div>

	<div class="values">
		<h2><a href="add_product.php">Add Product</a></h2>
		<h2><a href="delete_product.php">Delete Product</a></h2>
	</div>
</body>
</html>
