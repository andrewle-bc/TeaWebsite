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
		<title>SereniTEA - Register/Sign-in</title>
		<link rel="stylesheet" href="alt.css">
		<script src="validation.js"></script>
	</head>

	<body>
	
	<!--Header-->
		<header>
			<div id="registerHeader">
					<h1 id="bannerHeaderSmall">Register</h1>
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
						<li><a href="info_pages/tea_location.php">Tea Producers</a></li>
						<li><a href="info_pages/tea_production.php">How is Tea Produced</a></li>
						<li><a href="info_pages/brewing_method.php">Brewing Methods</a></li>
						<li><a href="info_pages/tea_history.php">The History of Tea</a></li>
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
			<div id="breadcrumbs"> 
				<ul>
					<li><a href="index.php">Home</a> &nbsp; ></li>
					<li class="lastcrumb">Register/Sign In</li>
				</ul>    
			</div>
			
			<div id="wrapper">
			<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
	?>
				<div class="register_content" id="reg_left">
					<h3>SIGN-IN HERE</h3>
					<form id="loginform" name="loginform" method="post" action="login.php" onsubmit="return checkFormSignIn()">
						<label for="loginUser"><h4>Username: </h4></label>
						<input type="text" placeholder="Enter Username here.." id="loginUser" name="login">
						<span class="confirmMessage" id="confirmMessageUserSignIn"></span>
						
						<label for="loginPassword"><h4>Password: </h4></label>					
						<input type="password" placeholder="Enter password here.." id="loginPassword" name="password">
						<span class="confirmMessage" id="confirmMessagePassSignIn"></span>
						<br><br><br>
					<input type="submit" id="reg_left_button">
					</form>
				</div>
				
				<div class="register_content" id="reg_right">
					<h3>NOT A MEMBER? REGISTER HERE</h3>
					<form id ="registerform" name="registerform" method="post" action="registration.php" onsubmit="return checkFormReg()">
						
						<label for="fname"><h4>First Name: </h4></label>
							<input type="text" placeholder="Enter first name here.." name="fname" id="fname">
							<span class="confirmMessage" id="confirmMessageFirstName"></span>
						
						<label for="lname"><h4>Last Name: </h4></label>
							<input type="text" placeholder="Enter last name here.." name="lname" id="lname">
							<span class="confirmMessage" id="confirmMessageLastName"></span>
						
						<label for="login"><h4>Username: </h4></label>
							<input type="text" placeholder="Enter username here.." name="login" id="login">
							<span class="confirmMessage" id="confirmMessageUser"></span>
						
						<label for="email"><h4>E-Mail Address: </h4></label>
							<input type="text" placeholder="Enter e-mail address here.." name="email" id="email">
							<span class="confirmMessage" id="confirmMessageEmail"></span>
						
						<label for="password"><h4>Password: </h4></label>
							<input type="password" placeholder="Enter password here.." name="password" id="password">
							<span class="confirmMessage" id="confirmMessagePass"></span>
						
						<label for="cpassword"><h4>Re-type Password: </h4></label>
							<input type="password" placeholder="Re-type password here.." name="cpassword" id="cpassword" onkeyup="checkPass(); return false;">
         					<span class="confirmMessage" id="confirmMessageRepeat"></span>
						<br><br><br>
					<input type="submit" id="submit">
					</form>
				</div>
				
				<div class="anchor">
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