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
	<h1>Add menu</h1><center>
	<form action="add_menu.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><input type="text" name="item" placeholder="name of food item" required>
			</tr>
			<tr>
				<td><input type="number" name="price" placeholder="Enter the price" required>
			</tr>
			<tr>
				<td><input type="text" name="image" placeholder="image name" required>
			</tr>
			<tr>
				<td><input type="text" name="type" placeholder="type of food" required>
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
			$dst1= $_POST['image'];
			mysqli_query($conn,"insert into menu values('','$_POST[item]','$_POST[price]','$dst1','$_POST[type]')");
			?>
			<script type="text/javascript">
				alert("Inserted");
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