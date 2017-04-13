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
		<title>SereniTEA - Test Article</title>
		<link rel="stylesheet" href="alt.css">
		<link rel="icon" href="img/icon.png" type="image/gif" sizes="16x16">
	</head>

	<body>
	
	<!--Header-->
		<div id="nullHeader">
		</div>
	
			
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
			<div id="breadcrumbs"> <!-- news articles page -->
				<ul>
					<li><a href="index.php">Home</a> &nbsp; ></li>
					<li class="lastcrumb">News Articles</li>
				</ul>    
			</div>
			<div id="wrapper">
				<article id="article_body">
					<h2 id="article_title">
					Titles should be fairly long to at least fill up the width
					of the page to draw attention.
					</h2>
					
					<div id="article_banner">
						<img src="img/article_banner.jpg" alt="article_banner">
						<h5>Image credits:<a href="https://www.flickr.com/people/vanderdecken/">
						Vanderdecken</a>
						</h5>
					</div>
					
					<hr>
					
					<div id="article_author">
						<h4>
						<a href="about.html">Name (links to forum profile or about page)</a>
						<br>
						date and time
						</h4>
					</div>
					
					<hr>
					
					<div id="article_content">
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Phasellus tempor, arcu et sagittis elementum, mi quam ultricies tortor, 
						a lacinia urna diam et dolor. Nulla vitae enim non dolor aliquet 
						efficitur at non felis. Morbi non felis sit amet felis mollis malesuada 
						sed quis neque. Nunc auctor dolor ut ex rhoncus volutpat sit amet 
						quis felis.
						</p>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Phasellus tempor, arcu et sagittis elementum, mi quam ultricies tortor, 
						a lacinia urna diam et dolor. Nulla vitae enim non dolor aliquet 
						efficitur at non felis. Morbi non felis sit amet felis mollis malesuada 
						sed quis neque. Nunc auctor dolor ut ex rhoncus volutpat sit amet 
						quis felis.
						</p>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Phasellus tempor, arcu et sagittis elementum, mi quam ultricies tortor, 
						a lacinia urna diam et dolor. Nulla vitae enim non dolor aliquet 
						efficitur at non felis. Morbi non felis sit amet felis mollis malesuada 
						sed quis neque. Nunc auctor dolor ut ex rhoncus volutpat sit amet 
						quis felis.
						</p>
					</div>
					<hr>
					<div id="article_comments">
						<h3>
						Comment Section. will JS
						</h3>
						<h4>userID</h4>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						</p>
						<h4>userID</h4>
						<p>
						Phasellus tempor, arcu et sagittis elementum, mi quam ultricies tortor, 
						a lacinia urna diam et dolor.
						</p>
						<h4>userID</h4>
						<p>
						Nulla vitae enim non dolor aliquet efficitur at non felis.
						</p>
					</div>
				</article>
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