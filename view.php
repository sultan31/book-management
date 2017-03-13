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
					<tr class="success" style="text-align:center;">
						<td>Sr NO</td>
						<td>Title</td>
						<td>Author</td>
						<td>Price</td>
					</tr>
					<?php
						$sql = "SELECT * FROM record";
						
						$run = mysql_query($sql);
						
						$i = 0;
						
						while($row=mysql_fetch_array($run))
						{
							$i++;
							
							$id = $row[0];
					?>
					<tr class="danger" style="text-align:center;">
						<td><?php echo $i;?></td>
						<td><?php echo $row[1];?></td>
						<td><?php echo $row[2];?></td>
						<td><?php echo $row[3];?></td>
					</tr>
					<?php
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
