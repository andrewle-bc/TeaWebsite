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
			<div id="aboutHeader">
					<h1 id="bannerHeaderSmall">FAQ</h1>
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
			<div id="breadcrumbs"> <!-- about page -->
				<ul>
					<li><a href="index.php">Home</a> &nbsp; ></li>
					<li class="lastcrumb">About<li>
				</ul>   
			</div>
		
			<div id="wrapper">
			
				<div class="about_author" id="Segal">
					<div class="about_portrait">
						<img src="img/Segal.jpg" alt="Protrait">
					</div>
					<div class="about_content"> <!--this div is important divide up the left and right floats-->
						<div class="about_description">
							<p>
							<strong>Segal Au</strong>
							<br><br>
							Hi! My name is Segal and I am a living bird meme. I am the best hearthstone player in CST, my highest was <em><u>rank 17</u></em> (so almost Legend.) I enjoy long walks on the beach, and I frequency fly to nearby boats.
							</p>
						</div>
					</div>
					<div class="anchor"><!--this div is important anchor the left and right floats-->
					</div>
				</div>
				
				<div class="about_author" id="Jeff">
					<div class="about_portrait">
						<img src="img/Jeff.jpg" alt="Protrait">
					</div>
					<div class="about_content"> <!--this div is important divide up the left and right floats-->
						<div class="about_description">
							<p>
							<strong>Joof Choy</strong>
							<br><br>
							Jeff is a computing student at BCIT. He has a degree in Political Science from the University of British Columbia. He is interested in basketball, politics and hip-hop. He is an avid Kanye defender.

							</p>
						</div>
					</div>
					<div class="anchor"><!--this div is important anchor the left and right floats-->
					</div>
				</div>
					
				<div class="about_author" id="Andrew">
					<div class="about_portrait">
						<img src="img/portrait.png" alt="Protrait">
					</div>
					<div class="about_content"> <!--this div is important divide up the left and right floats-->
						<div class="about_description">
							<p>
							<strong>Andrew Le</strong>
							<br><br>
							Andrew has actually reached the rank of <em>Legend</em> in hearthstone.
							</p>
						</div>
					</div>
					<div class="anchor"><!--this div is important anchor the left and right floats-->
					</div>
				</div>
					
				<div class="about_author" id="Jenny">
					<div class="about_portrait">
						<img src="img/Jenny.jpg" alt="Protrait">
					</div>
					<div class="about_content"> <!--this div is important divide up the left and right floats-->
						<div class="about_description">
							<p>
							<strong>Jenny Ly</strong>
							<br><br>
							I'm Jenny and I'm a first year CST student. The highlight of my year is finishing the website for web development. Thank god it's completed!
							</p>
						</div>
					</div>
					<div class="anchor"><!--this div is important anchor the left and right floats-->
					</div>
				</div>
				
				<div class="about_author" id="Setareh">
					<div class="about_portrait">
						<img src="img/Setareh.jpg" alt="Protrait">
					</div>
					<div class="about_content"> <!--this div is important divide up the left and right floats-->
						<div class="about_description">
							<p>
							<strong>Setareh Shir Koobi</strong>
							<br><br>
							Setareh Shir-Koobi is Iranian and has a naturally passion for tea. She has a background in graphic design and is currently studying web development. Her strengths are Adobe Photoshop, Adobe InDesign, Adobe Illustrator, and programming languages such as, HTML, CSS, and JavaScript.
							</p>
						</div>
					</div>
					<div class="anchor"><!--this div is important anchor the left and right floats-->
					</div>
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