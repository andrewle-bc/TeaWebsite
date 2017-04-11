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
		<title>SereniTEA - Steeping Methods</title>
		<link rel="stylesheet" href="alt.css">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="javaFunc.js"></script>
	</head>

	<body>
	
	<!--Header-->
		<header>
			<div class="fadein">
				<p><img src="img/steepingMethod1.png"></p>
				<p><img src="img/steepingMethod2.png"></p>
    			<p><img src="img/steepingMethod3.jpg"></p>
			</div>
		</header>
	
		<!--Navbar  that stays fixed at top of screen.
		Basically had to create two nav bars, one of which (stickyNav) is hidden
		underneath the banner until the user scrolls past the first nav bar. There's an easier way to 
		do this with JavaScript but I don't know how yet. I will change the code
		after I learn how. For now, this accomplishes the same thing. Would be 100x easier to have the nav
		bar above the banner apparently but whatever.-->	
		
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

		<!--Second Navbar that displays underneath the banner and disappears in normal
		flow to be replaced in viewport by the stickyNav.-->
	

		<main>
			<div id="breadcrumbs"> <!-- information page -->
				<ul>
					<li><a href="index.php">Home</a> &nbsp; ></li> 
					<li><a href="info_main.php">Information</a> &nbsp; ></li>
					<li class="lastcrumb">Steeping Methods</li>
				</ul>
			</div>
			
			<div id="wrapper">
				<div class="info_heading">
				<h1>
					steeping methods heading
				</h1>
				<hr>
				</div>
				
				<div class="info_content">
					<div class="steep_image">
						<img src="img/article_banner.jpg" alt="Info picture">
						<h5>Image credits:<a href="https://www.flickr.com/people/vanderdecken/">
						Vanderdecken</a></h5>
						<hr>
					</div>
					
					<div class="info_text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Phasellus tempor, arcu et sagittis elementum, mi quam ultricies tortor, 
						a lacinia urna diam et dolor. Nulla vitae enim non dolor aliquet 
						efficitur at non felis. Morbi non felis sit amet felis mollis malesuada 
						sed quis neque. Nunc auctor dolor ut ex rhoncus volutpat sit amet 
						quis felis. </p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Phasellus tempor, arcu et sagittis elementum, mi quam ultricies tortor, 
						a lacinia urna diam et dolor. Nulla vitae enim non dolor aliquet 
						efficitur at non felis. Morbi non felis sit amet felis mollis malesuada 
						sed quis neque. Nunc auctor dolor ut ex rhoncus volutpat sit amet 
						quis felis. </p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Phasellus tempor, arcu et sagittis elementum, mi quam ultricies tortor, 
						a lacinia urna diam et dolor. Nulla vitae enim non dolor aliquet 
						efficitur at non felis. Morbi non felis sit amet felis mollis malesuada 
						sed quis neque. Nunc auctor dolor ut ex rhoncus volutpat sit amet 
						quis felis. </p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Phasellus tempor, arcu et sagittis elementum, mi quam ultricies tortor, 
						a lacinia urna diam et dolor. Nulla vitae enim non dolor aliquet 
						efficitur at non felis. Morbi non felis sit amet felis mollis malesuada 
						sed quis neque. Nunc auctor dolor ut ex rhoncus volutpat sit amet 
						quis felis. </p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Phasellus tempor, arcu et sagittis elementum, mi quam ultricies tortor, 
						a lacinia urna diam et dolor. Nulla vitae enim non dolor aliquet 
						efficitur at non felis. Morbi non felis sit amet felis mollis malesuada 
						sed quis neque. Nunc auctor dolor ut ex rhoncus volutpat sit amet 
						quis felis. </p>
					</div>
					<!--Steeping time table-->
					<table id="steepTimeTable"> 
							<tr class="tableData">
								<th>Type of Tea</th>
								<th>Amount</th>
								<th>Steeping Time</th>
								<th>Water Temperature <br>(for 6-8oz of water)</th>
							</tr>
							<tr class="tableData">
								<td>White</td>
								<td>2-3 tsps</td>
								<td>3 minutes</td>
								<td>176&deg; - 185&deg; F / 80&deg; - 85&deg; C</td>
							</tr>
							<tr class="tableData">
								<td>Green</td>
								<td>1-2 tsps</td>
								<td>1-3 minutes</td>
								<td>176&deg; - 185&deg; F / 80&deg; - 85&deg; C</td>
							</tr>
							<tr class="tableData">
								<td>Oolong</td>
								<td>2-3 tsps</td>
								<td>2-3 minutes</td>
								<td>185&deg; - 203&deg; F / 85&deg; - 95&deg; C</td>
							</tr>
							<tr class="tableData">
								<td>Black</td>
								<td>1-2 tsps</td>
								<td>3-5 minutes</td>
								<td>203&deg; F / 95&deg; C</td>
							</tr>
							<tr class="tableData">
								<td>Herbal</td>
								<td>1-2 tsps</td>
								<td>3 minutes</td>
								<td>212&deg; F / 100&deg; C</td>
							</tr>
					</table>
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