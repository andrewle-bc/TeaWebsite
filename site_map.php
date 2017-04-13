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
		<title>SereniTEA - Test Information Page</title>
		<link rel="stylesheet" href="alt.css">
		<link rel="icon" href="img/icon.png" type="image/gif" sizes="16x16">
	</head>

	<body>
	
	<!--Header-->
		<header>
			<div id="sitemapHeader">
					<h1 id="bannerHeaderSmall">Site Map</h1>
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
			<div id="breadcrumbs"> <!-- types of tea page -->
        	<ul>
            	<li><a href="index.php">Home</a> &nbsp; ></li>
            	<li class="lastcrumb">Sitemap</li>
        	</ul>   
    	</div>

			<div id="wrapper">
				<h1>Site map</h1>
				<div class="site_map_content" id="sm_left">
					<hr>
					<h3><a href="index.php">Home</a></h3>
					<br>
					<h3><a href="info_main.php">Information</a></h3>
					<ul>
						<li><a href="info_main.php">Types of Tea</a> </li>
							<ul>
								<li><a href="info_pages/types_of_tea/green_tea.php">
								Green Tea</a></li>
								<li><a href="info_pages/types_of_tea/black_tea.php">
								Black Tea</a></li>
								<li><a href="info_pages/types_of_tea/white_tea.php">
								White Tea</a></li>
								<li><a href="info_pages/types_of_tea/oolong_tea.php">
								Oolong Tea</a></li>
								<li><a href="info_pages/types_of_tea/other_teas.php">
								Other Teas</a></li>

							</ul>
						<li><a href="info_pages/tea_location.php">Tea Producers</a></li>
						<li><a href="info_pages/tea_production.php">How is Tea Produced?</a></li>
						<li><a href="info_pages/brewing_method.php">Brewing Methods</a></li>
						<li><a href="info_pages/tea_history.php">The History of Tea</a> </li>
						
						
					</ul>
				</div>
				
				<div class="site_map_content" id="sm_right">
					<hr>
					<h3><a href="forum.php">Forum</a></h3>
					<br>
					<h3><a href="about.php">About us</a></h3>
					<br>
					<h3><a href="contact.php">Contact us</a></h3>
					<br>
					<h3><a href="register.php">Register/Sign</a></h3>
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