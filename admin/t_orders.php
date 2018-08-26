<?php
	include 'connection.php';
	
	

?>

<!DOCTYPE html>
<html>
<head>
<title>TableBooking</title>
<link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>
	<center>
	<?php
		$result=mysqli_query($conn,"select * from t_order");
		$coun = mysqli_num_rows($result);
		if($coun == 0)
		{?>
			<h1>No Orders</h1>
		<?php
		}
		else
		{
	 ?>
	<h1>Table Orders</h1>
	<table border="1px">
		<tr>
			<th>OrderId</th>
			<th>TableName</th>
			<th>Members</th>
			<th>Date</th>
			<th>Name</th>
			<th>Userid</th>
			<th>phone</th>
			<th>Address</th>
			<th>Status</th>
			<th>Total price</th>
			<th colspan="2">Action</th>
			
		</tr>
		<?php
			
			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>"; echo $row['id'];   echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['members']; echo "</td>";
				echo "<td>"; echo $row['date']; echo "</td>";
				echo "<td>"; echo $row['uname']; echo "</td>";
				echo "<td>"; echo $row['uid']; echo "</td>";
				echo "<td>"; echo $row['phone']; echo "</td>";
				echo "<td>"; echo $row['address']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['price']; echo "</td>";
				echo "<td>";?> <a href="approvet.php?id=<?php echo $row['id']; ?>">Apporve</a> <?php echo "</td>";
				echo "<td>";?> <a href="notapprovet.php?id=<?php echo $row['id']; ?>">Cancel</a> <?php echo "</td>";	
				
				echo "</tr>";
			}

			echo "<tr>";
		}
		?>
	</table>
	</center>
</body>
</html>
