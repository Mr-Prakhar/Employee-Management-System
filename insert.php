<html>
<body>
<?php

$conn=mysqli_connect("localhost","root","","data");
// check the connection

if(!$conn)
{
	die("Not Connected to server");
}

$fname=$_POST['fname']; 
$lname=$_POST['lname'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];

$sql="INSERT INTO student(fname,lname,email,dob,gender)VALUES('$fname','$lname','$email','$dob','$gender')";

if(mysqli_query($conn,$sql))
{
echo "CONGRATS DATA INSERTED";
}
else
{
echo "DATA NOT INSERTED";
}

mysqli_close($conn);

?>
</body>
</html>