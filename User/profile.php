<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
	<link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>
<?php
	session_start();
	include "connection.php";
	include 'main.php';


	
	if(isset($_SESSION['user']))
	{
		$username=$_SESSION["user"];
		$id=$_SESSION["id"];
		$sql1 = "select * from user where fname = '$username' and id = '$id'";
		$result = mysqli_query($conn,$sql1);
		$multi_array = array();
		echo("<h1>Profile</h1>");
		while($row = mysqli_fetch_array($result))
		{
			?>
				<table border="1px">
				<tr>
					<td>Id :
					<td><?php echo $row['id']; ?>
				</tr>
				<tr>
					<td>Name :</td>
					<td><?php echo $row['fname']; ?></td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><?php echo $row['email']; ?></td>
				</tr>
				<tr>
					<td>Phone number :</td>
					<td><?php echo $row['phone']; ?></td>
				</tr>
				<tr>
					<td>Pincode :</td>
					<td><?php echo $row['pincode'] ?></td>
				</tr>
				<tr>
					<td>Home number:</td>
					<td><?php echo $row['hno']; ?></td>
				</tr>
				<tr>
					<td>Address :</td>
					<td><?php echo $row['address']; ?></td>
				</tr>			
				</table>
		<?php		
		}
	}else{
		?>
		<script type="text/javascript">
			alert("Please login")
			window.location="index.php"
		</script>
	<?php
}
?>
</body>
</html>