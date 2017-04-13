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
		<title>SereniTEA - Test Information Page</title>
		<link rel="stylesheet" href="../alt.css">
	</head>

	<body>
	
	<!--Header-->
		<header>
			<div id="producerHeader">
				<h1 id="bannerHeaderSmall">Tea Producers</h1>
			</div>
		</header>
	
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
						<li><a href="tea_location.php">Tea Producers</a></li>
						<li><a href="tea_production.php">How is Tea Produced</a></li>
						<li><a href="brewing_method.php">Brewing Methods</a></li>
						<li><a href="tea_history.php">The History of Tea</a></li>
					</ul>
				</li>
				<li><a href="../forum.php">Forum</a></li>
				<li><a href="../about.php">About</a></li>
				<li><a href="../contact.php">Contact Us</a></li>
				<?php
				if (isLoggedIn()){
					echo '<li><span class="user">User: '.$_SESSION['SESS_FIRST_NAME'].'</span><a href="../logout.php" class="logout">|Logout</a></li>';
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
			<div id="breadcrumbs"> <!-- information page -->
				<ul>
					<li><a href="../index.php">Home</a> &nbsp; ></li> 
					<li><a href="../info_main.php">Information</a> &nbsp; ></li>
					<li class="lastcrumb">Tea Producers</li>
				</ul>
			</div>
			
			<div id="wrapper">
					
				<div class="info_heading">
				<h1>
					Tea Producers
				</h1>
				<hr>
				</div>
				
				<div class="info_content">
					<div class="info_image">
						<img src="../img/article_banner.jpg" alt="Info picture">
						<h5>Image credits:<a href="https://www.flickr.com/people/vanderdecken/">
						Vanderdecken</a></h5>
						<hr>
					</div>
					
					<div class="info_text">
						<p>All types of tea (green tea, black tea, oolong, and white tea) are processed with the leaves of 
						Camellia sinensis. The differential factor between these type of tea is not in the leaves but in the processing.
						However, the general procedure for tea processing is the same for the varying types of tea with slight variants
						in the degree and way of oxidation of leaves and forming and drying the leaves. </p>
						<h2>General Procedure</h2>
						<h3>Plucking</h3>
						<p>The plucking of tea flushes (the terminal bud plus two young leaves) and leaves occurs twice a year
						during spring and early summer. It is less common for pickings to occur in the autumn or winter.
						High quality teas are hand picked to ensure the flushes and leaves are not damaged.</p>
						<h3>Withering/Wilting</h3>
						<p>After the tea leaves are picked, the leaves start losing its moisture.
						Proteins will slow breakdown, increasing the caffeine levels in the leaves.
						To help with the drying process, leaves are put under the sun or left in a cool breezy room.
						By the end of wilting the leaves can loose as much as a quarter of its original weight through water loss.</p>
						<h3>Disruption</h3>
						<p>It’s a technique used by the Western tea industry to promote and quicken oxidation by tearing and bruising the leaves.
						The tea leaves are tossed in a bamboo tray or tumbled in baskets. </p>
						<h3>Oxidation and Fermintation</h3>
						<p>The leaves are left on their own in a climate-controlled room where they turn progressively darker.
						During is process enzymes breaks down the leave’s protein. The duration of oxidation is the main factor
						that changes the taste profile of tea.</p>
						<h3>Fixation</h3>
						<p>This step halts the fermentation process by moderately heating the tea leaves to deactivate oxidative enzymes.
						Traditionally in China, the tea leaves are panned in a wok; now-a-days, this process is automatized in a rolling drum. </p>
						<h3>Rolling/Shaping</h3>
						<p>While the leaves are still damp, they are rolled into strips by hand or with a machine.
						Rolling causes sap, essential oils and juices to seep out, which further enhances the flavour of the tea.</p>
						<h3>Drying</h3>
						<p>Tea can either be dried by panning, sunning, air drying or baking with baking being the most common.
						This process must be done with great care because over-cooking the leaves will alter the flavours.</p>
						<h3>Aging/Curing</h3>
						<p>This step is not always required, but some teas needs additional aging, secondary fermentation, or baking to reach the desire flavours.
						At this stage, flavoured teas are sprayed with aromas and flavours. </p>
						<br>
						<h2>Types Specific Processing:</h2>
						<h3>Green Tea</h3>
						<p>This tea undergoes the least amount of oxidation.
						After tea picking, the oxidation process is quickly halted with fixation allowing the leaves to remain a green colour.
						The Japanese method fixates the leaves with stream; while the Chinese dry cooks them in hot pans.
						The tea leaves are wither-dried as separate leaves are rolled into smaller pellets.
						Tea leaves are processed within two are three days after harvesting and should retain a chemical composition similar to unprocessed leaves.</p>
						<h3>Black Tea</h3>
						<p>The tea leaves are completely oxidized.
						To aid with the oxidation process, additional rips and bruises are introduced. </p>
						<h3>Oolong</h3>
						<p>Oxidation is stopped somewhere in between green tea and black tea.
						To enhance the favours of high-quality oolong is aged over charcoal.</p>
						<h3>White Tea</h3>
						<p>There is a discrepancy between other countries’ process of making white tea from China’s process.
						Internationally, white tea’s oxidation process lasts about one to three days before oxidation is halted by being baked dry.
						In China, white tea is fully oxidized by letting it naturally dry under the sunlight.
						China’s white tea does differ from black tea because it lacks the disruption stage.</p>
					</div>
				</div>
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