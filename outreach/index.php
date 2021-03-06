<?php
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
<title>Texas A&M University IEEE | Outreach</title>
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
									<li class="current_page_item"><a href="">Outreach</a></li>
									<li><a href="../activities/">Activities</a></li>
									<li><a href="../events/">Events</a></li>
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
					<div id="banner">
						<img src="../images/outreach-banner.png" alt="Outreach Banner" />
					</div>
					<div id="content">
						<p>
							The Outreach Committee plans community service projects for IEEE members to participate in throughout the semester. Anyone who wants to help plan service projects or get more involved with service projects should join. The Outreach Committee is a great way to give back to Texas A&M University and the Bryan/College Station area.
						</p>
						<br>
						<p>Outreach Chair: D'Anne Wilder</p>
						<p>Email: <a href="mailto:outreach@ieeetamu.org" target="_blank">outreach@ieeetamu.org</a></p>
						<br>
						<section style="float:left">
							<div class="post" style="float:left">
								<h2>The Big Event</h2>
								<p style="float:left">
									<a href="http://bigevent.tamu.edu/" target="_blank"><img src="http://bigevent.tamu.edu/files/Big%20Event%202.5x1.715%20300dpi%20RGB.jpg" width="200" alt="" align="left" class="img-alignleft" /></a>
									Every year, Outreach Committee organizes the Texas A&M IEEE Big Event group. This year, we helped out the community by cleaning up a family's back yard so that they could put their house up for sale. The best part was knowing that by helping out, we had contributed to the improvement of the Bryan/College Station area.
							</div>
						</section>
						<section style="float:left">
							<div class="post" style="float:left">
								<h2>Aggie Replant</h2>
								<p style="float:left">
									<a href="http://replant.tamu.edu/" target="_blank"><img src="http://replant.tamu.edu/files/tamumodern_logo.png" width="300" alt="" align="right" class="img-alignright" /></a>
									Outreach Committee also organizes the Texas A&M IEEE Aggie Replant group. In the fall semester, we planted 3 large trees in Bryan. This semester, we planted about 200 smaller trees in Bastrop to help restore their population of loblolly pines that were lost in the Bastrop County Fire of 2011. We hope to continue our tradition of giving back to the community by participating in Aggie Replant every semester.
								</p>
							</div>
						</section>
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