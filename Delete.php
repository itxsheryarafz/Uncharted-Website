<?php
	$id   =$_GET['i'];	
	$P_Name = $_GET['n'];
	$des = $_GET['d'];
	$price = $_GET['pp'];
	include('db.php');
	$sql = "DELETE FROM product
			WHERE id= '$id'" ;
	$results = mysqli_query($db_connection,$sql);
	Echo "<br><br><br><table align='center' border='0px' height='300px' width='700px' cellspacing='0px'>
	<tr><th colspan='3'><h1>Upadate Check</h1></th></tr>
	<tr><th>#</th><th>Status</th><th>Error</th></tr>
	<tr><th>DB Status : </th><td colspan='2'>";
	if($db_connection){
		Echo 'DB Connected';	
	}
	Echo "
	</td></tr>
	<tr><th>Data Status : </th>";
	if($results){	
		Echo "<td colspan='2'>".'Delete Sucessfully';
	}
	else{
		Echo "<td>".'Not Deleted'."</td><td>".mysqli_error($db_connection);
	}
	Echo "</td></tr>
	<tr><td colspan='3' align='center'><form action='homepage.php' methode='GET'><button type='submit' name='Back_button'>Homepage</button></form></td></tr></table>";





?>