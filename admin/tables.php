<?php 
session_start();
include 'main.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<style type="text/css">
		td{
			text-align: center;
			padding: 5px;
		}
	</style>
</head>
<body>
	<center>
	<h1>Table Menu</h1>
	<form action="" method="post">
		<input type="text" name="s1" placeholder="Name of food item">
		<input type="submit" name="submit" value="search food item">
	</form>
 <?php
 	
 	include 'connection.php';
 	if(isset($_SESSION['user'])){
 		if(isset($_POST['submit']))
 		{
 			$res = mysqli_query($conn,"select * from tables where name like('$_POST[s1]%')");
 		echo "<table align: 'center'; border=1px>";
 		echo "<tr>";
 		echo "<th>Id</th>";
 		echo "<th>table name</th>";
 		echo "<th>Price</th>";
 		echo "<th>Members</th>";
 		echo "<th>Status</th>";
 		echo "</tr>";
 		while ($row = mysqli_fetch_array($res)) {
 			echo "<tr>";
 			echo "<td>"; echo $row["id"]; echo "</td>";
 			echo "<td>"; echo $row["name"]; echo "</td>";
 			echo "<td>"; echo $row["price"]; echo "</td>";
 			echo "<td>"; echo $row["members"]; echo "</td>";
 			
 			echo "<td>"; echo $row["status"]; echo "</td>";
 			echo "<tr>";
 		}//
 		echo "</table";

 		}else{
 		$res = mysqli_query($conn,"select * from tables");
 		echo "<table align: 'center'; border=1px>";
 		echo "<tr>";
 		echo "<th>Id</th>";
 		echo "<th>Table name</th>";
 		echo "<th>Price</th>";
 		echo "<th>Memebers";
 		echo "<th>status</th>";
 		echo "<th>Delete</th>";
 		echo "</tr>";
 		while ($row = mysqli_fetch_array($res)) {
 			echo "<tr>";
 			echo "<td>"; echo $row["id"]; echo "</td>";
 			echo "<td>"; echo $row["name"]; echo "</td>";
 			echo "<td>"; echo $row["price"]; echo "</td>";
 			echo "<td>"; echo $row["members"]; echo "</td>";
 			echo "<td>"; echo $row["status"]; echo "</td>";
 			echo "<td>"; ?> <a href="deletet.php?id=<?php echo $row['id'];?>">Delete</a><?php echo "</td>"; 
 			echo "<tr>";
 		}//
 		echo "</table";
 		}
 	}
 ?>
</body>
</html>