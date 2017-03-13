<?php include 'config.php';?>
<html>	
		<head>
			<title>Book Record Management</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<link rel="stylesheet" type="text/css" href="css/header.css">
			<link rel="stylesheet" type="text/css" href="css/footer.css">
			<style>
				table{margin:0 auto;}
				td{padding:10px;}
			</style>
		</head>
		<body>
			<?php include 'header.php';?>
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4" id="cont">
				<form action="insert.php" method="post" enctype="multipart/form-data">
			<table align="center">
				<tr>
					<td colspan="5" style="text-align:center;color:red;">Insert New Books</td>
				</tr>
				<tr>
					<td align="right">Title</td>
					<td><input type="text" name="title" class="form-control" id="title" required></td>
				</tr>
				<tr>
					<td align="right">Author</td>
					<td><input type="text" name="author" class="form-control" id="author" required></td>
				</tr>
				<tr>
					<td align="right">Price</td>
					<td><input type="text" name="price" class="form-control" id="price" required></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td align="center">
						<input type="submit" name="insert" value="Insert" class="btn btn-success">
					</td>
				</tr>
			</table>
		 </form>
			</div>
			<div class="col-sm-4">
			</div>
			<?php include 'footer.php';?>
		</body>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
</html>
<?php
	if(isset($_POST['insert']))
	{
		$title = $_POST['title'];
		
		$author = $_POST['author'];
		
		$price = $_POST['price'];
		
		$sql = "INSERT INTO record(title,author,price)VALUES('$title','$author','$price')";
		
		$run = mysql_query($sql);
		
		if(isset($run))
		{
			echo "<script>alert('book record is inserted successfully')</script>";
		}
	}
?>
