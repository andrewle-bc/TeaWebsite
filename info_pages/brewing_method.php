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
			<div id="brewingHeader">
				<h1 id="bannerHeaderSmall">Brewing Methods</h1>
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
			<div id="breadcrumbs"> <!-- information page -->
				<ul>
					<li><a href="index.php">Home</a> &nbsp; ></li> 
					<li><a href="info_main.php">Information</a> &nbsp; ></li>
					<li class="lastcrumb">Steeping Method</li>
				</ul>
			</div>
			
			<div id="wrapper">
					
				<div class="info_heading">
				<h1>
					Classic Brewing Method
				</h1>
				<hr>
				</div>
				
				<div class="info_content">
					<!--<div class="info_image">
						 <img src="../img/article_banner.jpg" alt="Info picture">
						<hr> 
					</div> -->
					
					<div class="info_text">
						<p> The most important component to make the perfect cup of tea is making sure the water temperature
						and the steeping time follows the recommended temperature and time precisely.
						Steeping with the correct temperature ensures the health benefits and the taste remain at its optimal.
						Follow the temperature and steeping table below along with our brewing tips to produce the best tasting tea. </p> <br>
						<!--Steeping time table-->
					<table id="steepTimeTable"> 
							<tr class="tableData">
								<th>Type of Tea</th>
								<th>Amount</th>
								<th>Steeping Time</th>
								<th>Water Temperature <br>(for 6-8oz of water)</th>
							</tr>
							<tr class="tableData">
								<td>White</td>
								<td>2-3 tsps</td>
								<td>3 minutes</td>
								<td>176&deg; - 185&deg; F / 80&deg; - 85&deg; C</td>
							</tr>
							<tr class="tableData">
								<td>Green</td>
								<td>1-2 tsps</td>
								<td>1-3 minutes</td>
								<td>176&deg; - 185&deg; F / 80&deg; - 85&deg; C</td>
							</tr>
							<tr class="tableData">
								<td>Oolong</td>
								<td>2-3 tsps</td>
								<td>2-3 minutes</td>
								<td>185&deg; - 203&deg; F / 85&deg; - 95&deg; C</td>
							</tr>
							<tr class="tableData">
								<td>Black</td>
								<td>1-2 tsps</td>
								<td>3-5 minutes</td>
								<td>203&deg; F / 95&deg; C</td>
							</tr>
							<tr class="tableData">
								<td>Herbal</td>
								<td>1-2 tsps</td>
								<td>3 minutes</td>
								<td>212&deg; F / 100&deg; C</td>
							</tr>
					</table>
						<h3>Step1. Heat water to the desired temperature and add tea leaves to diffuser. </h3>
						<img src="../img/step1.jpg" alt="step1"> <!-- size the 4 pictures please -->
						<h3>Step2. Add water to leaves until the leaves are fully submerged.</h3>
						<img src="../img/step2.jpg" alt="step2">
						<h3>Step3. Steep tea for a specific amount of time. Check the chart for optinal brewing time</h3>
						<img src="../img/step3.jpg" alt="step3">
						<h3>Step4. Remove the diffuser and enjoy your tea.</h3>
						<img src="../img/step4.jpg" alt="step4">
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