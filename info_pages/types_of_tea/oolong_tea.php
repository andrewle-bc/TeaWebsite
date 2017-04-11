<?php
	include (dirname(__DIR__).'/../functions.php');
	require_once (dirname(__DIR__).'/../config.php');
	session_start();

?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SereniTEA - Oolong Tea</title>
		<link rel="stylesheet" href="../../alt.css">
	</head>

	<body>
	
	<!--Header-->
		<header>
			<div id="header_interior">
					<img id="indexCover" src="../../img/infoPage.png" alt="contactUsBanner"><!--placeholder logo-->
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
						<li><a href="info_page.php">Tea Producers</a></li>
						<li><a href="info_page.php">How is Tea Produced</a></li>
						<li><a href="steeping_methods.php">Steeping Methods</a></li>
						<li><a href="info_page.php">The History of Tea</a></li>
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
			<div id="breadcrumbs"> <!-- information page -->
				<ul>
					<li><a href="../../index.php">Home</a> &nbsp; ></li> 
					<li><a href="../../info_main.php">Information</a> &nbsp; ></li>
					<li class="lastcrumb">Oolong Tea</li>
				</ul>
			</div>
			
			<div id="wrapper">
					
				<div class="info_heading">
				<h1>
					Oolong Tea
				</h1>
				<hr>
				</div>
				
				<div class="info_content">
					<div class="info_image">
						<img src="../../img/article_banner.jpg" alt="Info picture">
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
				</div>
			</div>
		</main>	

		<footer>
			<div id="footer-inner">
				<ul class="footer-content">
					<li><a href="../../site_map.php">Sitemap</a></li>
					<li><a href="../../contact.php">Feedback</a></li>
					<li>&copy; Copyright</li>
					
					<!--Social Media Links-->
					<li><a href="https://www.facebook.com/"><img src="../../img/facebook.jpg" alt="facebook"></a></li>
					<li><a href="https://www.instagram.com/"><img src="../../img/instagram.jpg" alt="facebook"></a></li>
					<li><a href="https://www.twitter.com/"><img src="../../img/twitter.jpg" alt="facebook"></a></li>
				</ul>
			</div>
		</footer>
    	
	</body>