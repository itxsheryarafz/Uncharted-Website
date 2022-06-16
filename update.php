<?php 
	$i= $_GET['i'];
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
					<th>Product Name : </th>
					<td><input type="text" name="p"></td>
				</tr>
				<tr>
					<th>Product Price : </th>
					<td><input type="text" name="pp"></td>
				</tr>
				<tr>
					<th>Description </th>
					<td><input type="text" name="d" ></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><button type="submit" name="i" value="<?php ECho $i?>">Update</button></td>
				</tr>
			</table>
		</form>
	</body>
</html>