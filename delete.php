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
			<form action="" method="post" enctype="multipart/form-data">
				<table class="table table-hover">
					<tr class="success" style="text-align:center;">
						<td>Sr NO</td>
						<td>Title</td>
						<td>Author</td>
						<td>Price</td>
						<td>Select to delete</td>
					</tr>
					<?php
						$sql = "SELECT * FROM record";
						
						$run = mysql_query($sql);
						
						$i = 0;
						
						while($row=mysql_fetch_array($run))
						{
							$i++;
							
							$id = $row['id'];
					?>
					<tr class="danger" style="text-align:center;">
						<td><?php echo $i;?></td>
						<td><?php echo $row['title'];?></td>
						<td><?php echo $row['author'];?></td>
						<td><?php echo $row['price'];?></td>
						<td><input type="checkbox" name="num[]" value="<?php echo $id;?>"></td>
					</tr>
					<?php
						}
					?>
					<tr class="danger">
						<td colspan="5" style="text-align:center;"><input type="submit" name="delete" value="Delete" class="btn btn-danger"></td>
					</tr>
				</table>
			</form>
			</div>
			<div class="col-sm-3">
			</div>
			<?php include 'footer.php';?>
		</body>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
</html>
<?php
	if(isset($_POST['delete']))
	{
		$rec = $_POST['num'];
		
		foreach($rec as $val)
		{
			$delete = mysql_query("DELETE FROM record WHERE id='$val'");
		}
		if(isset($delete))
		{
			echo "<script>window.open('delete.php','_self')</script>";
		}
	}
?>