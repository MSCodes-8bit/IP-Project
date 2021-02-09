<?php
	include('login.php'); 
	if(isset($_SESSION['login_user']))
	{
		// header("location: profile.php");
		// header("location: index.php");
		echo $_SESSION['login_user'];
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome To the Login Page</title>
	<link rel="stylesheet" href="./css/loginstyle.css">
	<script src="https://kit.fontawesome.com/372c657d15.js" crossorigin="anonymous"></script>
</head> 
<body>
	<div class="box">
		<img src="img/login.png" class="usrimg">
		<h1>LOGIN</h1>
		<br>
	<form action="" method="post">
		<p>Email Id</p>
		<input id="name" type="text" name="username" placeholder="Enter Email Id" required >

		<p>Password</p>
		<input id="password" type="password" name="password" placeholder="Enter password" required>
		<br>
		<input name="submit" type="submit" value="Login" onclick="login()" >
		
		<span><?php echo $error; ?></span>
	</form>
		<input name="submit" type="button" value="SignUp" onclick="location.href='reg.html';"/>
		<a href="forget.html">Forget Password</a>

	<h3>Follow Us On:- <i class="fab fa-facebook-f"></i>&nbsp; <i class="fab fa-instagram"></i></h3>
	</div>
</body>
<!-- <script type="text/javascript">
	 function login() {
	 	alert("Login Successful!!");
	 }
</script>
 --></html>
