<?php
	include 'connection.php';
	session_start();
	include 'main.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Accepted list</title>
</head>
<body>
	<?php
			if(isset($_SESSION['user']))
			{?>
	<center>
	<h1>Accepted Orders</h1>
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
			<th>Total price</th>
			
		</tr>
		<?php
			$total = 0;
			$result=mysqli_query($conn,"select * from order_list where status = 'yes'");
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
				echo "<td>"; echo $row['total']; echo "</td>";
				echo "";
				$price = mysqli_query($conn,"select * from menu where id = ".$row['item_id'].""); 

				while($p = mysqli_fetch_array($price))
				{
					echo "price".$p['price'];
				$total = $total + $p['price'] * $row['quantity'];
				}
				echo "</tr>";
			}

			echo "<tr>";
		}else{
			?>
			<script type="text/javascript">
				alert("login please");
				window.location="index.php";
			</script>
			<?php
		}
		?>
	</table>
	<?php
	echo $total;
	?>
</body>
</html>