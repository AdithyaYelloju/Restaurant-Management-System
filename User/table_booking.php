<?php 
session_start();
include 'connection.php';
include 'main.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Food Corner</title>
	<link rel="stylesheet" type="text/css" href="css/table.css">

</head>
<body>
<?php
				$sql = "select * from tables where status = 'available'";
				//echo $sql;
				$ud = mysqli_query($conn,$sql);
				?>
				<center>
	<form action="table_booking.php" method="post">
	
		<select name="name">
			<option value=""></option>
			<?php
				while ($table = mysqli_fetch_array($ud)) 
				{?>
			<option value="<?php echo $table['name']; ?>"><?php echo $table['name']; ?></option>
				<?php } ?>
			
		</select>

		<input type="submit" name="submit" value="check">
	</form>
	</center>
</body>
</html>

<?php
	if(isset($_POST['submit']))
 		{
 			$res = mysqli_query($conn,"select * from tables where name ='$_POST[name]'");
	 		echo "<table align: 'center'; border=1px>";
	 		echo "<th>Details</th>";
	 		echo "<th>Details</th>";
	 		echo "</tr>";
 		while ($row = mysqli_fetch_array($res)) {

 			echo "<tr>";
	 			echo "<td>Id</td>";
	 			echo "<td>"; echo $row["id"]; echo "</td>";
 			echo "</tr>";
 			echo "<tr>";
	 			echo "<td>Name</td>";
	 			echo "<td>"; echo $row["name"]; echo "</td>";
 			echo "</tr>";
 			echo "<tr>";
 				echo "<td>Members</td>";
 				echo "<td>"; echo $row["members"]; echo "</td>";
 			echo "</tr>";
 			echo "<tr>";
	 			echo "<td>Price</td>";
	 			echo "<td>"; echo $row["price"]; echo "</td>";
 			echo "</tr>";
 			echo "<tr>";
 				echo "<td colspan='2'>"; ?> <img src="../admin/f_images/Table.gif" height="500" width="500"><?php echo "</td>";
 			echo "</tr>";
 			echo "<tr>";
 				echo "<td colspan='2'>"; echo "<form action='ord_t.php' method='get'>
 												<input type='text' value='".$row["name"]."' name='name' style='display : none;'>
 												<input type='text' name='date' placeholder='yyyy-mm-dd'>
 												<input type='submit' value='book'/>
 												</form>";
 				echo "</td>";
 			echo "</tr>";
 		}//
 		echo "</table";

 		}
?>

