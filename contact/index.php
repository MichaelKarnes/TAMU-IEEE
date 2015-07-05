<?php
require_once '../google-api-php-client-master/autoload.php';
$client = new Google_Client();
$client->setApplicationName("My Calendar"); //DON'T THINK THIS MATTERS
$client->setDeveloperKey('AIzaSyAe4UQX27_gpnFoSjgBOpG8rlPa_W3vYZw'); //GET AT AT DEVELOPERS.GOOGLE.COM
$cal = new Google_Service_Calendar($client);
$calendarId = 't697b8s431agv6c4knl1t3tg68@group.calendar.google.com';
require_once '../core/init.php';

$user = new User();
?>
<!DOCTYPE HTML>
<!--
	Affinity by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
<title>Texas A&M University IEEE | Contact Us</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<noscript>
<link rel="stylesheet" href="../css/5grid/core.css" />
<link rel="stylesheet" href="../css/5grid/core-desktop.css" />
<link rel="stylesheet" href="../css/5grid/core-1200px.css" />
<link rel="stylesheet" href="../css/5grid/core-noscript.css" />
<link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="../css/style-desktop.css" />
</noscript>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="../css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<script src="../scripts/popup.js"></script>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
</head><body>
<div id="wrapper">
	<div id="header-wrapper">
		<header id="header">
			<div class="5grid-layout">
				<div id="top" class="row">
					<div class="12u">
						<div id="logo">
							<h1><a href="../"><img src="../img/logo_white.png" alt="" style="display: block;" /></a></h1>
							<h2><?php if($user->isLoggedIn()) { ?><font style="font-family: 'Niconne'; font-size: 24pt; color: white;"><?php echo escape($user->data()->username); ?></font><?php } else { ?>Preparing students for careers in technologies<?php } ?></h2>
						</div>
						<div id="social">
							<ul class="contact">
								<li><a href="https://www.facebook.com/ieeetamu" target="_blank" class="fa fa-facebook fa-2x"><span></span></a></li>
								<li><a href="https://twitter.com/TAMU_IEEE" target="_blank" class="fa fa-twitter fa-2x"><span></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="5grid-layout">
				<div class="row">
					<div class="12u" id="menu">
						<div id="menu-wrapper">
							<nav class="mobileUI-site-nav">
								<ul>
									<li><a href="../">Homepage</a></li>
									<li><a href="../mcc">MC<sup>2</sup></a></li>
									<li><a href="../outreach/">Outreach</a></li>
									<li><a href="../activities/">Activities</a></li>
									<li><a href="../events/">Events</a></li>
									<li><a href="../about/">About Us</a></li>
									<li class="current_page_item"><a href="">Contact Us</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
	<div id="page-wrapper" class="5grid-layout">
		<div class="5grid-layout">
			<div class="row">
				<div class="12u">
					<div id="content">
						<h2>Contacts Us</h2>
						<p>Howdy!</p>
						<p>If you have any questions, please email <a href="mailto:secretary@ieeetamu.org" target="_blank">secretary@ieeetamu.org</a>.</p>
						<br>
						<table>
							<tr>
								<th>Position</th>
								<th>Name</th>
								<th>Email</th>
							</tr>
							<tr>
								<td>President</td>
								<td>Ken McDole</td>
								<td><a href="mailto:president@ieeetamu.org" target="_blank">president@ieeetamu.org</a></td>
							</tr>
							<tr>
								<td>Vice President</td>
								<td>Zac Clingaman</td>
								<td><a href="mailto:vp@ieeetamu.org" target="_blank">vp@ieeetamu.org</a></td>
							</tr>
							<tr>
								<td>Chief Financial Officer</td>
								<td>Nathan Parish</td>
								<td><a href="mailto:cfo@ieeetamu.org" target="_blank">cfo@ieeetamu.org</a></td>
							</tr>
							<tr>
								<td>Activities Chair</td>
								<td>Alex Benavides</td>
								<td><a href="mailto:activities@ieeetamu.org" target="_blank">activities@ieeetamu.org</a></td>
							</tr>
							<tr>
								<td>Corporate Relations Chair</td>
								<td>Adway Dogra</td>
								<td><a href="mailto:corporate@ieeetamu.org" target="_blank">corporate@ieeetamu.org</a></td>
							</tr>
							<tr>
								<td>Information Technology Chair</td>
								<td>Michael Karnes</td>
								<td><a href="mailto:it@ieeetamu.org" target="_blank">it@ieeetamu.org</a></td>
							</tr>
							<tr>
								<td>Marketing Chair</td>
								<td>Yuki Oji</td>
								<td><a href="mailto:marketing@ieeetamu.org" target="_blank">marketing@ieeetamu.org</a></td>
							</tr>
							<tr>
								<td>MC<sup>2</sup> Chair</td>
								<td>Cory Maughmer</td>
								<td><a href="mailto:mcc@ieeetamu.org" target="_blank">mcc@ieeetamu.org</a></td>
							</tr>
							<tr>
								<td>Outreach Chair</td>
								<td>D'Anne Wilder</td>
								<td><a href="mailto:outreach@ieeetamu.org" target="_blank">outreach@ieeetamu.org</a></td>
							</tr>
							<tr>
								<td>Secretary</td>
								<td>Benjamin Cervantes</td>
								<td><a href="mailto:secretary@ieeetamu.org" target="_blank">secretary@ieeetamu.org</a></td>
							</tr>
							<tr>
								<td>EGE Graduate Advisor</td>
								<td>Jackie Perez</td>
								<td><a href="mailto:jackieperez@tamu.edu" target="_blank">jackieperez@tamu.edu</a></td>
							</tr>
							<tr>
								<td>Faculty Advisor</td>
								<td>Dr. Gregory Huff</td>
								<td><a href="mailto:ghuff@tamu.edu" target="_blank">ghuff@tamu.edu</a></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="copyright" class="5grid-layout">
	<section>
		<p>&copy; Texas A&M University IEEE |  Design: <a href="http://templated.co/">TEMPLATED</a> | <?php if($user->isLoggedIn()) { ?><a href="../actions/logout.php">Log Out</a><?php } else { ?><a href="javascript:%20popup_show()">Meta Login</a><?php } ?></p>
	</section>
	<section id="popup">
		<!-- Login Form -->
		<form action="../actions/login.php" id="popupform" onsubmit="return check_empty();" method="post" name="form">
			<i id="close" class="fa fa-close" onclick ="popup_hide();"></i>
			Login
			<hr>
			<label for="username">Username: </label><input id="username" name="username" type="text">
			<label for="password">Password: </label><input id="password" name="password" type="password">
			<input type="checkbox" id="remember" name="remember" ><label for="remember"> Remember me</label>
			<input type="hidden" name="token" value="<?php echo Token::generate(); ?>" />
			<center><input type="submit" id="submit" class="button" value="Login" /></center>
		</form>
	</section>
</div>
</body>
</html>