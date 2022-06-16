<html>
<head>
	<title>Media</title>
	<link rel="stylesheet" type="text/css" href="css/BUYNOW.css">

</head>

<body a link="black" vlink="Black">
	<header>

		<div class="header1">
			<a href="https://www.playstation.com/en-us/"><img class="image" src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/07/ps4.png"></a>
			<a href="https://www.naughtydog.com/"><img class="image1" src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/07/naughty-dog.png"></a>
			<a href="https://www.playstation.com/en-us/"><img class="image2" src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/07/only-on-ps.png">
			</a>
		</div>
		<div class ="main">
			
			<ul>
			<nav>
			<li class="active"><b><a href="index2.html"><img src="https://www.unchartedthegame.com/wp/wp-content/themes/uncharted/assets/images/logo.png" ></a></b></li>
			<li><a href="game.html">GAME</a></li>
			<li><a href="news.html">NEWS</a></li>
			<li><a href="survival.html">SURVIVAL</a></li>
			 <li><a href="services.php">OUR SERVICES</a></li>
			<li><a href="FAQS.html">FAQS</a></li>
			<li><a href="Patch.html">PATCH NOTES</a></li>
			<li class="login"><a href="user_record\user_login.html">LOGIN/REGISTER</a></li>
			 <li><a href="Developer.php">DEVELOPERS INFO</a></li>
			</nav>
			</ul>				
			</div>

			
		</header>

		<div class="ps4">
			<?php
				$host ="localhost";
				$db_user_name="root";
				$db_password='';
				$db_name = 'bsse_4a';
				$db_connection = mysqli_connect($host, $db_user_name, $db_password, $db_name);
				$qry = "SELECT id,pname,description,price,Image_name FROM product";
				$data= mysqli_query($db_connection,$qry);
				Echo "<center><br><br><br><table align='center' border='1px' cellspacing='0px'>";
				Echo "<tr><th>Product</th><th>Product Description</th><th>Price</th><th>Picture</th><th></th></tr>";	
				while($data_view = mysqli_fetch_assoc($data)){
				Echo "<tr><td align='center'> ".$data_view['pname']."</td>
					  <td align='center'>".$data_view['description']."</td>
					  <td align='center'>".$data_view['price']."</td>
		              <td align='center'><img src='upload/".$data_view['Image_name']."' height='3%' width='40px'></td>
					  <td align='center'><button type='button' class='button1' ><a href='order.php ? id=".$data_view['id']."'>BUY</a></button></td></tr><center>";
				}
			?>

		</div>
</body>
</html>