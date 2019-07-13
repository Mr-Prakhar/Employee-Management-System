<?php
	session_start();
?>

<html>
<head>
<title>Home page</title>
<link rel="stylesheet" href="css/style.css">
<body style="background-color:#7f8c8d">

	<div id="main-warper">
		<center>
			<h2>Home Page</h2>
			<h3>Welcome 
			<?php 
				echo $_SESSION['username']; 
			?>
			</h3>
			<img src="imgs/image.png" class="image"/>
		 </center>
	
	<form class="myform" action="home.php" method="post">

		<input name="logout" type="submit" id="logout_btn" value="Log Out"/>
	</form>
	<?php
		if(isset($_POST['logout']))
		{
			session_destroy();
			header('location:index.php');
		}
	?>
	</div>
</body>
</html>
</html>