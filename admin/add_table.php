<?php
 include 'connection.php';
 session_start();
 include 'main.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/table.css">
</style>

</head>
<body>
	<h1>Add Table</h1><center>
	<form action="add_table.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><input type="text" name="table" placeholder="Name of table" required>
			</tr>
			<tr>
				<td><input type="number" name="members" placeholder="number of members" required>
			</tr>
			<tr>
				<td><input type="number" name="price" placeholder="Price of table" required>
			</tr>
			<tr>
				<td><input type="submit" value="Insert into menu" name="submit" required>
			</tr>
		</table>
	</form>
</center>
</body>
</html>

<?php
	if(isset($_SESSION['user']))
	{
		if(isset($_POST["submit"]))
		{
			$date = date("Y-m-d");
			$sql = "INSERT INTO `tables`(`id`, `name`, `members`, `price`, `status`) VALUES ('','$_POST[table]',$_POST[members],$_POST[price],'available')";
			//echo $sql;
			mysqli_query($conn,$sql);

			?>
			<script type="text/javascript">
				//alert("Inserted");
			</script>

			<?php
		}
	}
	else{
		?>
		<script type="text/javascript">
			alert("Please login");
			window.location="../user/index.php";
		</script>
		<?php
	}
?>