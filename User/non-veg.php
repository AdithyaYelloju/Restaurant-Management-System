<!DOCTYPE html>
<html>
<head>
<?php 
session_start();
include 'connection.php';
	include 'main.php';
?>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/imagegrid.css">
	<script type="text/javascript">
		function valid(){
			var quantity = document.getElementById('quantity').value;
			if(quantity < 1)
			{
				alert("Enter correct quantity");
				return false;
			}
			return true;
		}
	</script>
</head>
<body>
<?php

      $res = mysqli_query($conn,"select * from menu where type='non-veg'");
      ?>
<div class="List of Items" id='non - veg'>
	<div class="xop-section">
		<ul class="xop-grid">
			
			<?php while ($row = mysqli_fetch_array($res)) { ?>
			<li>
				<div class="xop-box" style="background:linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.10)),
	url(../admin/f_images/<?php echo $row['path'];?>); background-size:cover;">
					
					<div class="xop-info">
						<h3><?php echo $row['name']; ?></h3>
						<h4> &#8377; <?php echo $row["price"]; ?></h4>
						
					</div></a>
				</div>
				<?php 
				if(isset($_SESSION['user'])){
				?>
					<form action="ord.php" method="get" onsubmit="return valid()">
					<input type="number" name="quantity" id="quantity" placeholder="Quantity" required>
					<input type='number' name='id' value='<?php echo $row['id'];?>' style=' display: none;'required>
					<input type="submit" name="submit" value="order">
					</form>
				<?php } ?>
			</li>
			<?php 

}?>

		</ul>
	</div>
</div>



</body>
</html>