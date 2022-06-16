<?php
	include('db.php');
	$username = $_POST['uname'];
	$upass = $_POST['pass'];
	$check = true;
	$qry = "SELECT User_name,Password FROM users";
	$data= mysqli_query($db_connection,$qry);
	Echo "<br><br><br><table align='center' border='0px' height='300px' width='700px' cellspacing='0px'>
	<tr><th colspan='3'><h1>LOG IN AUTHENTICATION</h1></th></tr>
	<tr><th>#</th><th>Status</th><th>Error</th></tr>
	<tr><th>DB Status : </th><td colspan='2'>";
	if($db_connection){
		Echo 'DB Connected';	
	}
	Echo "
	</td></tr><tr>";
	while($data_view = mysqli_fetch_assoc($data)){
		if($data_view['User_name'] == $username){
			echo "<th>User Name : </th><td colspan='2'>Matched</td></tr>"; 
			echo "<tr><th>Password : </th>";
			if($data_view['Password'] == $upass){
				Echo "<td colspan='2'>Matched</td></tr>";
				$check = false;
			}
			else{
				echo "<td>Not Matched</td><td>".mysqli_error($db_connection)."</td></tr>";
			}
		}
	}
	if($check){
		Echo "<tr><th>User Name</th><td colspan='2'>Not Found</td></tr>
		<tr>
		<td colspan='3' align='center'>
		<form action='mainpage.html' methode='GET'></form>
		</td>
		</tr>";
		header("Location: user_login.html");

	}
	else{
		Echo "
		<tr>
		<td colspan='3' align='center'>
		<form action='homepage.php' methode='GET'><button type='submit' name='home_button'>Home</button></form>
		</td>
		</tr>";
		header("Location: website\index2.html");

	}

?>