<?php
$con = mysqli_connect('localhost', 'root');
	if($con)
	{
		echo "<script>alert('connection estabilished');</script>";
	}
	else
	{
	echo "<script>alert('No Connection');</script>";
	}

mysqli_select_db($con, 'travelguide');

$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

	if($password == $repassword)
	{
		$q = " UPDATE reg SET password='$password' WHERE username='$username' ";
		$result = mysqli_query($con,$q); 
		echo "<script>alert('Password Changed');</script>";
		header("location: log.php");
	}
	else
	{
		echo "WRONG PASSWORD";
	}

?>