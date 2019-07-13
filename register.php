<?php
session_start();

	require 'dbconfig/config.php';
?>





<html>
<head>
<title>Registration page</title>
<link rel="stylesheet" href="css/style.css">
<body style="background-color:#7f8c8d">

	<div id="main-warper">
		<center>
			<h2>Registration form</h2>
			<img src="imgs/image.png" class="image"/>
		 </center>
	
	<form class="myform" action="register.php" method="post">
		<label><b>Username:</b></label><br>
		<input name="username" type="type" class="inputval" placeholder="Type your username" required/><br>
		<label><b>Email:</b></label><br>
		<input name="email" type="email" class="inputval" placeholder="Type your username" required/><br>
		<label><b>Date Of Birth:</b></label><br>
		<input name="dob" type="date" class="inputval" placeholder="Type your username" required/><br>
		<label><b>Password:</b></label><br>
		<input name="password" type="password" class="inputval" placeholder="Type your password" required/><br>
		<label><b>Confirm Password:</b></label><br>
		<input name="cpassword" type="password" class="inputval" placeholder="Confirm password" required/><br>
		<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
		<a href="index.php"><input type="button" id="back_btn" value="Back"/></a>
	</form>
	</div>

	<?php
		if(isset($_POST['submit_btn']))
		{
			//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
			
			$username = $_POST['username'];
			$email = $_POST['email'];
			$dob = $_POST['dob'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			
			if($password == $cpassword)
			{
				$query="select * from datatable where username='$username'";	
				$query_run = mysqli_query($con,$query);
				
				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("User already exixts... Try another username") </script>';
				}
				else
				{
					$query= "insert into datatable values('$username','$email','$dob','$password')";
					$query_run = mysqli_query($con,$query);
					
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("User Registered...") </script>';
						$_SESSION['username']= $username;
						header('location:home.php');

					}
					else
					{
						echo '<script type="text/javascript"> alert("error") </script>';
					}
					
				
				}
			}
			else
			{
				echo '<script type="text/javascript"> alert("Password and Confirm Password Do not match...") </script>';
			}
		}
	?>
</body>
</html>
</html>