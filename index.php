<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	$tbl_name="topic"; // Table name
?>


<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SereniTEA - Home</title>
		<link rel="stylesheet" href="base.css">
		<link rel="stylesheet" href="slideshow.css">
		<script src="swipe_support.js"></script><!-- for swipe support on touch interfaces -->
        <script src="slideshow.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="javaFuncIND.js"></script>

	</head>

	<body>
	

			<div class="bss-slides">
				<figure>
					<a href="articles/health_benefits.php"><img class="indexCover" src="img/slideShow1.jpg"/>
					<figcaption>
						<h1>The Various Health Benefits of Tea</h1>
						<h3>Author McWriterguy</h3>
					</figcaption> </a>
				 </figure>
				 <figure>
					<a href="articles/tea_traditions.php"><img class="indexCover" src="img/slideShow2.png"/>
					<figcaption>
						<h1>Tea Traditions from Around the World</h1>
						<h3>Author McWriterguy</h3>
					</figcaption> </a>
				 </figure>
				 <figure>
					<a href="articles/food_pairings.php"><img class="indexCover" src="img/slideShow3.jpg"/>
					<figcaption>
						<h1>The Perfect Match: Tea and Food Pairings</h1>
						<h3>Author McWriterguy</h3>
					</figcaption> </a>
				</figure>
			 </div> <!-- end of slide show container -->


	
		<!--Navbar -->	
		
		<nav id="stickyNav">
			<img id ="logo" class ="logo" src="img/logo.png" alt="logo"><!--placeholder logo-->
			<h1 id="logoTitle" class = "logoTitle">SereniTEA</h1>
			<ul id="navList">
				<li><a href="index.php">Home</a></li>
				<li class="infoDropSticky"><a href="info_main.php">Information</a><!--Class to activate drop down menu-->
					<ul id="dropDown" class="infoDropContentSticky"><!--Drop down menu contents -->
						<li><a href="info_main.php">Types of Tea</a></li>
						<li><a href="info_page.php">The History of Tea</a></li>
						<li><a href="info_page.php">Tea Producers</a></li>
						<li><a href="steeping_methods.php">Steeping Methods</a></li>
					</ul>
				</li>
				<li><a href="forum.php">Forum</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<?php
				if (isLoggedIn()){
					echo '<li><span class="user">User: '.$_SESSION['SESS_FIRST_NAME'].'</span><a href="logout.php" class="logout">|Logout</a></li>';
				} else {
					echo '<li class="sign-in"><a href="register.php">Register/Sign In</a></li>'; 
				}
				?>
				
				
				<li>
					<form>
					<input type="text" placeholder="Search..">
					</form>
				</li>
			</ul>
		</nav>
		
		<main>
			
        
       <script>
            var opts = {
                auto : {
                speed : 3500, 
                pauseOnHover : true
            },
                fullScreen : false, 
                swipe : true
            };
            makeBSS('.bss-slides', opts);
        </script> 
			<div id="wrapper">
				<div class="index_article" id="index_left">
					<a href="articles/health_benefits.php">
						<h2>The Various Health Benefits of Tea</h2>
						<h5>by Author McWriterguy</h5>
						<div class="index_article_img">
						<img src="img/tea_pour.jpg" alt="portrait">
						</div>
					</a>
						<div class="index_article_text">
						<p>Aenean ornare pretium nunc a tincidunt. Proin ut fermentum leo, non 
						eleifend neque. Vivamus porta lobortis leo, non efficitur lacus volutpat
						id. Vestibulum iaculis nulla quis lectus venenatis sodales vel a enim. 
						Maecenas vel tempus est, elementum faucibus arcu.</p>
						</div>
				</div>
				
				<div class="index_article" id="index_right">
					<a href="articles/food_pairings.php?id=420">
						<h2>The Perfect Match: Food and Tea Pairings</h2>
						<h5>by Author McWriterguy</h5>
						<div class="index_article_img">
						<img src="img/chamomile.jpg" alt="portrait">
						</div>
					</a>
						<div class="index_article_text">
						<p>Aenean ornare pretium nunc a tincidunt. Proin ut fermentum leo, non 
						eleifend neque. Vivamus porta lobortis leo, non efficitur lacus volutpat
						id. Vestibulum iaculis nulla quis lectus venenatis sodales vel a enim. 
						Maecenas vel tempus est, elementum faucibus arcu.</p>
						</div>
				</div>
				<div class="anchor">
				</div>
			</div>
		</main>

		<footer>
			<div id="footer-inner">
				<ul class="footer-content">
					<li><a href="site_map.php">Sitemap</a></li>
					<li><a href="contact.php">Feedback</a></li>
					<li>&copy; Copyright</li>
					
					<!--Social Media Links-->
					<li><a href="https://www.facebook.com/"><img src="img/facebook.jpg" alt="facebook"></a></li>
					<li><a href="https://www.instagram.com/"><img src="img/instagram.jpg" alt="facebook"></a></li>
					<li><a href="https://www.twitter.com/"><img src="img/twitter.jpg" alt="facebook"></a></li>
				</ul>
			</div>
		</footer>
	
	</body>