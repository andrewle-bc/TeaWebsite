<?php
	include (dirname(__DIR__).'/functions.php');
	require_once (dirname(__DIR__).'/config.php');
	session_start();

?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SereniTEA - 10 Reasons to Love Black Tea!</title>
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
					<li class="lastcrumb">10 Reasons to Love Black Tea!</li>
				</ul>    
			</div>
			<div id="wrapper">
				<article id="article_body">
					<h2 id="article_title">
					10 Reasons to Love Black Tea!
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
						1.	Oral Health: Studies funded by the Tea Trade Health Research Association suggests that black tea reduces plaque formation as well as restricts bacteria growth that promotes the formation of cavities and tooth decays. Polyphenols found in black tea kill and surpass cavity-causing bacteria as well as hinder the growth of bacterial enzymes that form the sticky-like material that binds plaque to our teeth.
						</p><p>
						2.	Increased Energy: Unlike other drinks that have a relatively higher caffeine content, the low amounts found in tea can help enhance blood flow to the brain without over-stimulating the heart. It also stimulates the metabolism and respiratory system, as well as the heart and the kidneys.
						</p><p>
						3.	A Better Heart: As identified by Arab L. et al. in their 2009 research paper called “ Green and black tea consumption and risk of stroke: a meta-analysis”, it is seen that regardless of people’s country of origin, individuals who consume 3 or more cups of tea had a 21% lower risk of a stroke than people who consume less than 1 cup of green or black tea per day.
						</p><p>
						4. Antioxidants: Black tea contains polyphenols, which are also antioxidants that help block DNA damage associated with tobacco or other toxic chemicals. These antioxidants are different from those obtained from fruits and vegetables and therefore as a regular part of our diet they can provide additional benefits towards a healthy lifestyle.
						</p><p>
						5.	Cancer Prevention: Though a lot more research is required to confidently suggest cancer prevention techniques; it has been suggested that women who drink black tea regularly have a lower chance of ovarian cancer.
						</p><p>
						6.	Healthy Bones: It has also been suggested that regular tea drinkers have stronger bones and lower probability of developing arthritis due to the phytochemicals found in tea.
						</p><p>
						7.	Healthy Digestive Tract: In addition to improving your immune system, it has a therapeutic effect on gastric and intestinal illnesses.
						</p><p>
						8.	Lower Risk of Diabetes: Based on a research study conducted of elderly people living in the Mediterranean islands it was discovered that people that had been consuming black tea on a long-term basis 1-2 cups a day had a 70% lower chance of having or developing type 2 diabetes.
						</p><p>
						9.	Stress Relief: We all are aware and well experienced about the calming and relaxing benefits of black tea. Not only does it help slow you down after a long day, studies show that the amino acid L-theanine found in black tea can help you relax and concentrate better. Black tea has also been shown to reduce levels of the stress hormone cortisol when consumed in moderate amounts on a regular basis.
						</p><p>
						10.	Better Immune System: Black tea contains alkylamine antigens that help boost our immune response. In addition, it also contains tannins that have the ability to fight viruses and hence keep us protected from influenza, stomach flu and other such common viruses in our everyday lives.
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