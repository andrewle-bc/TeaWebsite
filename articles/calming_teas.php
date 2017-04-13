<?php
	include (dirname(__DIR__).'/functions.php');
	require_once (dirname(__DIR__).'/config.php');
	session_start();

?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SereniTEA - Calming Teas</title>
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
				<li><a href="../forum.php">Forum</a></li>
				<li><a href="../about.php">About</a></li>
				<li><a href="../contact.php">Contact Us</a></li>
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
					<li class="lastcrumb">Calming Teas</li>
				</ul>    
			</div>
			<div id="wrapper">
				<article id="article_body">
					<h2 id="article_title">
					Calming Teas
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
						<a href="../about.php#Setareh">Setareh Shir Koobi</a>
						<br>
						date and time
						</h4>
						<!--<span class="fb-share-button" data-href="http://students.bcitdev.com/A01013921/G20/articles/health_benefits.php" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fstudents.bcitdev.com%2FA01013921%2FG20%2Farticles%2Farticle.html&amp;src=sdkpreparse">Share</a></span>
						<a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
						<span class="g-plusone" data-annotation="none"></span>-->
					</div>
					
					<hr>
					
					<div id="article_content">
						<p>
						The world’s getting crazier by the minute and it doesn’t seem like it’ll stop any time soon. You’re bound to be stressed out! Anxiety and stress are tough to deal with. More and more people are looking for a safer and more natural solution. Here’s a list of 6 natural teas for stress and anxiety so that you can literally drink your way to relaxation. Here are a list of teas that you keep stress and anxiety at bay: 
						</p>
						<dl>
						<dt>
						1. Peppermint Tea (Mentha Piperita)
						</dt><dd>
						its lack of caffeine and the menthol contained in peppermint is a natural muscle relaxant. It is very effective for when you tend to feel very tense and irritable. It is  a wonderful tea to drink before going to bed. It will help you have a peaceful sleep, just what you need after a crazy day.
						Note of warning: pregnant women must avoid drinking it. This is because it may increase the risk of miscarriage.
						</dd><dt>
						2. Chamomile Tea (Matricaria Recutita)
						</dt><dd>
						Sometimes excessive stress and anxiety may cause sleeplessness. Chamomile tea not only reduces stress and anxiety, but it also helps treat insomnia. Just like peppermint tea, chamomile tea has great benefits in relaxing the muscles and reducing irritability.
						</dd><dt>
						3. Lemon Balm Tea (Melissa Officinalis)
						</dt><dd>
						Lemon Balm is a calming herb that belongs to the mint family. No wonder it has a natural mint flavor with a slight taste of lemon. It reduces the stress hormone called cortisol and relaxes the body without causing drowsiness. It also helps to elevate the mood.
						</dd><dt>
						4. Oolong Tea (Camellia Sinensis)
						</dt><dd>
						Oolong tea is known to relieve stress by up to 20%! The natural polyphenol helps combat aniety and stress.
						</dd><dt>
						5. Green Tea (Camella Sinensis)
						</dt><dd>
						Green Tea is much like oolong, containing natural polyphenols. Although green tea contains a lot of caffeine, it’s adaptogenic in nature such that it keeps you alert yet calm enough without making you feel drowsy.
						</dd><dt>
						6. Rose Tea (Rosa centifolia)
						</dt><dd>
						Rose tea also helps remedy stress and anxiety. It does this by easing the mind; Its calming effect helps you sleep well.		
						</dd><dt>
						7. Passion Flower Tea (Passiflora incanata)
						</dt><dd>
						Passion flower tea is another great natural remedy for stress and anxiety. This is because of the flavone chrysin contained in passion flower which has anti-anxiety benefits. Passion flower tea helps induce a peaceful sleep.
						</dd>
						</dl>
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