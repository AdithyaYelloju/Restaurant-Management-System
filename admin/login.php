<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<center>
		<h1>Login</h1>
	<form action="login.php" method="post" name="login.php">
		<input type="email" name="email" placeholder="Email"><br>
		<input type="password" name="password" placeholder="password"><br>
		<input type="submit" name="submit" value="login">
	</form>
	</center>
</body>
</html>
<?php
	if(isset($_POST['submit'])) 
     {
     	include_once 'connection.php';
     $email = 	 mysqli_real_escape_string($conn,$_POST['email']);
     $passwd = mysqli_real_escape_string($conn,$_POST['password']);
	
        		$sql = "select fname,id from admin where email = '$email' and password = '$passwd'";
        		//echo $sql;
                 $count=0;
                $result = mysqli_query($conn,$sql);
                $count = mysqli_num_rows($result);
               
                if($count > 0)
                {

                	session_start();
					$multi_array = array();
					while($row = mysqli_fetch_assoc($result))
					{
						$multi_array[] = $row;	
					}
					foreach($multi_array as $key){
						 $_SESSION["user"]=$key['fname'];
                        $_SESSION['id']=$key['id'];
					}
                	?>
                	<script type="text/javascript">
                		alert('login');
                	window.location="index.php"
                	</script>
                	<?php
                }else
                {
                	?>
                	<script type="text/javascript">
                		alert('not');
                	window.location="login.php";
                	</script>
                	<?php
                }
    }
?>