

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/homepagestyle.css">
	<title></title>

</head>
<body>
	<h1 align="center">Product Record</h1>
</body>
</html>

<?php
	include('db.php');
	$qry = "SELECT * FROM product";
	$data= mysqli_query($db_connection,$qry);
	Echo "<br><br><br><table align='center' border='1px' cellspacing='0px'>";
	Echo "<tr ><th>ID</th><th>Product_Name</th><th>Price</th><th>Description</th><th>Image</th><th>Edit</th><th>Delete</th></tr>";	
	while($data_view = mysqli_fetch_assoc($data)){
		Echo "
		<td align='center'>".$data_view['id']."</td>
		<td align='center'>".$data_view['Pname']."</td>
		<td align='center'>".$data_view['price']."</td>
		<td align='center'>".$data_view['description']."</td>
		<td align='center'><img src='upload/".$data_view['Image_name']."' height='3%' width='40px'></td><td align='center'>
		
		<a href='update.php?n=$data_view[Pname] &
		pp=$data_view[price] &
		d=$data_view[description] &
		i=$data_view[id] '>Update</a></td>

		<td><a href='delete.php?n=$data_view[Pname] &
		pp=$data_view[price] &
		d=$data_view[description] &
		i=$data_view[id]'><div class='delete'>Delete</div></a></td></tr>";
	}
?>
<html>
<head>
</head>
<body>

<a href="http://localhost/uncharted/Admin%20pannel/pannel.php"><div class='back'><button> Back</button> </div></a>	
<a href="add_product.html"><div class='back'><button> Add Record</button> </div></a>
</body>
</html>