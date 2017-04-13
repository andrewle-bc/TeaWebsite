<?php
	include (dirname(__DIR__).'/functions.php');
	require_once (dirname(__DIR__).'/config.php');
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
		<title>SereniTEA - 10 Posi'tea've Benefits</title>
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
					<li class="lastcrumb">10 Posi'tea've Benefits</li>
				</ul>    
			</div>
			<div id="wrapper">
				<article id="article_body">
					<h2 id="article_title">
					10 Posi'tea've Benefits
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
						<a href="../about.php#Andrew">Andrew Le</a>
						<br>
						16:20 April 1st, 2017
						</h4>
						<!--<span class="fb-share-button" data-href="http://students.bcitdev.com/A01013921/G20/articles/health_benefits.php" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fstudents.bcitdev.com%2FA01013921%2FG20%2Farticles%2Farticle.html&amp;src=sdkpreparse">Share</a></span>
						<a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
						<span class="g-plusone" data-annotation="none"></span>-->
					</div>
					
					<hr>
					
					<div id="article_content">
						<h2>1. Tea contains antioxidants</h2>
						<p>
							Because who doesn’t love buzzwords? For more information, please refer to <a href="antioxidants.php">this article</a> for more information.
						</p>
						<h2>2. Tea fights diseases</h2>
						<p>
							Tea has been found to reduce to risk of Parkinson’s disease, Alzheimer’s disease, and <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3689013/">type 2 diabetes</a>.
						</p>
						<h2>3. Tea has less caffeine than coffee</h2> 
						<p>
							The most caffeinated tea, black tea, contains 30-75mg per cup; coffee contains 90-200mg of caffeine per cup. Tea also contains L-theanine which lowers the absorption rate of caffeine, which is why you do not get that sharp spike in energy like you do in coffee.
						</p>
						<h2>4. Tea reduces the risk of stroke</h2>
						<p>
							<a href="https://www.ncbi.nlm.nih.gov/pubmed/19228856">Proof</a>
						</p>
						<h2>5. Tea lets you live forever</h2>
						<p>
							Not really, but tea does reduce the risk of breast cancer, lung cancer, and prostate cancer.
						</p>
						<h2>6. Tea can help you lose weight</h2>
						<p>
							Tea promotes a healthy cardiovascular system, improving cholesterol levels, increasing blood flow, and burning fat. Caffeine helps to increase endurance during physical activities.
						</p>
						<h2>7. Your ‘Tea’th will shine</h2>
						<p>
							Black, and green teas contain fluoride which are absorbed by your teeth and bones. Let’s ignore the fact that it also contains tannins that can also stain teeth.
						</p>
						<h2>8. Tea has an endless variety</h2>
						<p>
							From green tea, black tea, white tea to Ice-T, there is a large variety of tea to choose from. Specialty teas have been becoming especially popular from distributors such as DavidsTea and Teavana.
						</p>
						<h2>9. Tea reduces stress</h2>
						<p>
							How can you be mad while drinking a nice cup of tea? 
						</p>
						<h2>10. Tea is more environmentally friendly than coffee</h2>
							<p>
							Both tea and coffee both require harvesting, processing (drying), and shipping. Coffee is more intensive to process than tea, and weights significantly more for exportation.
						</p>
						<br><br>
						<h5>Disclaimer: this article does contain satire, please do not take this to heart.</h5>

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