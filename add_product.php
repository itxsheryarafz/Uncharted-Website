
<?php
	include('db.php');
	$product = $_POST['Pname'];
	$des = $_POST['description'];
	$price = $_POST['price'];
	$name = $_FILES['file']['name'];
	$target_dir = "upload/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$extensions_arr = array("jpg","jpeg","png","gif");
	if( in_array($imageFileType,$extensions_arr) ){
	$sql = "INSERT INTO product ( `Pname`, `description`, `price`, `Image_name` ) VALUES ('$product','$des','$price','".$name."')"  ;

	$results = mysqli_query($db_connection,$sql);
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
	}
	Echo "<br><br><br><table align='center' border='0px' height='300px' width='700px' cellspacing='0px'>
	<tr><th colspan='3'><h1>Sign Up Check</h1></th></tr>
	<tr><th>#</th><th>Status</th><th>Error</th></tr>
	";
	if($db_connection){
		Echo 'Connected Succesfully';	
	}
	Echo "
	</td></tr>
	<tr><th>Data Status : </th>";
	if($results){	
		Echo "<td colspan='2'>".'Data Saved';
		header("Location: homepage.php");
	}
	else{
		Echo "<td>".'Data Not Saved'."</td><td>".mysqli_error($db_connection);
		header("Location: add_product.php");
	}
	
?>		
