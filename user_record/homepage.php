<html>
<head>
	<link rel="stylesheet" type="text/css" href="homepagestyle.css">
	<title></title>

</head>
<body>
	<h1 align="center">User Record</h1>
</body>
</html>

<?php
	include('db.php');
	$qry = "SELECT * FROM users";
	$data= mysqli_query($db_connection,$qry);
	Echo "<br><br><br><table align='center' border='1px' cellspacing='0px'>";
	Echo "<tr ><th>Name</th><th>User_name</th><th>Password</th><th>E-mail</th><th>Cnic</th><th>Profile Pic</th><th>Edit</th><th>Delete</th></tr>";	
	while($data_view = mysqli_fetch_assoc($data)){
		Echo "<tr><td align='center'>".$data_view['Name']."</td>
		<td align='center'>".$data_view['User_name']."</td>
		<td align='center'>".$data_view['Password']."</td>
		<td align='center'>".$data_view['Email']."</td>
		<td align='center'>".$data_view['Cnic']."</td>
		<td align='center'><img src='upload/".$data_view['Image_name']."' height='3%' width='40px'></td><td align='center'>
		
		<a href='update.php?n=$data_view[Name] &
		un=$data_view[User_name] &
		p=$data_view[Password] &
		e=$data_view[Email] &
		c=$data_view[Cnic]'>Update</a></td>

		<td><a href='delete.php?n=$data_view[Name] &
		un=$data_view[User_name] &
		p=$data_view[Password] &
		e=$data_view[Email] &
		c=$data_view[Cnic]'><div class='delete'>Delete</div></a></td></tr>";
	}
?>
<html>
<head>
</head>
<body>

<a href="http://localhost/uncharted/Admin%20pannel/pannel.php"><div class='back'><button> Back</button> </div></a>	
</body>
</html>