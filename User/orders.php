<?php
	include 'connection.php';
	session_start();
	include 'main.php';

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

	
			if(isset($_SESSION['user']))
			{
				$uid =  $_SESSION['id'];
				$total =0;
				//echo $_SESSION['id'];
			$result=mysqli_query($conn,"select * from order_list where uid = '$uid'");
			$con = mysqli_num_rows($result);
			if($con > 0)
				{
					?>
					<h1>Orders of Food</h1>
	<table border="1px">
		<tr>
			<th>OrderId</th>
			<th>ItemName</th>
			<th>Quantity</th>
			<th>Date</th>
			<th>Name</th>
			<th>Userid</th>
			<th>phone</th>
			<th>Address</th>
			<th>Total</th>
			<th>Status</th>
			<th>Cancel</th>
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
				echo "<td>"; echo $row['total']; echo "</td>";
				$total = $total + $row['total'];
				echo "<td>"; echo $row['status']; echo "</td>";
				if($row['status'] == 'no'){
					echo "<td>"; ?> <a href="cancel.php?id=<?php echo $row['id']; ?>"">Cancel</a> <?php echo "</td>";
				}
				else{
					echo "<td>"; ?> <p>Deliver soon</p> <?php echo "</td>";
				}
				echo "</tr>";
				}
				echo "</table>";
			}else{
					echo "<h1>No Food Orders</h1>";
				}

				$result=mysqli_query($conn,"select * from t_order where uid = '$uid'");
				$con = mysqli_num_rows($result);
				if($con > 0)
				{
				?>
					<h1>Table Orders</h1>
					<table border="1px">
				<tr>
					<th>OrderId</th>
					<th>Name</th>
					<th>Members</th>
					<th>Date</th>
					<th>phone</th>
					<th>Address</th>
					<th>Status</th>
					<th>Cancel</th>
				</tr>

				<?php
				
				while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>"; echo $row['id'];   echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['members']; echo "</td>";
				echo "<td>"; echo $row['date']; echo "</td>";
				echo "<td>"; echo $row['phone']; echo "</td>";
				echo "<td>"; echo $row['address']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['price']; echo "</td>";
				$total = $total + $row['price'];
				if($row['status'] == 'pending..'){
					echo "<td>"; ?> <a href="cancel_t.php?id=<?php echo $row['id']; ?>"">Cancel</a> <?php echo "</td>";
				}
				else{
					echo "<td>"; ?> <p>Deliver soon</p> <?php echo "</td>";
				}
				echo "</tr>";
				}
				echo "</table>";

				}
				else{
					echo "<h1>No Table Orders</h1>";
				}
				

			}
			else{
				?>
				<script type="text/javascript">
					alert("Please login");
					window.location="index.php";
				</script>
				<?php
			}
		?>
		</center>
</body>
</html>
