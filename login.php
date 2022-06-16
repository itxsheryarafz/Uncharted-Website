<?php
//Login for User
$user_name = $_POST['user_name'];
$pass = $_POST['pass'];

if($user_name=='admin' AND $pass=='admin')
{
	//Session from Here
	session_start();
	$_SESSION['id'] = $user_name;
	$_SESSION['pass'] = $pass;
	header('location:pannel.php');
	
}
else
{
	ECHO ".";
}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="error.css">
	<title></title>
</head>
<body>

		<div class="error_img">
		<img src="error.png" height="40%" align="center">  </img>
		</div>
		<h2 > Wrong UserName or Password</h2>
		<a href="admin_login.html" align="center"> Back </a>
	</body>

</body>
</html>

