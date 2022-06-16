<?php 
	$n= $_GET['un'];
?>
<html>
	<head>
		<title>Update</title>
	</head>
	<body>
		<br>
		<br>
		<br>
		<form Action="updatecheck.php" method="GET">
			<table align="center" border="0px" height="400px" width="370px" cellspacing="0px">
				<tr>
					<th colspan="2"><h1>Update Page</h1></th>
				</tr>
				<tr>
					<th>Enter Your Full Name : </th>
					<td><input type="text" name="n" placeholder="Admin"></td>
				</tr>
				<tr>
					<th>Enter Your Cnic : </th>
					<td><input type="text" name="c" placeholder="12345-789101-9"></td>
				</tr>
				<tr>
					<th>Enter Your E-mail : </th>
					<td><input type="text" name="e" placeholder="example@gmail.com"></td>
				</tr>
				<tr>
					<th>Create Your Password : </th>
					<td><input type="text" name="p"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><button type="submit" name="un" value="<?php ECho $n?>">Update</button></td>
				</tr>
			</table>
		</form>
	</body>
</html>