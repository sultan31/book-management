<div class="col-sm-12 header">
	<div class="col-sm-3">
		<a href="index.php" style="text-decoration:none;"><img src="images/logo_left.png" style="padding:15px;"></a>
	</div>
	<div class="col-sm-6">
		<ul>
			<a href="insert.php" style="text-decoration:none;"><li>Insert</li></a>
			<a href="view.php" style="text-decoration:none;"><li>View</li></a>
			<a href="update.php" style="text-decoration:none;"><li>Update</li></a>
			<a href="delete.php" style="text-decoration:none;"><li>Delete</li></a>
		</ul>
	</div>
	<div class="col-sm-3">
		<form action="search.php" method="post" enctype="multipart/form-data" class="form-inline" id="searchForm" onsubmit="return validation()">
			<input type="text" name="item" placeholder="Search here" class="form-control" id="item">
			<input type="submit" name="search" value="Search" class="btn btn-info">
		</form>
	</div>
</div>