<?php
	session_start();
	require 'dbconfig/config.php';
?>

<html>
<head>
<title>Login page</title>
<link rel="stylesheet" href="css/style.css">
<body style="background-color:#7f8c8d">

	<div id="main-warper">
		<center>
			<h2>Login form</h2>
			<img src="imgs/image.png" class="image"/>
		 </center>
	
	<form class="myform" action="index.php" method="post">
		<label><b>Username:</b></label><br>
		<input name="username"type="type" class="inputval" placeholder="Type your username"/><br>
		<label><b>Password:</b></label><br>
		<input name="password" type="password" class="inputval" placeholder="Type your password"/><br>
		<input name="login" type="submit" id="login_btn" value="Login"/><br>
		<a href="register.php"><input type="button" id="register_btn" value="Register"/></a>
	</form>
	<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];

			$query="select * from datatable where username='$username' and password='$password'";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$_SESSION['username']= $username;
				header('location:home.php');
			}
			else
			{
				echo '<script type="text/javascript"> alert("Invalid User")</script>';
			}
		}
	?>
	</div>
</body>
</html>
</html>