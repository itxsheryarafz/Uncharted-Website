<html>
<head>
	<title>Game</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body a link="black" vlink="white" text="white">
	<div class="section">
	<header>
		<div class="header1">
			<a href="https://www.playstation.com/en-us/"><img class="image" src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/07/ps4.png"></a>
			<a href="https://www.naughtydog.com/"><img class="image1" src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/07/naughty-dog.png"></a>
			<a href="https://www.playstation.com/en-us/"><img class="image2" src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/07/only-on-ps.png"></a>
		</div>
		 <video muted autoplay loop >
                <source src="https://s3-us-west-1.amazonaws.com/nd.videos/uncharted__homepage.mp4">
                Your browser does not support the <code>video</code> element.
            </video>
      

			<div class ="main">
			
			<ul>
			<nav>
			<li class="active"><b><a href="index2.html"><img src="https://www.unchartedthegame.com/wp/wp-content/themes/uncharted/assets/images/logo.png" ></a></b></li>
			<li><a href="game.php">GAME</a></li>
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

				<div class="title">
					<br>
					<br>
					<h1 class ="unchart"><img src="http://www.unchartedthegame.com/wp/wp-content/uploads/2015/05/UnchartedCollectionLogo_585x169-300x87.png"></h1>
					<br>
					<br>
					<h1 class="power"><center>AVAILABLE NOW</center></h1>
<br>
<br>
					<center class="button">
						<button>
						<a href="BUYNOW.php">	<h1>   BUY NOW
							</h1>
							</a>
						</button>
						</center>
				</div>
								
	</header>
</div>
<div class="slider">
		<figure>
			<?php
				$host ="localhost";
				$db_user_name="root";
				$db_password='';
				$db_name = 'bsse_4a';
				$db_connection = mysqli_connect($host, $db_user_name, $db_password, $db_name);
				$qry = "SELECT pname FROM product";
				$data= mysqli_query($db_connection,$qry);
				while($data_view = mysqli_fetch_assoc($data)){
					echo "<div class='slide'>
					<h1>	".$data_view['pname']."</h1>
						</div>";
				}
			?>
		</figure>
	</div>
	<div class="Sherry">
		<div class="text">
			<p>BUY NOW</p>
			<h7><center>UNCHARTED:THE NATHAN DRAKE</center></h7>
			<h7><center>COLLECTION</center></h7>
		</div>
		
		<div class="ps4">
		<div class="img5">
			<img src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/04/CS_SW_UC_COLL_PCKFRNT_FRONT_003_NO_BURST.png">
		</div>
			<center class="button">
						<button>
						<a href="BUYNOW.php">	<h1>BUY NOW
							</h1> </a>
						</button>
						</center>						
		</div>


	</div>

<footer id="footer">	
<div class="container">
<div class="text-center">
	
<img src="https://www.unchartedthegame.com/wp/wp-content/themes/uncharted/assets/images/footer-logo.png" class="img-responsive center-block footer-logo" width="359" height="59">
<section class="footer-social">
	
                Connect with Naughty Dog            

<img src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/05/footer-only-ps.png" srcset="/wp/wp-content/uploads/2015/05/footer-only-ps@2x.png 2x" alt="Only on Playstation" class=" center-block " width="246">

</section>
</div>
<nav id="footer-nav">        
<ul class="list-unstyled list-inline">
                    <li >
                <a href="https://www.playstation.com/en-us/legal/terms-of-use/" title="Terms of Use">
                    Terms of Use
                </a>
            </li>
                                <li >
                <a href="https://www.playstation.com/network/legal/privacy-policy/"  title="Privacy Policy">
                    Privacy Policy
                </a>
            </li>
                                <li >
                <a href="https://www.playstation.com/en-us/network/legal/privacy-policy/#your-california-privacy-rights-and-do-not-track" title="California Privacy Rights">
                    California Privacy Rights
                </a>
            </li>
                                <li>
                <a href="https://support.playstation.com/s/?language=en_US"  title="Playstation Support">
                    Playstation Support
                </a>
            </li>           
    </ul>
</nav>
<section id="logos-legal">
            <div class="table-wrap">
                <div class="table-cell">
                    <div class="table-wrap">
                        <div class="table-cell">
                            <a href="https://www.playstation.com/en-us/" >
                                <img src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/08/footer-ps1.png" alt="Playstation" width="78">
                            </a>
                        </div>
                        <div class="table-cell">

                            <a href="https://www.naughtydog.com/">
                                <img src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/05/footer-nd.png" srcset="/wp/wp-content/uploads/2015/05/footer-nd@2x.png 2x" alt="Naughty Dog" width="210">
                            </a>
                        </div>                   
                    </div>              
                </div>
                <div class="table-cell">
                    <div class="table-wrap">
                        <div class="table-cell">
                                                        <a href="http://www.esrb.org/confirm/scea-confirmation.jsp">
                                <img src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/04/1498268123.589.jpg" alt="" width="">
                            </a>
                        </div>
                        <div class="table-cell">
                            <a href="https://www.esrb.org/EPCConfirm/901/" >
                                <img src="https://www.unchartedthegame.com/wp/wp-content/uploads/2015/05/esrb.jpg" alt="ESRB Privacy Certified Logo" width="76">
                            </a>

                        </div>
                    </div>                    
                </div>     
            </div>
        </section>

<section class="disclaimer">

            ©2007-2018 Sony Interactive Entertainment LLC.&nbsp;&nbsp;UNCHARTED 4 A Thief’s End, UNCHARTED The Nathan Drake Collection, UNCHARTED Drake’s Fortune, UNCHARTED 2 Among Thieves, and UNCHARTED 3 Drake’s Deception are trademarks of Sony Interactive Entertainment LLC.&nbsp; "PlayStation" and the "PS" Family logo are registered trademarks of Sony Interactive Entertainment Inc.

        </section>
</div>
</footer>


</body>
</html>