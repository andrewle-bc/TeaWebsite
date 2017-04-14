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
		<title>SereniTEA - Green Tea Variety!</title>
		<link rel="stylesheet" href="../alt.css">
		<link rel="icon" href="../img/icon.png" type="image/gif" sizes="16x16">
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
					<li class="lastcrumb">Green Tea Variety!</li>
				</ul>    
			</div>
			<div id="wrapper">
				<article id="article_body">
					<h2 id="article_title">
					Green Tea Variety!
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
						19:84 June 8th, 1949
						</h4>
						<!--<span class="fb-share-button" data-href="http://students.bcitdev.com/A01013921/G20/articles/health_benefits.php" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fstudents.bcitdev.com%2FA01013921%2FG20%2Farticles%2Farticle.html&amp;src=sdkpreparse">Share</a></span>
						<a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
						<span class="g-plusone" data-annotation="none"></span>-->
					</div>
					
					<hr>
					
					<div id="article_content">
					<p>
					There is a lot of choice! You will also need to decide between loose green tea and green tea teabags. The loose tea may feel more authentic while teabags are more convenient and there's nothing wrong with using them for flavor or strength. Here are some green tea types to consider:
					</p>
					<dl>
						<dt>Dragonwell</dt>
						<dd>This variety is very popular in China. It tastes mellow and has a light green flavor. The leaves open to reveal a bud when water is added.
						</dd>
						<dt>Gunpowder</dt>
						<dd>the Chinese also call this "Pearl Tea". The tea resembles tiny gunpowder pellets. When water is added, the little pellets or pearls unfurl. This one stays freshest for longer period of time.
						</dd>
						<dt>Matcha</dt>
						<dd>This is powdered green tea leaves. It appears a bright green when water is added.
						</dd>
						<dt>Hyson</dt>
						<dd>This has a very pungent taste, and has thick, yellow-green leaves twisted into thin and long figures.
						</dd>
						<dt>Agarwood</dt>
						<dd>Mild traditional green tea taste. Make sure you use whole leaf tea vs tea made from the wood which is illegal to purchase.
						<dt>Pi Lo Chun</dt>
						<dd>In Chinese this name translates to "Green Snail Spring". A rare tea, the little rolled leaves look like snails. This tea tends to have the flavors of plums, peaches, and apricots embedded in the leaves.
						</dd>
						<dt>Sencha</dt>
						<dd>This is a common Japanese green tea. Jewel green matcha is a good choice for those who find other green tea too "grass" tasting.
						</dd>
						<dt>Hojicha</dt>
						<dd>A tea with large, unrolled leaves. It tastes nutty.
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