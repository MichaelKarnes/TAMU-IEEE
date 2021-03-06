<?php
require_once '../plugins/google-api-php-client-master/autoload.php';
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
<title>Texas A&M University IEEE | Events</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<noscript>
<link rel="stylesheet" href="../css/grid/core.css" />
<link rel="stylesheet" href="../css/grid/core-desktop.css" />
<link rel="stylesheet" href="../css/grid/core-1200px.css" />
<link rel="stylesheet" href="../css/grid/core-noscript.css" />
<link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="../css/style-desktop.css" />
</noscript>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="../css/grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<script src="../scripts/popup.js"></script>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
</head><body>
<div id="wrapper">
	<div id="header-wrapper">
		<header id="header">
			<div class="grid-layout">
				<div id="top" class="row">
					<div class="u12">
						<div id="logo">
							<h1><a href="../"><img src="../images/logo_white.png" alt="" style="display: block;" /></a></h1>
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
			<div class="grid-layout">
				<div class="row">
					<div class="u12" id="menu">
						<div id="menu-wrapper">
							<nav class="mobileUI-site-nav">
								<ul>
									<li><a href="../">Homepage</a></li>
									<li><a href="../mcc/">MC<sup>2</sup></a></li>
									<li><a href="../outreach/">Outreach</a></li>
									<li><a href="../activities/">Activities</a></li>
									<li class="current_page_item"><a href="">Events</a></li>
									<li><a href="../about/">About Us</a></li>
									<li><a href="../contact/">Contact Us</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
	<div id="page-wrapper" class="grid-layout">
		<div class="grid-layout">
			<div class="row">
				<div class="u12">
					<div id="content">
						<h2>Events</h2>
						<iframe src="https://www.google.com/calendar/embed?src=t697b8s431agv6c4knl1t3tg68%40group.calendar.google.com&ctz=America/Chicago;width=1140&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;" style=" border-width:0 " width="1140" height="700" frameborder="0" scrolling="no"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="copyright" class="grid-layout">
	<section>
		<p>&copy; Texas A&M University IEEE |  Design: <a href="http://templated.co/">TEMPLATED</a> | <a href="javascript:%20popup_show()">Meta Login</a></p>
        <br>
	</section>
    <section id="sponsors">
        <ul>
            <li><a href="http://www.ieee.org/index.html" target="_blank"><img src="../images/ieee-logo.png" alt="IEEE" height="30" /></a></li>
            <li><a href="http://burnsmcd.com/" target="_blank"><img src="../images/burns-mcdonnell-logo.png" alt="Burns McDonnell" height="30" /></a></li>
            <li><a href="http://www.dow.com/" target="_blank"><img src="../images/dow-logo.png" alt="DOW Chemical" height="30" /></a></li>
            <li><a href="http://www.shell.us/" target="_blank"><img src="../images/shell-logo.png" alt="Shell" height="30" /></a></li>
            <li><a href="http://www.chevron.com/" target="_blank"><img src="../images/chevron-logo.png" alt="Chevron" height="30" /></a></li>
            <li><a href="http://www.boeing.com/" target="_blank"><img src="../images/boeing-logo.png" alt="Boeing" height="30" /></a></li>
        </ul>
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