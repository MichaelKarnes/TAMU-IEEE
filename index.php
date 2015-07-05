<?php
require_once 'google-api-php-client-master/autoload.php';
$client = new Google_Client();
$client->setApplicationName("My Calendar"); //DON'T THINK THIS MATTERS
$client->setDeveloperKey('AIzaSyAe4UQX27_gpnFoSjgBOpG8rlPa_W3vYZw'); //GET AT AT DEVELOPERS.GOOGLE.COM
$cal = new Google_Service_Calendar($client);
$calendarId = 't697b8s431agv6c4knl1t3tg68@group.calendar.google.com';
require_once 'nivoslider.php';
require_once 'core/init.php';

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
<title>Texas A&M University IEEE</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<noscript>
<link rel="stylesheet" href="css/5grid/core.css" />
<link rel="stylesheet" href="css/5grid/core-desktop.css" />
<link rel="stylesheet" href="css/5fgrid/core-1200px.css" />
<link rel="stylesheet" href="css/5grid/core-noscript.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-desktop.css" />
</noscript>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<script src="scripts/popup.js"></script>
<script src="scripts/expand.js"></script>
<?php
$nivo = new NivoSlider('nivoslider', 1140, 349);
$nivo->render_includes();
?>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
</head><body>
<div id="wrapper">
	<div id="header-wrapper">
		<header id="header">
			<div class="5grid-layout">
				<div id="top" class="row">
					<div class="12u">
						<div id="logo">
							<h1><a href=""><img src="img/logo_white.png" alt="" style="display: block;" /></a></h1>
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
									<li class="current_page_item"><a href="">Homepage</a></li>
									<li><a href="mcc/">MC<sup>2</sup></a></li>
									<li><a href="outreach/">Outreach</a></li>
									<li><a href="activities/">Activities</a></li>
									<li><a href="events/">Events</a></li>
									<li><a href="about/">About Us</a></li>
									<li><a href="contact/">Contact Us</a></li>
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
					<div id="banner">
						<?php
							$nivo->add_slide('img/relay-for-life-banner.png','','alt');
							$nivo->add_slide('img/big-event-banner.png','','alt');
							$nivo->add_slide('img/freescale-workshop-banner.png','','alt');
							$nivo->render_slides();
						?>
					</div>
					<!--<div id="banner"><a href="#"><img src="img/pics01.jpg" alt=""></a></div>-->
				</div>
			</div>
		</div>
		<div class="5grid-layout">
			<div class="row">
				<div class="9u">
					<div id="content">
						<section style="float:left">
							<div class="post" style="float:left">
								<h2>Aggie Relay For Life</h2>
								<p style="float:left">
									<img src="https://ci3.googleusercontent.com/proxy/dVeAXqhfuRJAN3LQSCPiPePlDTgxN9PYCb-l9FSqR7sglN8qdsw_gnhJmPtJMdj6MH2W-XejHRES4UmUVvAg0RicMgsQHJllv8KFwZxnjVHAv41SZlxxN9wm=s0-d-e1-ft#http://cdn.patch.com/users/107116/2014/10/T800x600/54443f667ea61.jpg" width="200" alt="" align="left" class="img-alignleft" />
									IEEE will have a team for this year's Relay For Life which will take place on April 24th! If you are interested in participating please join our team. It is a lot of fun and all of the proceeds made during the event go to the American Cancer Society to help fund research to end cancer!! Click <a href="http://main.acsevents.org/site/TR?fr_id=64875&pg=team&team_id=1703795" target="_blank">here</a> to join our team!<br>
									<br>
									Full link: <a href="http://main.acsevents.org/site/TR?fr_id=64875&pg=team&team_id=1703795" target="_blank">http://main.acsevents.org/site/TR?fr_id=64875&pg=team&team_id=1703795</a>
								</p>
								<span class="expand" style="float:left">
									<span class="expand-details expand-less">
										<br>
										<span style="float: left; width: 70px;">Date: </span><span class="font2">April 24th</span><br>
										<span style="float: left; width: 70px;">Time: </span><span class="font2">7:00 - 7:00 am</span><br>
										<span style="float: left; width: 70px;">Location: </span><span class="font2">Penberthy Intramural Fields</span><br>
									</span>
									<br>
									<span class="expand-summary">View Details <i class="fa fa-chevron-down"></i></span>
								</span>
							</div>
						</section>
						<section style="float:left">
							<div class="post" style="float:left">
								<h2>MCC: Tech Time</h2>
								<p style="float:left">
									<img src="https://ci4.googleusercontent.com/proxy/E2-C_hRXS8LnUBO01LZtPFFCG6VeoFfjgMZw1_FDKCRIWlmZxA9El00sq22SguMoQ46Svw=s0-d-e1-ft#http://i.imgur.com/AqaMJIc.png" width="200" alt="" align="left" class="img-alignleft" />
									With the semester coming to an end, we won't be having a workshop this week. Instead, this Friday will be a regular Tech Time meeting. Tech Time is your chance to hang out with other students interested in microcontrollers, and to collaborate and learn about projects. To stay up do date with events see our Facebook page or calendar.<br>
									<br>
									Facebook - <a href="https://www.facebook.com/groups/ieeemcc/" target="_blank">https://www.facebook.com/groups/ieeemcc/</a><br>
									Calendar - <a href="http://www.ieeetamu.org/events/">http://www.ieeetamu.org/events/</a>
								</p>
								<span class="expand" style="float:left">
									<span class="expand-details expand-less">
										<br>
										<span style="float: left; width: 70px;">Date: </span><span class="font2">April 17th</span><br>
										<span style="float: left; width: 70px;">Time: </span><span class="font2">4:30 - 6:00 pm</span><br>
										<span style="float: left; width: 70px;">Location: </span><span class="font2">WERC 049</span><br>
									</span>
									<br>
									<span class="expand-summary">View Details <i class="fa fa-chevron-down"></i></span>
								</span>
							</div>
						</section>
					</div>
				</div>
				<div class="3u">
					<div id="sidebar2">
						<section>
							<div class="sbox1">
								<h2>Subscribe</h2>
								<form method="post" action="http://ieee.tamu.edu/mailman/subscribe/listserv_ieee.tamu.edu">
									<div style="margin-bottom: 10px;"><label style="font-weight: bold; display: inline-block; width: 25%;">Name: </label><input type="text" name="full_name" placeholder="Optional" style="width: 75%; box-sizing: border-box;" /></div>
									<div style="margin-bottom: 10px;"><label style="font-weight: bold; display: inline-block; width: 25%;">Email: </label><input type="email" name="email" style="width: 75%; box-sizing: border-box;" /></div>
									<center><input type="submit" value="Subscribe" class="button" /></center>
								</form>
							</div>
							<div class="sbox2">
								<h2>Upcoming Events</h2>
								<ul class="style1">
								<?php
									date_default_timezone_set('America/Chicago');
									$params = array(
										'singleEvents' => true,
										'orderBy' => 'startTime',
										'timeMin' => date(DateTime::ATOM),
									);
									$events = $cal->events->listEvents($calendarId, $params);

									$count = 0;
									$items_to_show = 5;

									foreach ($events->getItems() as $event) { 
										if($count < $items_to_show)
										{
											$eventDateStr = $event->start->dateTime;
											if(empty($eventDateStr))
												$eventDateStr = $event->start->date;
											?>
											<li>
												<a href="<?php echo $event->htmlLink;?>" target="_blank" title="<?php echo date('M d, Y', strtotime($eventDateStr)); if(!empty($event->start->dateTime)) echo ' at '.date('h:i a', strtotime($event->start->dateTime)); ?>"><?php echo $event->summary; ?></a>
											</li>
										<?php $count++; }
									} ?>
								</ul>
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
		<p>&copy; Texas A&M University IEEE |  Design: <a href="http://templated.co/">TEMPLATED</a> | <?php if($user->isLoggedIn()) { ?><a href="actions/logout.php">Log Out</a><?php } else { ?><a href="javascript:%20popup_show()">Meta Login</a><?php } ?></p>
	</section>
	<section id="popup">
		<!-- Login Form -->
		<form action="actions/login.php" id="popupform" onsubmit="return check_empty();" method="post" name="form">
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