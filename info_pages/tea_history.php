<?php
	include (dirname(__DIR__).'/functions.php');
	require_once (dirname(__DIR__).'/config.php');
	session_start();

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
			<div id="header_interior">
					<img id="indexCover" src="img/infoPage.png" alt="contactUsBanner"><!--placeholder logo-->
			</div>
		</header>
	
		<nav id="stickyNav">
			<div id ="logoBox">
			<img id ="logo" src="../img/logo.png" alt="logo"><!--placeholder logo-->
			<h1 id="logoTitle">SereniTEA</h1>
			</div>
			<ul id="navList">
				<li><a href="index.php">Home</a></li>
				<li class="infoDropSticky"><a href="info_main.php">Information</a><!--Class to activate drop down menu-->
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
			<div id="breadcrumbs"> <!-- information page -->
				<ul>
					<li><a href="index.php">Home</a> &nbsp; ></li> 
					<li><a href="info_main.php">Information</a> &nbsp; ></li>
					<li class="lastcrumb">The History of Tea</li>
				</ul>
			</div>
			
			<div id="wrapper">
					
				<div class="info_heading">
				<h1>
					Tea's History
				</h1>
				<hr>
				</div>
				
				<div class="info_content">
					<div class="info_image">
						<img src="../img/tea_history.png" alt="Info picture">
						<h5>Image credits:<a href="https://www.flickr.com/people/vanderdecken/">
						Vanderdecken</a></h5>
						<hr>
					</div>
					
					<div class="info_text">
						<h2> Origin of Tea</h2>
						<p>The earliest record of tea dating back to the 3rd century AD in the southwest part China in Yunnan province.
						Tea was originally a medicinal drink during the Shang dynasty. The plant used to produce tea—Camellia
						sinensis—has originated in southeast Asia in the region that is now occupied by northeast India, north Burma, southwest China and Tibet.
						It’s likely that tea originated from Yunnan province since it falls within the Camellia sinensis’ origin.
						</p>
						<p>The first record of tea cultivation occurred during the Ganlu ear (53 -50BCE) on Meng Mountain.
						Each spring, the first 360 leaves picked were presented to the Emperor.
						During this era high-quality tea was considered as a delicacy and was worth as much as gold.</p>
						<br>
						<h2>Myths about the origin of tea</h2>
						<p>Around 2737 BC,  Shennong (the legendary Emperor of China), required his subject to boil water
						before consumption for it decreases the chances of water-borne illness. One day while Shennong was
						drinking boiled water in the garden a few leaves blew into his cup. Upon drinking the now golden water,
						Shennong was pleasantly surprised by its flavor. </p>
						<br>
						<h2>Expansion and popularization around the globe</h2>
						<h3>Japan</h3>
						<p>At around 1600 AD, tea spread to Japan when Japanese priests returned from China bring back Chinese culture.
						One component of the culture was the preparation and brewing of tea. However, Camellia sinensis seeds wasn’t introduced to Japan until 767-822 AD.
						Tea didn’t become a popular staple until 1211 AD when a famous zen priest, Eisai, published a book called <i>How to Stay Healthy by Drinking Tea</i>.</p>
						<h3>Britain</h3>
						<p>In the 17th century, tea became popular as it received more exposure through increased trade between China and Britain.
						The first documentation of English tea was a letter written in 1615 by Richard Wickham, who ran an East India Company office in Japan, to request for tea from a Macao merchant.
						In 1657, tea was first sold in London from the back of a house by Thomas Garway. Seeing the increased popularity of tea, coffee houses added tea to their menus.
						Tea continued its popularity rise as a more elite drink and as a symbol of status. By the 1720s, the popularity of black tea overtook green tea as British drinkers started
						adding sugar and milk to tea. Britain increased it’s import of tea leading to price decreases.
						By 1750, the price decrease to an amount affordable by most and tea became the British national drink.</p>
						<h3>India</h3>
						<p>During the 17th century tea became increasingly popular among the wealthy in Britain.
						However, imports from China were extremely costly due to their monopoly.
						The British decided to launch a tea industry in India using Chinese seeds, plus Chinese planting and cultivation technique.
						Tea wasn’t popularized in India until the 1950s when the India Tea Board, faced with a surplus of low-grade tea,
						launched an advertising campaign targeting the North. A method of drinking tea with milk and spices called chai was introduced. </p>
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
					<li><a href="https://www.facebook.com/"><img src="img/facebook.jpg" alt="facebook"></a></li>
					<li><a href="https://www.instagram.com/"><img src="img/instagram.jpg" alt="facebook"></a></li>
					<li><a href="https://www.twitter.com/"><img src="img/twitter.jpg" alt="facebook"></a></li>
				</ul>
			</div>
		</footer>
    	
	</body>