<?php include 'config.php';?>
<html>	
		<head>
			<title>Book Record Management</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<link rel="stylesheet" type="text/css" href="css/header.css">
			<link rel="stylesheet" type="text/css" href="css/footer.css">
		</head>
		<body>
			<?php include 'header.php';?>
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6" id="view">
				<table class="table table-hover">
					<tr class="success">
						<td>Title</td>
						<td>Author</td>
						<td>Price</td>
					</tr>
					<?php
						if(isset($_POST['search']))
						{
						$item = $_POST['item'];
						
						$sql = "SELECT * FROM record WHERE title LIKE '%$item%' OR author LIKE '%$item%'";
						
						$run = mysql_query($sql);
						
						while($row=mysql_fetch_array($run))
						{							
							$id = $row[0];
					?>
					<tr class="danger">
						<td><?php echo $row[1];?></td>
						<td><?php echo $row[2];?></td>
						<td><?php echo $row[3];?></td>
					</tr>
					<?php
						}
					 }
					?>
				</table>
			</div>
			<div class="col-sm-3">
			</div>
			<?php include 'footer.php';?>
		</body>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
</html>
