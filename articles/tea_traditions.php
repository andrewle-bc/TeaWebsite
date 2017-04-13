<?php
	include (dirname(__DIR__).'/functions.php');
	require_once (dirname(__DIR__).'/config.php');
	session_start();

?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SereniTEA - Tea Traditions from Cultures Around the World</title>
		<link rel="stylesheet" href="../alt.css">
	</head>

	<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<!--Header-->
		<div id="nullHeader">
		</div>
		
		<nav id="stickyNav">
			<div id ="logoBox">
			<img id ="logo" src="../img/logo.png" alt="logo"><!--placeholder logo-->
			<h1 id="logoTitle">SereniTEA</h1>
			</div>
			<ul id="navList">
				<li><a href="../index.php">Home</a></li>
				<li class="infoDropSticky"><a href="../info_main.php">Information</a><!--Class to activate drop down menu-->
					<ul id="dropDown" class="infoDropContentSticky"><!--Drop down menu contents -->
						<li><a href="../info_main.php">Types of Tea</a></li>
						<li><a href="../info_pages/tea_location.php">Tea Producers</a></li>
						<li><a href="../info_pages/tea_production.php">How is Tea Produced</a></li>
						<li><a href="../info_pages/brewing_method.php">Brewing Method</a></li>
						<li><a href="../info_pages/tea_history.php">The History of Tea</a></li>
					</ul>
				</li>
				<li><a href="forum.php">Forum</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<?php
				if (isLoggedIn()){
					echo '<li><span class="user">User: '.$_SESSION['SESS_FIRST_NAME'].'</span><a href="logout.php" class="logout">|Logout</a></li>';
				} else {
					echo '<li class="sign-in"><a href="../register.php">Register/Sign In</a></li>'; 
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
					<li><a href="../index.php">Home</a> &nbsp; ></li>
					<li class="lastcrumb">Tea Traditions from Cultures Around the World</li>
				</ul>    
			</div>
			<div id="wrapper">
				<article id="article_body">
					<h2 id="article_title">
					Tea Traditions from Cultures Around the World
					</h2>
					
					<div id="article_banner">
						<img src="../img/slideShow2.png" alt="article_banner">
						
					</div>
					
					<hr>
					
					<div id="article_author">
						<h4>
						<a href="../about.php">Name (links to forum profile or about page)</a>
						<br>
						date and time
						</h4>
						<span class="fb-share-button" data-href="http://students.bcitdev.com/A01013921/G20/articles/tea_traditions.php" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fstudents.bcitdev.com%2FA01013921%2FG20%2Farticles%2Farticle.html&amp;src=sdkpreparse">Share</a></span>
						<a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
						<span class="g-plusone" data-annotation="none"></span>
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
					
				</article>
			</div>
		</main>		
		
		<footer>
			<div id="footer-inner">
				<ul class="footer-content">
					<li><a href="../site_map.php">Sitemap</a></li>
					<li><a href="../contact.php">Feedback</a></li>
					<li>&copy; Copyright</li>
					
					<!--Social Media Links-->
					<li><a href="https://www.facebook.com/"><img src="../img/facebook.jpg" alt="facebook"></a></li>
					<li><a href="https://www.instagram.com/"><img src="../img/instagram.jpg" alt="facebook"></a></li>
					<li><a href="https://www.twitter.com/"><img src="../img/twitter.jpg" alt="facebook"></a></li>
				</ul>
			</div>
		</footer>
		
	</body>