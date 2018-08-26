<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, intial-scale=1, user-scalable=no"/>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
   <script type="text/javascript">
   	 			
			function validate_signup(){

			var pass1 = document.regi.passwd.value;
			var pass2 = document.regi.passwd1.value;
			
			var mobile = document.regi.phone.value;
			var pincode= document.regi.pincode.value;
			var ph = /^[7-9]+[0-9]/;
			
			if(pincode.length<6){
			   alert("Pincode must be at least 6 characters long");  
			   return false;
		   } 
			
			
			
			if(pass1.length < 8){
				alert("password must contain 8 or more characters");
				
				return false;
			}
			if(pass1 != pass2){
				alert("password does not match please enter correctly");
				
				return false;
			}
			if(!mobile.match(ph) || mobile.length != 10){
				alert("Invalid phone number");
				
				return false;
			}
			
			
			return true;
			}

	
	
	
   </script>
  <?php 
			include 'main.php';
		?>
</head>
	<body>
		<div class="cont">
			<img src="images/userimage.png"/>  
			<form action="reg.php" name="regi" method="post" onsubmit="return validate_signup()">
				<div class="form-input">
					<input type="text" name="fname" id="fname" placeholder="Fullname" required><br/>
				</div>
				<div class="form-input">
					<input type="email" name="email" id="email" placeholder="Email" required><br/>
				</div>
				<div class="form-input">
					<input type="password" name="passwd" id="passwd" placeholder="password" required><br/>
				</div>
				<div class="form-input">
					<input type="password" name="passwd1" id="passwd1" placeholder="Confirm password" required><br/>
				</div>
				<div class="form-input">
					<input type="number" name="phone" id="phone" placeholder="abphone_number" required><br/>
				</div>
				<div class="form-input">
					<input type="text" name="hno" placeholder="Home No" required><br/>
				</div>
				<div class="form-input">
					<textarea placeholder="address" name="address" required></textarea><br/>
				</div>
				<div class="form-input">
					<input type="Number" name="pincode" placeholder="abpincode" required><br/>
				</div>
				
				
				
					<input type="submit" name="submit" value="signup" class="btn-signup">&nbsp;&nbsp;<input type="reset" name="Reset" class="btn-signup">
				
			</form>
		</div>
	</body>
</html>