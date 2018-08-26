<?php
if(isset($_POST['submit'])) 
     {
     	include_once 'connection.php';
	 $fname =  mysqli_real_escape_string($conn,$_POST['fname']);
     $email = 	 mysqli_real_escape_string($conn,$_POST['email']);
     $passwd = mysqli_real_escape_string($conn,$_POST['passwd']);
	 $phone =  mysqli_real_escape_string($conn,$_POST['phone']);
	 $pincode = mysqli_real_escape_string($conn,$_POST['pincode']);
	 $hno = mysqli_real_escape_string($conn,$_POST['hno']);
	 $address = mysqli_real_escape_string($conn,$_POST['address']);
	
        		$sql = "insert into user values('','$fname','$email','$passwd','$phone','$pincode','$hno','$address')";
                 
                $result = mysqli_query($conn,$sql);
                if($result)
                {
					?>
					<script type="text/javascript">
						alert("register successfully");
						window.location="login1.php";
					</script>
					<?php
					//include("login.html");

				}else{
					?>
					<script type="text/javascript">
						alert("Sorry! not successful")
						window.location="sigup.html";
					</script>
					<?php
				}
	}
?>