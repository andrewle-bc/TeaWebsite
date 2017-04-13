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
		<title>SereniTEA - Contact Us</title>
        <link rel="stylesheet" href="alt.css">
		<script src="validation.js"></script>
	</head>

	<body>
	
	<!--Header-->
		<header>
		<div id="contactHeader">
					<h1 id="bannerHeaderSmall">Contact</h1>
			</div>
		</header>
	
		
		<nav id="stickyNav">
			<div id ="logoBox">
			<img id ="logo" src="img/logo.png" alt="logo"><!--placeholder logo-->
			<h1 id="logoTitle">SereniTEA</h1>
			</div>
			<ul id="navList">
				<li><a href="index.php">Home</a></li>
				<li class="infoDropSticky"><a href="info_main.php">Information</a><!--Class to activate drop down menu-->
					<ul id="dropDown" class="infoDropContentSticky"><!--Drop down menu contents -->
						<li><a href="info_main.php">Types of Tea</a></li>
						<li><a href="info_pages/tea_location.php">Tea Producers</a></li>
						<li><a href="info_pages/tea_production.php">How is Tea Produced</a></li>
						<li><a href="info_pages/brewing_method.php">Brewing Methods</a></li>
						<li><a href="info_pages/tea_history.php">The History of Tea</a></li>
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
			<div id="breadcrumbs"> 
				<ul>
					<li><a href="index.php">Home</a> &nbsp; ></li>
					<li class="lastcrumb">Contact Us</li>
				</ul>    
			</div>
			
			<div id="wrapper">
				<div class="contact_left"> 
					<h2>Contact us</h2>
					<h3>Headquarter Address</h3>
					<p>3700 Willingdon Avenue Burnaby, BC, V5G 3H2</p>
					<h3>Phone Number</h3>
					<p>604-123-2345</p>
					<h3>Email</h3>
					<p>contact.us@email.com</p>
				</div>
	
				<div class="contact_right" id="contactform">
					<h2>Leave a Message</h2>
					<form method="post" onsubmit="return checkFormContact()" action="formmail.php">
					
						<label for="name"><h4>Your Name</h4></label>
						<input id="name" type="text" name="name" >
						<span class="confirmMessage" id="confirmMessageName"></span>
					
						<label for="email"><h4>Your Email</h4></label>
						<input id="email" type="text" name="email">
						<span class="confirmMessage" id="confirmMessageEmail"></span>
					
						<label for="subject"><h4>Subject</h4></label>
						<input id="subject" type="text" name="subject">
						<span class="confirmMessage" id="confirmMessageSubject"></span>
					
						<label for="comment"><h4>Message</h4></label>
						<textarea id="comment" name="comment" rows="10"></textarea>
						<span class="confirmMessage" id="confirmMessageComment"></span>
					
					<br><br>
					<input id="submit" type="submit" value="Send">
					<input type="hidden" name="recipients" value="andrewle.bc@gmail.com" />
					<input type="hidden" name="subject" value="SereniTEA Contact" />
					<input type="hidden" name="good_url" value="contactthankyou.php" />
					</form>
				
					<!-- business inquiries, opportunities, marketing --> 
				</div>
				<div class="anchor"></div>
				<br>
				<div id="map" style="width:100%;height:400px"></div>

				<script>
				function myMap() {
					var myCenter = new google.maps.LatLng(49.248918,-123.000955);
					var mapCanvas = document.getElementById("map");
					var mapOptions = {center: myCenter, zoom: 14};
					var map = new google.maps.Map(mapCanvas, mapOptions);
					var marker = new google.maps.Marker({position:myCenter});
					marker.setMap(map);
				}
				</script>

				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQIsOF-qvPvNxi90HT5VMXjhPgx8xHl7w&callback=myMap"></script>
				<br>
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