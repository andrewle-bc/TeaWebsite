<?php

	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name

	// get value of id that sent from address bar
	$id=$_GET['id'];

	$sql="SELECT * FROM $tbl_name JOIN members ON members.member_id = topic.member_id WHERE id='$id'";
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);

	$rows=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SereniTEA - Forum</title>
		<link rel="stylesheet" href="alt.css">
	
	</head>

	<body>
	
	<!--Header-->
		<header>
			<div id="header_interior">
					<img id="indexCover" src="img/forum.png" alt="contactUsBanner"><!--placeholder logo-->
			</div>
		</header>
	
		<!--Navbar-->	
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
			<div id="breadcrumbs"> <!-- news articles page -->
				<ul>
					<li><a href="index.php">Home</a> &nbsp; ></li>
					<li><a href="forum.php">Forum</a> &nbsp; ></li>
					<li class="lastcrumb">Topic</li>
				</ul>    
			</div>
		
			<div id="wrapper">
				<div>
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
					<tr>
					<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
					<tr>
					<td bgcolor="#F8F7F1"><strong><?php echo $rows['topic']; ?></strong></td>
					</tr>

					<tr>
					<td bgcolor="#F8F7F1"><?php echo $rows['detail']; ?></td>
					</tr>

					<tr>
					<td bgcolor="#F8F7F1"><strong>By :</strong><?php echo $rows['firstname']; ?></td>
					</tr>

					<tr>
					<td bgcolor="#F8F7F1"><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
					</tr>
					</table></td>
					</tr>
					</table>
					<BR>
					<?php
					$tbl_name2="response"; // Switch to table "response"

					$sql2="SELECT * FROM $tbl_name2 join members on 
						members.member_id = response.member_id and topic_id='$id'";
					$result2=mysqli_query($GLOBALS["___mysqli_ston"], $sql2);

					while($rows=mysqli_fetch_array($result2)){
					?>
					
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
					<tr>
					<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
					<tr>
					<td bgcolor="#F8F7F1"><strong>ID</strong></td>
					<td bgcolor="#F8F7F1">:</td>
					<td bgcolor="#F8F7F1"><?php echo $rows['id']; ?></td>
					</tr>
					<tr>
					<td width="18%" bgcolor="#F8F7F1"><strong>Name</strong></td>
					<td width="5%" bgcolor="#F8F7F1">:</td>
					<td width="77%" bgcolor="#F8F7F1"><?php echo $rows['firstname']; ?></td>
					</tr>
					<tr>
					<td bgcolor="#F8F7F1"><strong>Response</strong></td>
					<td bgcolor="#F8F7F1">:</td>
					<td bgcolor="#F8F7F1"><?php echo $rows['response']; ?></td>
					</tr>
					<tr>
					<td bgcolor="#F8F7F1"><strong>Date/Time</strong></td>
					<td bgcolor="#F8F7F1">:</td>
					<td bgcolor="#F8F7F1"><?php echo $rows['datetime']; ?></td>
					</tr>
					</table></td>
					</tr>
					</table><br>

					<?php
					}
					((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
					?>

					<BR>
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
					<tr>
					<form name="form1" method="post" action="add_response.php">
					<td>
					
					<?php
					if (!isLoggedIn()) {
					echo "Please login to post comments!";
					exit();
					}
					?>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
					<tr>
					<td valign="top"><strong>Response</strong></td>
					<td valign="top">:</td>
					<td><textarea name="response" id="forumResponse" cols="45" rows="10" id="answer" width="100px"></textarea></td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
					<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
					</tr>
					</table>
					</td>
					</form>
					</tr>
					</table>
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