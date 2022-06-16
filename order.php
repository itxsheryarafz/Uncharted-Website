
<html>
<head>
	<title>Media</title>
<link rel="stylesheet" type="text/css" href="css/order11.css">

</head>
<body>
<form class="box" action="Payment.php" method="post">
<h1>Order Details</h1>
<?php
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
}
else
{
	ECHO "NOT SHOWN";
}
$host ="localhost";
				$db_user_name="root";
				$db_password='';
				$db_name = 'bsse_4a';
				$db_connection = mysqli_connect($host, $db_user_name, $db_password, $db_name);
				$qry = "SELECT price,pname,description FROM product WHERE id='$id'";
				$data= mysqli_query($db_connection,$qry);
					

				while($data_view = mysqli_fetch_assoc($data))
				{
					$pname=$data_view['pname'];
					$desc=$data_view['description'];
					$pri=$data_view['price'];
				}

?>
<input type="text" name="" placeholder="ProductName" readonly=" "value="<?php ECHO"$pname"?>">
<input type="text" name="" placeholder="ProductDescriprion"  readonly=" "value="<?php ECHO"$desc"?>">
<input type="text" name="" placeholder="Price"  readonly=" "value="<?php ECHO"$pri"?>">
<input type="submit" name="" value="Submit">
</form>
</body>
</html>
