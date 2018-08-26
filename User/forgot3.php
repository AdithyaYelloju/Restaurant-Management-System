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
			$pass = mysqli_real_escape_string($conn,$_POST['password']);
			$email = mysqli_real_escape_string($conn,$_POST['email']);
			$sql = "update user set password = '$pass' where email = '$email'";
			//echo $sql;
			mysqli_query($conn,$sql);
			?>
				<script type="text/javascript">
					alert("updated")
					window.location="login1.php"
				</script>
			
			<?php
		
		}
	?>
	</center>
</body>
</html>