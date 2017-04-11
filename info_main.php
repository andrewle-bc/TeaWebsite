<?php
	include 'functions.php';
	require_once('config.php');
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
		<title>SereniTEA - Information</title>
		<link rel="stylesheet" href="alt.css">
		<link rel="stylesheet" href="circle.css">
		<script>
			function $(id){
				var element = document.getElementById(id);
				if( element == null )
					alert( 'Programmer error: ' + id + ' does not exist.' );
				return element;
			}
		
			function deEmphCircle(id) {
				$('BlackTea').style.opacity = "1";
				$('GreenTea').style.opacity = "1";
				$('WhiteTea').style.opacity = "1";
				$('OtherTea').style.opacity = "1";
				$('OolongTea').style.opacity = "1";
				$(id).style.display = "none";
				$(id).style.visbility = "hidden";
				$('button1').style.visbility = "visible";
				$('button1').style.display = "inline";
				$('button2').style.visbility = "visible";
				$('button2').style.display = "inline";
				$('button3').style.visbility = "visible";
				$('button3').style.display = "inline";
				$('button4').style.visbility = "visible";
				$('button4').style.display = "inline";
			}
			function emphCircle(id, id2) {
				$('BlackTea').style.opacity = "0.4";
				$('GreenTea').style.opacity = "0.4";
				$('WhiteTea').style.opacity = "0.4";
				$('OtherTea').style.opacity = "0.4";
				$('OolongTea').style.opacity = "0.4";
				$(id).style.opacity = "1.0";
				$(id2).style.display = "inline";
				$(id2).style.visbility = "visible";
				$('button1').style.visbility = "hidden";
				$('button1').style.display = "none";
				$('button2').style.visbility = "hidden";
				$('button2').style.display = "none";
				$('button3').style.visbility = "hidden";
				$('button3').style.display = "none";
				$('button4').style.visbility = "hidden";
				$('button4').style.display = "none";
			}
		</script>
	</head>

	<body>
	
	<!--Header-->
		<header>
			<div id="header_interior">
					<img id="indexCover" src="img/infoMain.png" alt="contactUsBanner"><!--placeholder logo-->
			</div>
		</header>
	
		<!--Navbar  that stays fixed at top of screen.
		Basically had to create two nav bars, one of which (stickyNav) is hidden
		underneath the banner until the user scrolls past the first nav bar. There's an easier way to 
		do this with JavaScript but I don't know how yet. I will change the code
		after I learn how. For now, this accomplishes the same thing. Would be 100x easier to have the nav
		bar above the banner apparently but whatever.-->	
		<nav id="stickyNav">
			<div id ="logoBox">
			<img id ="logo" src="img/logo.png" alt="logo"><!--placeholder logo-->
			<h1 id="logoTitle">SereniTEA</h1>
			</div>
			<ul id="navList">
				<li><a href="index.php">Home</a></li>
				<li class="infoDropSticky"><a href="info_main.php">Information</a><!--Class to activate drop down menu-->
					<ul id="dropDown" class="infoDropContentSticky"><!--Drop down menu contents -->
						<li><a href="info_main.php">Types of Tea</a></li>
						<li><a href="info_page.php">Tea Producers</a></li>
						<li><a href="info_page.php">How is Tea Produced</a></li>
						<li><a href="steeping_methods.php">Steeping Methods</a></li>
						<li><a href="info_page.php">The History of Tea</a></li>
					</ul>
				</li>
				<li><a href="forum.php">Forum</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact Us</a></li>
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
			<div id="wrapper">
				<div id="breadcrumbs"> <!-- news articles page -->
					<ul>
						<li><a href="index.php">Home</a> &nbsp; ></li>
						<li class="lastcrumb">Information</li>
					</ul>    
				</div>

				<div class="info_wheel">
					<ul class="circle">
					
						<li id="GreenTea" onmouseout="deEmphCircle('info_greentea')" onmouseover="emphCircle('GreenTea', 'info_greentea')">
							<a class="TeaLink" href="info_pages/types_of_tea/green_tea.php">
								<div class="text">
									<h1>Green Tea</h1>
								</div>
							</a>
						</li>
						
						<li id="WhiteTea" onmouseout="deEmphCircle('info_whitetea')" onmouseover="emphCircle('WhiteTea', 'info_whitetea')">
							<a class="TeaLink" href="info_pages/types_of_tea/white_tea.php">
								<div class="text">
									<h1>White Tea</h1>
								</div>
							</a>
						</li>
						
						<li id="OtherTea" onmouseout="deEmphCircle('info_othertea')" onmouseover="emphCircle('OtherTea', 'info_othertea')">
							<a class="TeaLink" href="info_pages/types_of_tea/other_teas.php">
								<div class="text">
									<h1>Other Teas</h1>
								</div>
							</a>
						</li>
						
						<li id="OolongTea" onmouseout="deEmphCircle('info_oolongtea')" onmouseover="emphCircle('OolongTea', 'info_oolongtea')">
							<a class="TeaLink" href="info_pages/types_of_tea/oolong_tea.php">
								<div class="text">
									<h1>Oolong Tea</h1>
								</div>
							</a>
						</li>
						
						<li id="BlackTea" onmouseout="deEmphCircle('info_blacktea')" onmouseover="emphCircle('BlackTea', 'info_blacktea')">
							<a class="TeaLink" href="info_pages/types_of_tea/black_tea.php">
								<div class="text">
									<h1>Black Tea</h1>
								</div>
							</a>
						</li>
					</ul>
					
					<div id="info_greentea" class="popup">
						<div class="popup">
							<img src="img/green_tea_circle.jpg" alt="portrait">
						</div>
						<p class="popup"> 
							<h5>GREEN TEA</h5> 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor, 
							arcu et sagittis elementum, mi quam ultricies tortor, a lacinia urna diam
							et dolor. Nulla vitae enim non dolor aliquet efficitur at non felis.
						</p>
					</div>
					
					<div id="info_whitetea" class="popup">
						<div class="popup">
							<img src="img/white_tea_circle.jpg" alt="portrait">
						</div>
						<p class="popup"> 
							<h5>WHITE TEA</h5> 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor, 
							arcu et sagittis elementum, mi quam ultricies tortor, a lacinia urna diam
							et dolor. Nulla vitae enim non dolor aliquet efficitur at non felis.
						</p>
					</div>
					
					<div id="info_othertea" class="popup">
						<div class="popup">
							<img src="img/other_tea_circle.jpg" alt="portrait">
						</div>
						<p class="popup"> 
							<h5>OTHER TEAS</h5> 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor, 
							arcu et sagittis elementum, mi quam ultricies tortor, a lacinia urna diam
							et dolor. Nulla vitae enim non dolor aliquet efficitur at non felis.
						</p>
					</div>
					
					<div id="info_oolongtea" class="popup">
						<div class="popup">
							<img src="img/oolong_tea_circle.jpg" alt="portrait">
						</div>
						<p class="popup"> 
							<h5>OOLONG TEA</h5> 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor, 
							arcu et sagittis elementum, mi quam ultricies tortor, a lacinia urna diam
							et dolor. Nulla vitae enim non dolor aliquet efficitur at non felis.
						</p>
					</div>
					
					<div id="info_blacktea" class="popup">
						<div class="popup">
							<img src="img/black_tea_circle.jpg" alt="portrait">
						</div>
						<p class="popup"> 
							<h5>BLACK TEA</h5> 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor, 
							arcu et sagittis elementum, mi quam ultricies tortor, a lacinia urna diam
							et dolor. Nulla vitae enim non dolor aliquet efficitur at non felis.
						</p>
					</div>
					
					<a class="TeaButtons" href="info_page.php">
					<div class="info_button" id="button1">
						<h2>Tea Producers</h2>
					</div>
					</a>
					
					<a class="TeaButtons" href="info_page.php">
					<div class="info_button" id="button2">
						<h2>How is Tea Produced</h2>
					</div>
					</a>
					
					<a class="TeaButtons" href="steeping_methods.php">
					<div class="info_button" id="button3">
						<h2>Steeping Methods</h2>
					</div>
					</a>
					
					<a class="TeaButtons" href="info_page.php">
					<div class="info_button" id="button4">
						<h2>The History of Tea</h2>
					</div>
					</a>
				</div>
			</div>
		</main>

		<footer>
			<div id="footer-inner">
				<ul class="footer-content">
					<li><a href="site_map.php">Sitemap</a></li>
					<li><a href="contact.php">Feedback</a></li>
					<li>&copy; Copyright</li>
					
					<!--Social Media Links-->
					<li><a href="https://www.facebook.com/"><img src="img/facebook.jpg" alt="facebook"></a></li>
					<li><a href="https://www.instagram.com/"><img src="img/instagram.jpg" alt="facebook"></a></li>
					<li><a href="https://www.twitter.com/"><img src="img/twitter.jpg" alt="facebook"></a></li>
				</ul>
			</div>
		</footer>

	</body>