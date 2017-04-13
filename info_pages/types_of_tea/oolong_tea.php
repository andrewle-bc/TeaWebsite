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
		<title>SereniTEA - Oolong Tea</title>
		<link rel="stylesheet" href="../../alt.css">
		<link rel="icon" href="img/icon.png" type="image/gif" sizes="16x16">
	</head>

	<body>
	
	<!--Header-->
		<header>
			<div id="oolongHeader">
				<h1 id="bannerHeaderSmall">Oolong Tea</h1>
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
						<img src="../../img/oolong_tea_info.jpg" alt="Info picture">
						<h5>Image credits:<a href="https://www.flickr.com/people/vanderdecken/">
						Vanderdecken</a></h5>
						<hr>
					</div>
					
					<div class="info_text">
						<p>The name Oolong literally translates as “Black Dragon” and is very popular in China. Oolong teas are semi-oxidized 
						with levels ranging from 8% – 85%. Oolong teas are characterised for being extremely flavourful and highly aromatic. 
						As such, these teas are consumed without milk and sugar and can often be used for repeat brewings.</p>
						
						<p>The leaves used in producing oolong tea are generally larger and more mature when picked. These leaves are then withered 
						under a strong sun and partially oxidized. The leaves can be prepared in one of two distinct ways: twisted into long curly 
						leaves or rolled into small beads. </p>
						
						<h2>Notable Oolong varieties</h2>
						
						<p><h3>Tie Guan Yin</h3>Translated as The Iron Buddha or Iron Goddess of Mercy, Tie Guan Yin is a premium variety of oolong 
						tea produced in the Anxi area of China. This variety of oolong is a rolled oolong that produces a sweet and floral brew with a 
						creamy drinking texture. This tea is only lightly oxidized, making it closer to green tea than black.</p>

						<p><h3>Da Hong Pao </h3>One of the tea varieties belonging to the Wuyi categorization of teas. Wuyi teas are black and oolong 
						teas grown in the Wuyi Mountains of northern Fujian, China. These teas have unusually rich, complex tastes with smoky 
						overtones and a sweet aftertaste. The legend surround this tea involves the tea being used to cure the mother of a Chinese 
						emperor of an illness. The emperor then sent red robes to clothe the bushes from which these teas originated on the Wuyi Mountain. 
						These teas are famously expensive, where an ounce can sell for US $35,436. Due to its high quality and rarity, Da Hong Pao 
						tea is used for highly honored guests in China.</p>
						
						<p><h3>Dong Ding</h3>Literally translated as “Frozen Summit”, Dong Ding tea derives its name from the mountain in Taiwan 
						where the tea is cultivated. These plants were transplanted to the mountain from the Wuyi mountains famous for its oolong 
						teas. This tea variety has only 15% - 30% oxidization and produces a toasty, woody flavour. The brew has a smooth mouth feel 
						with a rich and sweet taste. </p>

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