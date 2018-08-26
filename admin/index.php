<?php
	session_start();
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Food Corner</title>
</head>
<body>
	<?php
	include 'main.php';
	if(isset($_SESSION['user']))
	{
		
		include 'orders.php';
		include 't_orders.php';
		
	}else{
		?>
		<a href="sigup.html">SignUp</a>
		<a href="login.php">Login</a>
		<?php
	}
	include 'footer.php';
	?>
</body>
</html>