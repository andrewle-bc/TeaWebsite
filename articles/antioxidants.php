<?php
	include (dirname(__DIR__).'/functions.php');
	require_once (dirname(__DIR__).'/config.php');
	session_start();

?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SereniTEA - What are Antioxidants?</title>
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
			<div id="breadcrumbs"> <!-- news articles page -->
				<ul>
					<li><a href="../index.php">Home</a> &nbsp; ></li>
					<li class="lastcrumb">The Various Health Benefits of Tea</li>
				</ul>    
			</div>
			<div id="wrapper">
				<article id="article_body">
					<h2 id="article_title">
					The Various Health Benefits of Tea
					</h2>
					
					<div id="article_banner">
						<img src="../img/slideShow1.jpg" alt="article_banner">
						<h5>Image credits:<a href="https://www.flickr.com/people/vanderdecken/">
						Vanderdecken</a>
						</h5>
					</div>
					
					<hr>
					
					<div id="article_author">
						<h4>
						<a href="../about.php">Andrew Le</a>
						<br>
						date and time
						</h4>
						<!--<span class="fb-share-button" data-href="http://students.bcitdev.com/A01013921/G20/articles/health_benefits.php" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fstudents.bcitdev.com%2FA01013921%2FG20%2Farticles%2Farticle.html&amp;src=sdkpreparse">Share</a></span>
						<a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
						<span class="g-plusone" data-annotation="none"></span>-->
					</div>
					
					<hr>
					
					<div id="article_content">
						<h1>Antioxidants</h1>
							<p>
							The word antioxidant is used to advertise foods, supplements, and skin-care products, but what do skin-care products have in common with food? Are antioxidants just a buzz-term for marketing like organic, superfoods, or anti-aging? Here’s what you need to know.
							</p>
							<p>
							An antioxidant is a molecule that prevents the oxidation of cells from free radicals, no, not politics, but a term you might remember from your high school chemistry class. Free radicals are molecules with an unpaired electron; they occur naturally in your body though digestion, and are used by your body’s immune system against foreign invaders. Antioxidants help regulate free radicals, too many can lead to diseases, and even cancer. 
							</p>
							<p>
							More isn’t necessarily better, taking too many antioxidants can be detrimental. The good news is it is very hard to take too many just from foods in your diet. Taking antioxidant supplements can have a negative impact on your body, it is recommended to stick to natural sources from foods.
							</p>
							<p>
							Antioxidants come in a very wide range, and it is necessary to consume a variety of foods to benefit. Certain antioxidants will help combat certain cancers, and others will prevent age-related degenerative diseases such as Alzheimer’s. For example, vitamin A is desired for the growth and development of the retina.
							</p>
							<p>
							Foods such as blueberries, and pomegranate have been given the term “superfoods” because of their antioxidant properties. Vitamin C (ascorbic acid) is readily most fruits and vegetables, vitamin E (tocopherols, tocotrienols) can be found in nuts, and seeds such as sunflower seeds, and almonds.
							</p>
							<p>
							So, what do foods like blueberries and tea have in common with anti-aging cream? As we age, we are exposed to more and more radicals. The sun is a major contributor, UV-lights (ultraviolet) create free radicals on our skin, causing our cells to destroy themselves as a defensive mechanism against cancer. Anti-aging creams are usually packed with antioxidants to prevent wrinkles, and to protect against UV-lights.
							</p>
							<p>
							Retinol, an active form of vitamin A is the most common ingredient in anti-aging cremes. Vitamin C has become more popular in creams, it is used to heal damaged skin. Extracts from plants, such as Aloe Vera, and green tea are widely used in natural anti-aging creams. Aloe Vera has an abundance of vitamin E, it works great as a skin application because of its fat-soluble property.
							</p>
							<p>
							Antioxidant is more than just a buzzword, they are essential – in moderation. The proper amount will promote good health, and protect against chronic diseases, such as Alzheimer’s, loss of vision, and cancer. A variety of fruits and vegetables will ensure that there are enough antioxidants in your diet to help you feel and look healthy. If you are concerned with the number of antioxidants in your diet, or if you are thinking of taking supplements, it is recommended that you talk it through with your general practitioner or nutritionist.	
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