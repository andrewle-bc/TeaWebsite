<?php
	include (dirname(__DIR__).'/../functions.php');
	require_once (dirname(__DIR__).'/../config.php');
	session_start();

?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SereniTEA - Green Tea</title>
		<link rel="stylesheet" href="../../alt.css">
	</head>

	<body>
	
	<!--Header-->
		<header>
			<div id="header_interior">
					<img id="indexCover" src="../../img/infoPage.png" alt="contactUsBanner"><!--placeholder logo-->
			</div>
		</header>
	
		
		<nav id="stickyNav">
			<div id ="logoBox">
			<img id ="logo" src="img/logo.png" alt="logo"><!--placeholder logo-->
			<h1 id="logoTitle">SereniTEA</h1>
			</div>
			<ul id="navList">
				<li><a href="../../index.php">Home</a></li>
				<li class="infoDropSticky"><a href="info_main.php">Information</a><!--Class to activate drop down menu-->
					<ul id="dropDown" class="infoDropContentSticky"><!--Drop down menu contents -->
						<li><a href="../../info_main.php">Types of Tea</a></li>
						<li><a href="../../info_page.php">Tea Producers</a></li>
						<li><a href="../../info_page.php">How is Tea Produced</a></li>
						<li><a href="../../steeping_methods.php">Steeping Methods</a></li>
						<li><a href="../../info_page.php">The History of Tea</a></li>
					</ul>
				</li>
				<li><a href="../../forum.php">Forum</a></li>
				<li><a href="../../about.php">About</a></li>
				<li><a href="../../contact.php">Contact Us</a></li>
				<?php
				if (isLoggedIn()){
					echo '<li><span class="user">User: '.$_SESSION['SESS_FIRST_NAME'].'</span><a href="logout.php" class="logout">|Logout</a></li>';
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
					<li class="lastcrumb">Green Tea</li>
				</ul>
			</div>
			
			<div id="wrapper">
					
				<div class="info_heading">
				<h1>
					Green Tea
				</h1>
				<hr>
				</div>
				
				<div class="info_content">
					<div class="info_image">
						<img src="../../img/article_banner.jpg" alt="Info picture">
						<h5>Image credits:<a href="https://www.flickr.com/people/vanderdecken/">
						Vanderdecken</a></h5>
						<hr>
					</div>
					
					<div class="info_text">
						<p>Green tea is by far the most popular tea in Eastern Asia. Originating from China prior to 600 A.D., 
						Green tea is an intrinsic part of a Chinese culture. Since then however, green tea production has spread to 
						many other Asian countries. The consumption of green tea has similarly spread across the globe.</p>
						
						<p>Green teas are entirely unoxidized and as such, keep their vital green colour. To avoid oxidization, 
						the leaves are prepared with heat to remove the enzyme that causes oxidization. There are two means of accomplishing 
						this: steaming the leaves at an elevated temperature or pan-firing the leaves. Depending on the method used, 
						the resulting tea leaves will have distinct flavours. Pan-firing, the process most customarily used by Chinese 
						producers, will bring out a smokier flavour from the leaves. Pan-fired leaves will also adopt a pale-yellow colour. 
						Steaming the leaves, customary to Japanese production, results in a more herbaceous quality of flavour and a greener 
						colour. Steamed leaves will generally retain more moisture which creates more delicate leaves.</p>

						<h2>Popular Types of Green Tea</h2>
						
						<p><h3>Gunpowder</h3>One of the most popular types of tea of any kind, let alone green tea, originating from China. 
						Gunpowder tea is grown primarily in the Zhejian Province of China. The processing of this type of tea results in the 
						leaves being rolled into small round pellets. The literal translation of its Chinese name is ‘pearl tea’ but it acquired 
						its English name of ‘gunpowder’ due to the leaves’ resemblance to grains of gunpowder. These pellets open up during the 
						brewing process.</p>
						
						<p><h3>Long Jing (Dragon Well)</h3>A variety of the pan-roasted green teas from China is the Longjing tea. One of the most 
						popular teas in the world. Grown in the Zhejiang province as well, once processed the leaves tend to be flat and have a rich 
						jade colour. These teas are usually of very high quality and as such can be very expensive.</p>
						
						<p><h3>Sencha</h3>Of the green teas grown and produced in Japan, Sencha is by far the most well-known and frequently drunk 
						variety. Leaves of this tea in addition to being steamed are exposed directly to sunlight during processing. Sencha will 
						usually have a flavour that some would describe as grassy. Depending on the quality of the tea and its preparation, once brewed 
						the tea can take on very bitter or harsh flavours.</p>
						
						<p><h3>Matcha</h3>Matcha tea leaves are grown using a covered culture method meaning that they are entirely grown in the shade 
						of a cloth or reed screen. After the leaves are steamed and dried, they are immediately stoneground into a powder. 
						Matcha is very often used in Japan’s traditional tea ceremony. Matcha tea is brewed by whisking the powder with warm water. 
						This variety is known for its bittersweet flavour. Because of its flavour and its powdered form, it is an incredibly popular
						ingredient in confections and savoury dishes.</p>

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