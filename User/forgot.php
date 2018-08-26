<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		session_start();
	?>
</head>
<body>
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
			?>
			<center><br/>
			<form action="forgot1.php" method="post">
				<input type="email" name="email" placeholder="Enter your email" required><br>
				<input type="submit" name="submit" value="submit">
			</form>
			</center>
			<?php
		}
	?>
</body>
</html>

<?php

?>