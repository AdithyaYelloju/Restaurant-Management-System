<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		session_start();
		include 'connection.php'
	?>
</head>
<body>
<center>

<?php	
		if(isset($_SESSION['user']))
		{
			?>
			<script type="text/javascript">
				alert("You already Loged in"); 
				window.location = 'index.php';
			</script>
			<?php
		}else{
			include 'main.php';
			
			$email = 	 mysqli_real_escape_string($conn,$_POST['email']);
			$result = mysqli_query($conn,"select * from user where email = '$email'");
			$row = mysqli_fetch_array($result);
			if($row)
			{
			?>
			<form action="forgot2.php" method="post">
				<input type="text" name="fname" placeholder="Full name"><br/>
				<input type="number" name="phone" placeholder="phone"><br/>
				<input type="email" name="email" value="<?php echo $email ?>"><br/>
				<input type="submit" name="submit" value="submit">
			</form>
			<?php
			}else
			{
				?>
				<script type="text/javascript">
					alert("Email not found");
					window.location='login1.php';
				</script>
				<?php
			}
		}
	?>
	</center>
</body>
</html>