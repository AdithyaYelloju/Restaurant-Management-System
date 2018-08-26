<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		session_start();
		include 'connection.php';
		include 'main.php';
	?>
	<script type="text/javascript">
   	 			
			function validate(){
				var pass1 = document.regi.password.value;
			if(pass1.length < 8){
				alert("password must contain 8 or more characters");
				return false;
			}
			return true;
			}
	</script>
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
			
			$fname = mysqli_real_escape_string($conn,$_POST['fname']);
			$email = mysqli_real_escape_string($conn,$_POST['email']);
			$phone = mysqli_real_escape_string($conn,$_POST['phone']);
			$result = mysqli_query($conn,"select * from user where email = '$email'");
			$row = mysqli_fetch_array($result);
			if($row['fname'] == $fname && $row['phone'] == $phone)
			{
				?>
				<form action="forgot3.php" name="regi" method="post" onsubmit="return validate()">
					<input type="password" name="password" placeholder="Enter password">
					<input type="email" name="email" value="<?php echo $email;?>" style=" display: none;">
					<input type="submit" value="Update">
				</form>
				<?php
			}else{
				?>
				<script type="text/javascript">
					alert('Your details are not matched');
					window.location='login1.php';
				</script>
				<?php
			}
			?>
			
			<?php
		
		}
	?>
	</center>
</body>
</html>