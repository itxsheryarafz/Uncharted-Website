
<?php
	include('db.php');
	$Name = $_POST['fname'];
	$cnic = $_POST['cnic'];
	$e_mail = $_POST['e-mail'];
	$username = $_POST['uname'];
	$password = $_POST['upass'];
	$name = $_FILES['file']['name'];
	$target_dir = "upload/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$extensions_arr = array("jpg","jpeg","png","gif");
	if( in_array($imageFileType,$extensions_arr) ){
	$sql = "INSERT INTO users VALUES ('$Name','$username','$password','$e_mail','$cnic','".$name."')"  ;
	$results = mysqli_query($db_connection,$sql);
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
	}

	if($db_connection){
		Echo '';	
	}
	Echo "
	</td></tr>
	<tr><th>Data Status : </th>";
	if($results){	
		Echo "<td colspan='2'>".'Data Saved';
		header("Location: user_login.html");
	}
	else{
		Echo "<td>".'Data Not Saved'."</td><td>".mysqli_error($db_connection);
		header("Location: signup.html");
	}
	
?>		
