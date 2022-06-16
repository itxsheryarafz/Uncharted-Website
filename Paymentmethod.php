<?php
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['no'];
$address=$_POST['address'];
$host ="localhost";
				$db_user_name="root";
				$db_password='';
				$db_name = 'bsse_4a';
				$db_connection = mysqli_connect($host, $db_user_name, $db_password, $db_name);
				$qry = "INSERT into customer(Name,Email,Contact,Address) VALUES('$name','$email','$contact','$address')";
				$data= mysqli_query($db_connection,$qry);
				if($data)
				{
					header('location:Payment.php');
				}
				
?>