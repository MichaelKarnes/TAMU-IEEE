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
							<h1><a href=""><img src="images/logo_white.png" alt="" style="display: block;" /></a></h1>
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
                            $nivo->add_slide('images/ieee-spotlight-banner.png','spotlight','IEEE Spotlight');
							$nivo->render_slides();
						?>
					</div>
					<!--<div id="banner"><a href="#"><img src="images/pics01.jpg" alt=""></a></div>-->
				</div>
			</div>
		</div>
		<div class="5grid-layout">
			<div class="row">
				<div class="9u">
					<div id="content">
						<section style="float:left">
							<div class="post" style="float:left">
								<h2>Microcontroller Committee: First Meeting</h2>
								<p style="float:left">
									<img src="http://www.ieeetamu.org/images/MCC+Logo+Design.png" width="200" alt="" align="left" class="img-alignleft" />
									<b>Do you have a passion for electronics and technology?</b><br>
                                    The Microcontroller Committee works to create an environment where students can gain practical skills that will help them succeed in the future.<br>
                                    <br>
                                    <br>
                                    <br>
                                    <b>How do I get involved?</b><br>
                                    Bring your ideas and passion to learn!<br>
                                    <br>
                                    Getting involved with the Microcontroller Committee will help make your resume stand out!
                                </p>
								<span class="expand" style="float:left">
									<span class="expand-details expand-less">
										<br>
										<span style="float: left; width: 70px;">Date: </span><span class="font2">TBA</span><br>
										<span style="float: left; width: 70px;">Time: </span><span class="font2">TBA</span><br>
										<span style="float: left; width: 70px;">Location: </span><span class="font2">TBA</span><br>
									</span>
									<br>
									<span class="expand-summary">View Details <i class="fa fa-chevron-down"></i></span>
								</span>
							</div>
						</section>
                        <section style="float:left; width: 100%;">
							<div class="post" style="float:left;">
								<h2>Network with Intel</h2>
								<p style="float:left; width: 100%;">
									<img src="http://www.ieeetamu.org/images/Intel.jpg" width="200" alt="" align="left" class="img-alignleft" />
                                </p>
								<span class="expand" style="float:left">
									<span class="expand-details expand-less">
										<br>
										<span style="float: left; width: 70px;">Date: </span><span class="font2">November 5th (Thursday)</span><br>
										<span style="float: left; width: 70px;">Time: </span><span class="font2">TBA</span><br>
										<span style="float: left; width: 70px;">Location: </span><span class="font2">TBA</span><br>
                                        <span style="float: left;">* Food and Drinks will be provided. Also, make sure to bring your resume!</span>
									</span>
									<br>
									<span class="expand-summary">View Details <i class="fa fa-chevron-down"></i></span>
								</span>
							</div>
						</section>
                        <section style="float:left; width: 100%;">
							<div class="post" style="float:left;">
								<h2>Other Events</h2>
                                <b>National Security Agency CyberSprint</b><br>
								<span class="expand">
									<span class="expand-details expand-less">
                                        <br>
                                        <b>Shut down a simulated security threat in our cyber competition</b><br>
                                        <br>
                                        This fall, you have a chance to pit your critical thinking and technical skills against top students and recent grads across the country.<br>
                                        <br>
                                        As the federal agency charged with foreign signals intelligence and information assurance, the National Security Agency (NSA) invites you to try out for the 2015 NSA CyberSprint, a challenge that asks you to solve a simulated security threat within 72 hours.<br>
                                        <br>
                                        First, you'll need to complete a skills assessment to see if you have what it takes to solve difficult problems. Students can participate anytime between Oct. 28 and Nov. 2, but you will have only 8 hours to complete the assessment from initial login.<br>
                                        <br>
                                        Registration is limited and goes live Tuesday, Sept. 29, so save the date and watch for further instructions via email!<br>
                                        <br>
                                        Only the top 300 competitors will be invited to move on to the virtual CyberSprint, which will take place between Nov. 9 and 19.<br>
                                        <br>
                                        If you’re one of the winners, NSA will recognize you and your school ... and take a serious look at your resume, if you’re interested in NSA as a career option.*<br>
                                        <br>
                                        <br>
                                        <b>Extraordinary Work</b><br>
                                        NSA is the place where extraordinary people do extraordinary work. Check out <a href="https://www.nsa.gov/careers" target="_blank">www.NSA.gov/Careers</a> for a more in-depth look at our exciting career and student opportunities.<br>
                                        <br>
                                        *U.S. citizenship required for employment<br>
                                    </span>
									<span class="expand-summary">View Details <i class="fa fa-chevron-down"></i></span>
								</span><br>
                                <br>
                                <b>Sandia National Labs Critical Skills Master's Program and Master's Fellowship Program</b><br>
								<span class="expand">
									<span class="expand-details expand-less">
                                        <br>
                                        Are you finishing up your undergrad degree in CS, CE, Cybersecurity, EE, ME or Mathematics and planning to enroll in a Master's program next fall? If you have a GPA of 3.2 or higher, and are interested in a career in national security, then check out Sandia National Labs <a href="https://www.aftercollege.com/op/op.asp?id=16163&campaignid=7eb9PQvNbYydLH6E&messageid=QDCEzHf1Sg3USbv4&jid=0&messageid=M7xBUIcUyVzo4sk4&campaignid=jC0lFsUPj00Au7KY&gid=0&sid=0" target="_blank">Critical Skills Master's Program</a>, or our <a href="https://www.aftercollege.com/op/op.asp?id=16164&campaignid=7eb9PQvNbYydLH6E&messageid=QDCEzHf1Sg3USbv4&jid=0&messageid=M7xBUIcUyVzo4sk4&campaignid=jC0lFsUPj00Au7KY&gid=0&sid=0" target="_blank">Master's Fellowship Program</a> for underrepresented minorities.<br>
                                        <br>
                                        Positions are available at our Albuquerque, NM and Livermore, CA (Bay Area) locations. If selected for one of these prestigious programs, you will be hired by Sandia and enter graduate school full time to pursue your technical discipline master’s degree. <b>Sandia pays for your tuition and a stipend while in school. Following degree completion, you return to Sandia and start your life changing science or engineering career.</b><br>
                                        <br>
                                        About Us:<br>
                                        Sandia does national security work that is beyond the scope or means of most private organizations, pushing frontiers at the edge of science and engineering.<br>
                                        <br>
                                        And what we do matters. Our technologies—which make our nation safer, improve human and environmental health, and even boost the competitiveness of U.S. industry—can truly change the world.<br>
                                        <br>
                                        That’s why we can offer you a career that has the power to change your life. Working here, you’ll join some of the top minds in the country in solving difficult challenges in electrical engineering, mechanical engineering, computer science, and cyber security.<br>
                                        <br>
                                        In addition to working at the forefront of technology on problems of real significance, you can expect competitive pay, top-notch benefits, and a work-life balance that gives you time to enjoy family, friends, and the rich cultural, educational, and recreational opportunities that surround our sites in Albuquerque, NM, and Livermore, CA.<br>
                                        <br>
                                        Take your chance to change the world—and experience the changes in your life.
                                        <br>
                                        Sound interesting? <b>Please apply online at <a href="http://www.sandia.gov/careers" target="_blank">www.sandia.gov/careers</a>.</b> Under “Job Family”, select “Special Degree Program” or do a keyword search using CSMP or MFP.<br>
                                        <br>
                                        <em>If this is not the right program for you, check out our regular positions, internships and post doc jobs at <a href="http://www.sandia.gov" target="_blank">www.sandia.gov</a>. Feel free to pass this along to your colleagues and friends.</em><br>
									</span>
									<span class="expand-summary">View Details <i class="fa fa-chevron-down"></i></span>
								</span><br>
                                <br>
                                <b>Undergraduate Research Symposium at Rice University</b><br>
								<span class="expand">
									<span class="expand-details expand-less">
                                        <br>
                                        The Rice University Departments of BioSciences, Chemical and Biomolecular Engineering, Chemistry, Electrical and Computer Engineering, Physics and Astronomy, and Statistics encourage undergraduate students conducting research in these and related fields to participate in the Gulf Coast Undergraduate Research Symposium to be held at Rice University on October 17, 2015.<br>
                                        <br>
                                        We are delighted if advisors accompany their students, and are happy to involve accompanying advisors as judges in the sessions. The symposium format is 15-min oral PowerPoint presentations. Our students report that giving formal presentations in a multi-institution event is more interesting and valuable than either an in-house presentation series or regional conference poster session. To close the symposium, we'll have a dinner and awards ceremony for all GCURS participants and will recognize outstanding oral presentations.<br>
                                        <br>
                                        Interested students should register online at <a href="http://gcurs.rice.edu/" target="_blank">gcurs.rice.edu</a> and submit a one-page research abstract by Monday, October 1, 2015. We can accommodate 60 students in each section. In previous years we have been able to accommodate everyone who wanted to speak, but if capacity becomes limiting we will select participants on the basis of submitted abstracts. Meals will be provided on the day of the symposium, and some funding is available to support lodging for early applicants.<br>
                                        <br>
                                        We look forward to meeting you and learning about your discoveries!<br>
									</span>
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
								<form method="post" action="actions/subscribe.php">
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
<?php
$error = Session::flash("error");
if(!empty($error)) { ?>
<script type="text/javascript">alert('<?php echo $error; ?>');</script>
<?php } ?>
</body>
</html>