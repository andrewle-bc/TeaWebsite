<?php
	include (dirname(__DIR__).'/../functions.php');
	require_once (dirname(__DIR__).'/../config.php');
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
		<title>SereniTEA - White Tea</title>
		<link rel="stylesheet" href="../../alt.css">
		<link rel="icon" href="../../img/icon.png" type="image/gif" sizes="16x16">
	</head>

	<body>
	
	<!--Header-->
		<header>
			<div id="whiteHeader">
				<h1 id="bannerHeaderSmall">White Tea</h1>
			</div>
		</header>
	
		
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
						<li><a href="../brewing_method.php">Steeping Methods</a></li>
						<li><a href="../tea_history.php">The History of Tea</a></li>
					</ul>
				</li>
				<li><a href="../../forum.php">Forum</a></li>
				<li><a href="../../about.php">About</a></li>
				<li><a href="../../contact.php">Contact Us</a></li>
				<?php
				if (isLoggedIn()){
					echo '<li><span class="user">User: '.$_SESSION['SESS_FIRST_NAME'].'</span><a href="../../logout.php" class="logout">|Logout</a></li>';
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
					<li class="lastcrumb">White Tea</li>
				</ul>
			</div>
			
			<div id="wrapper">
					
				<div class="info_heading">
				<h1>
					White Tea
				</h1>
				<hr>
				</div>
				
				<div class="info_content">
					<div class="info_image">
						<img src="../../img/white_tea_info.jpg" alt="Info picture">
						<h5>Image credits:<a href="https://www.flickr.com/people/vanderdecken/">
						Vanderdecken</a></h5>
						<hr>
					</div>
					
					<div class="info_text">
					<br>
						<p>White tea is among the most delicate of tea varieties because it is so minimally processed. It is made from the 
						youngest and most delicate leaf tips and buds.  The buds are hand plucked before 
						they are allowed to open, withered and then dried slowly at low temperatures. The leaves are not rolled and they 
						receive only slight oxidization. The resulting flavour is extremely gentle and mild with very natural sweetness.</p>

						<p>Due to the care required to oversee the detail oriented process of producing white tea, it is usually one of the 
						more expensive varieties. White tea is almost primarily produced in China, in the Fujian Province. But due to 
						the increasing popularity of white teas, production has spread to other large tea producing regions such as 
						Darjeeling and Sri Lanka. White tea generally requires a very mild climate and abundant rainfall.</p>
						
						<br><h2>Popular types of White Tea</h2>
						
						<p><h3>White Peony</h3>Made from the first and second tips of a tea stem, White Peony is the most popular type of white 
						tea. Its name is derived from the manner in which the brewed leaves will bloom like its namesake flower. The 
						brew is a very pale green, almost yellow with a strong fruity and floral flavour and aroma. It generally has a 
						fuller flavour than the other major type of white tea.</p>
						
						<p><h3>Bai Hao (Silver Needle)</h3>The Silver Needle type of white tea is made only from the single tips of the tea stem. 
						When dried, these tips lose their colour and resemble silver needles or white hairs. This is by far the most expensive of white
						teas due to the selective nature of choosing the leaves. When brewed the tea will have a pale-yellow colour with white hairs reflecting 
						in the light. The tea has a sweet and delicate flavour.</p>

						
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