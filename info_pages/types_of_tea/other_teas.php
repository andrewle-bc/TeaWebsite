<?php
	include (dirname(__DIR__).'/../functions.php');
	require_once (dirname(__DIR__).'/../config.php');
	session_start();

?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SereniTEA - Other Teas</title>
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
			<img id ="logo" src="../../img/logo.png" alt="logo"><!--placeholder logo-->
			<h1 id="logoTitle">SereniTEA</h1>
			</div>
			<ul id="navList">
				<li><a href="../../index.php">Home</a></li>
				<li class="infoDropSticky"><a href="../../info_main.php">Information</a><!--Class to activate drop down menu-->
					<ul id="dropDown" class="infoDropContentSticky"><!--Drop down menu contents -->
						<li><a href="../../info_main.php">Types of Tea</a></li>
						<li><a href="../tea_location.php">Tea Producers</a></li>
						<li><a href="../tea_production.php">How is Tea Produced</a></li>
						<li><a href="../brewing_methods.php">Steeping Methods</a></li>
						<li><a href="../tea_history.php">The History of Tea</a></li>
					</ul>
				</li>
				<li><a href="../../forum.php">Forum</a></li>
				<li><a href="../../about.php">About</a></li>
				<li><a href="../../contact.php">Contact Us</a></li>
				<?php
				if (isLoggedIn()){
					echo '<li><span class="user">User: '.$_SESSION['SESS_FIRST_NAME'].'</span><a href="logout.php" class="logout">|Logout</a></li>';
				} else {
					echo '<li class="sign-in"><a href="../../register.php">Register/Sign In</a></li>'; 
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
					<li class="lastcrumb">Other Teas</li>
				</ul>
			</div>
			
			<div id="wrapper">
					
				<div class="info_heading">
				<h1>
					Other Teas
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
						<p><h2>Herbal and Fruit Teas</h2>Herbal teas and fruit teas do not come from the Camellia sinensis plant and are 
						technically not considered teas. It is not uncommon however to use the term tea to refer to plant and floral infusions 
						or tisanes. These tisanes are usually blends of dried herbs, spices, fruit and other plant materials that are brewed in 
						hot water similar to how teas would. Because they do not contain actual tea leaves, these beverages are usually free of 
						caffeine and are much gentler on the body. In addition, depending on the materials that comprise the blend, herbal teas 
						may have their own added particular health benefits that normal tea would not. Such cases would be traditional Chinese 
						medicinal teas which have been used to enhance the immune system.</p>
						<p>Examples of herbal and fruit teas include Rooibos teas, ginseng teas, coffee blossom teas, hibiscus teas and chamomile.</p>
						
						<p><h2>Pu-erh Tea</h2>Pu-erh teas are a special variety of tea that involves undergoing a fermenting process. Produced primarily 
						in the Yunnan province of China and named after Pu’er City, this variety of tea is comprised of larger tea leaves that 
						can be aged for several years. During the aging process, the tea leaves are exposed to microflora and bacteria to ferment the 
						tea, similar to wine or yogurt. Prior to aging, the type is pressed into a number of shapes such as discs or bricks. The result 
						of the fermentation process is a hearty, extremely dark brew. The taste is earthy and strong.</p>

						<p>Pu-erh tea shares many similarities to that of fine wine. Like wine, Pu-erh tea is highly regulated to ensure authenticity; only 
						tea leaves originating from the Yunnan province and fermented can be called Pu-Erh tea. In addition, many connoisseurs of Pu-erh teas 
						re fond of collecting very old and well-aged teas, with some of the most treasured vintages being over 30 years old.</p>
						
						<p>In Chinese tradition, Pu-erh teas are said to have many health benefits that regularly tea does not. It is suggested that Pu-erh 
						tea helps the body with digestion and weight loss. While these claims are unsubstantiated, the tea variety has been found to help with 
						the lowering of cholesterol. </p>
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