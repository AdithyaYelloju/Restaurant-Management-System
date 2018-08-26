<?php
	include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Orders</title>
<link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>
	<center>
	<?php
		$result=mysqli_query($conn,"select * from order_list");
		$cou = mysqli_num_rows($result);
		if($cou > 0)
		{
	?>
	<h1>Orders</h1>
	<table border="1px">
		<tr>
			<th>OrderId</th>
			<th>ItemName</th>
			<th>Qantity</th>
			<th>Date</th>
			<th>Name</th>
			<th>Userid</th>
			<th>phone</th>
			<th>Address</th>
			<th>Status</th>
			<th colspan="2">Action</th>
			<th>Total price</th>
		</tr>
		<?php
			
			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>"; echo $row['id'];   echo "</td>";
				echo "<td>"; echo $row['item']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['date']; echo "</td>";
				echo "<td>"; echo $row['fname']; echo "</td>";
				echo "<td>"; echo $row['uid']; echo "</td>";
				echo "<td>"; echo $row['phone']; echo "</td>";
				echo "<td>"; echo $row['address']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>";?> <a href="approve.php?id=<?php echo $row['id']; ?>">Apporve</a> <?php echo "</td>";
				echo "<td>";?> <a href="notapprove.php?id=<?php echo $row['id']; ?>">Cancel</a> <?php echo "</td>";	
				echo "<td>"; echo $row['total']; echo "</td>";
				echo "</tr>";
			}

			echo "<tr>";
		}else{
			echo "<h1>No Food Orders</h1>";
		}
		?>
	</table>
	</center>
</body>
</html>
