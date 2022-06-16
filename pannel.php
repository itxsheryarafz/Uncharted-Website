<?PHP
//Admin Pannel
session_start();
if(!isset($_SESSION['pass']))
{
	header('location:Admin_login.html');
}
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="adminpannelstyle.css">
</head>
<body bgcolor="lightblue">
	<div class="header1">
			<img class="image" src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/07/ps4.png">
		</div>
	<div class="heading">
		<h1> Welcome To Pannel </h1>
	</div>

	<center><a href="user_record\homepage.php "><button type="submit" > <b>User Record</b></button></a></center>
	<center><a href="product_record\homepage.php"><button type="submit"> <b>Products Record</b></button></a></center></center>
		 
		
</body>
</html>

