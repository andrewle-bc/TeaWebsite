<?php
	include (dirname(__DIR__).'/../functions.php');
	require_once (dirname(__DIR__).'/../config.php');
	session_start();

?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SereniTEA - Black Tea</title>
		<link rel="stylesheet" href="../../alt.css">
	</head>

	<body>
	
	<!--Header-->
		<header>
			<div id="blackHeader">
					<h1 id="bannerHeaderSmall">Black Tea </h1>
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
					<li class="lastcrumb">Black Tea</li>
				</ul>
			</div>
			
			<div id="wrapper">
					
				<div class="info_heading">
				<h1>
					Black Tea
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
						<p>Black tea is the most commonly known variety of tea in North America. It is the most highly oxidized and 
						most fully fermented of the types of tea. Due to this high oxidation, black teas will usually have a much bolder 
						flavour in comparison to other teas. The colour produced from steeping will be varying shades of amber.</p>
						<p>
						Black teas were originally created in China and referred to as “red teas” for the amber colour of the liquid produced 
						through steeping. Now however, black teas are cultivated and enjoyed world wide. In Western countries, most talk of tea 
						is in reference to black teas. Sweet teas, iced teas, and afternoon teas are recipes of western culture which are typically 
						made using black tea.</p>
						
						<h2>Popular Types of Black Tea</h2>
						
						<p><h3>Assam</h3>Primarily produced in the Assam region of India, after which 
						it’s named, Assam black teas are full-bodied with a robust malty flavour that produces 
						a bright colour. These teas are frequently included in most ‘breakfast’ tea blends such 
						as the English Breakfast or Irish Breakfast. </p>
						
						<p><h3>Ceylon</h3>Black teas originating from the Ceylon region typically can be categorized 
						in two varieties. They are differentiated by their levity; one is a sweet, heavy black tea with 
						slight hints of citrus and the other offers a lighter, crisper drinking experience. These 
						teas are usually enjoyed as afternoon teas. </p>
						
						<p><h3>Darjeeling</h3>Cultivated and grown at high elevations in the small, mountainous region 
						of Darjeeling in India, Darjeeling teas are referred to as the “champagne” of the tea world. 
						When brewed the teas from this region produce a thin-bodied, light-coloured liquid 
						with a floral aroma. </p>
						<p>Darjeeling teas themselves come in two separate varieties based on when the leaves are 
						harvested. First Flush Darjeeling teas are harvested in mid-March following the spring rains. 
						First Flush teas are very gentle and crisp in flavour and appearance. Second Flush Darjeelings 
						are harvested in June and produce a much more smooth and earthy type of black tea. Autumnal 
						Flush teas are harvested in the fall following the monsoon-laden rainy season. When brewed the 
						Autumnal Flush produces much darker and full-bodied infusions. </p>
						
						<p><h3>Keemun</h3>The most notable black tea originating from China. When brewed, Keemun teas produce 
						a brilliant, clear red colour with a floral and slightly smoky exotic aroma. The higher quality varieties 
						of this tea are lauded for their aesthetic value and are considered top quality teas around the globe.</p>
						
						<p><h3>Kenyan</h3>Kenyan black tea originates from the relative latecomer country to tea production 
						(beginning in the early 1900s). These teas are mainly processed by machines. Kenyan tea is known
						for its full-bodied and bold flavour which pairs well with milk and sugar.</p>
						
						<h2>Notable Black Tea Blends</h2>
						
						<p><h3>Earl Grey</h3>The Earl Grey blend originated in England in the 1820s. The blend is flavoured 
						with citrus oil extracted from the bergamot orange in an attempt to imitate the high-end teas coming from 
						China at the time. There is no one accepted variety of Earl Grey with many companies and nationalities 
						adding their own twist to the recipe. Twinings adds Cornflowers and Seville oranges to the blend in a 
						variety known as Lady Grey. French Early Grey will have rose petals added to the blend. And some, 
						like Rooibos Early Grey, will substitute black tea altogether in favour of other types.</p>
						
						<p><h3>English Breakfast</h3>English Breakfast tea is traditionally a blend of Assam, Ceylon and Kenyan 
						teas. This blend is extremely popular in British tea culture as it was popularized by Queen Victoria. 
						These blends are usually full-bodied, bold and rich due to the teas that comprise it. Because of this, 
						these teas go very well with milk and sugar and are associated with a hearty English breakfast. </p> 
						
						<p><h3>Masala Chai</h3>The Masala Chai is a beverage made by brewing tea with a mixture of aromatic Indian 
						spices, milk, and a sweetener such as sugar or honey. The teas usually used in these blends are primarily 
						from the Assam region and they are brewed for an overly long time in order to extract intense flavour from 
						the leaves. Chai is usually prepared using cinnamon sticks, black peppercorn, ground cloves, cardamom and ginger. </p>
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