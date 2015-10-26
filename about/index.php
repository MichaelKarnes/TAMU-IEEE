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
<title>Texas A&M University IEEE | About Us</title>
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
			<div class="5grid-layout">
				<div class="row">
					<div class="12u" id="menu">
						<div id="menu-wrapper">
							<nav class="mobileUI-site-nav">
								<ul>
									<li><a href="../">Homepage</a></li>
									<li><a href="../mcc/">MC<sup>2</sup></a></li>
									<li><a href="../outreach/">Outreach</a></li>
									<li><a href="../activities/">Activities</a></li>
									<li><a href="../events/">Events</a></li>
									<li class="current_page_item"><a href="">About Us</a></li>
									<li><a href="../contact/">Contact Us</a></li>
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
						<section>
							<div class="post">
								<h2>Mission Statement</h2>
								<p>
									IEEE stands for The Institute of Electrical and Electronics Engineers. The mission of the IEEE is to foster technological innovation and excellence for the benefit of humanity. With 400,000 members, IEEE is the world’s largest professional technical organization.
								</p>
								<p>
									As a student branch of the IEEE, our mission is to prepare students for careers in technology. To further this mission, we do a variety of events and projects, including tech talks, corporate recruiting, socials, service projects, and microcontroller workshops.
								</p>
							</div>
						</section>
						<section>
							<div class="post">
								<h2>Membership</h2>
								<p>
									We are open to all undergraduate and graduate students! Most of our members are in the electrical or computer engineering fields, but we have active participants from a variety of disciplines.
								</p>
								<p>
									Our events are always open to everyone, regardless of membership. To officially become a member, students can register through the main IEEE organization (www.ieee.org). Being an official member gives students access to a variety of IEEE resources as well as student branch discounts on t-shirts, fleeces, and other items.
								</p>
								<p>
									Our student branch is one of the largest in the world, with over 400 student members. We have roughly equal amounts of undergraduate and graduate students.
								</p>
							</div>
						</section>
						<section>
							<div class="post">
								<h2>What We Do</h2>
								<p>
									Our student branch hosts a variety of events throughout the year, including:
								</p>
								<p>
									<span style="text-decoration: underline;">Tech Talks</span>: Researchers will discuss the cutting edge topics within a particular field. Tech talks allow students to learn about new innovations in technology as well as what it takes to be a successful researcher. Recent tech talks have covered topics such as radars, energy harvesting, and cryptography.
								</p>
								<p>
									<span style="text-decoration: underline;">Corporate Recruiting</span>: At corporate events, students learn about various industry jobs for engineers. Additionally, have the opportunity to get in contact with a numerous corporate recruiters. In recent years, we have had companies present from a variety of industries that semiconductors, oil & gas, power systems, aerospace, and chemicals.
								</p>
								<p>
									<span style="text-decoration: underline;">Socials</span>: These events allow students to network with each other in a relaxed atmosphere. Whether students are playing video games, board games, or laser tag, IEEE socials are a great way to de-stress and get to know your fellow students.
								</p>
								<p>
									<span style="text-decoration: underline;">Microcontroller Workshops</span>: Most of our electronic devices and machines are controlled by a small computer called a microcontroller, or MCU (for “microcontroller unit”). MCUs are in items such as toasters, TVs, cars, watches, thermostats, utility meters. Knowing how to program and work with microcontrollers is a skill that is in high demand. The IEEE Microcontroller Workshops teach the basics of microcontrollers to students. These workshops are free and open to all students. Students who attend will learn from various topics and be able to get help from MC2 Technical Fellows, who are IEEE volunteers that are knowledgeable about MCU technology.
								</p>
							</div>
						</section>
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