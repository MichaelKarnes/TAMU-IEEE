<?php
require_once '../core/init.php';

$user = new User();

$token = Token::generate();

$error = Session::flash("error");
$success = Session::flash("success");
$idvar = Session::flash("id");
$namevar = Session::flash('name');
$majorvar = Session::flash('major');
$overall_gpavar = Session::flash('overall_gpa');
$major_gpavar = Session::flash('major_gpa');
?>
<!DOCTYPE HTML>
<!--
	Affinity by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
<title>Texas A&M University IEEE | Resumes</title>
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
							<h2>Preparing students for careers in technologies</h2>
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
                <div class="u3">&nbsp;</div>
				<div class="u6">
					<div id="content">
						<h2>Resumes</h2>
						<p>
                            By submitting your resume, you'll have a greater chance of standing out to our corporate sponsors. All resumes submitted
                            can be searched and downloaded by our sponsors.
                        </p>
                        <br>
                        <?php if(!empty($error)) { ?>
                        <p style="color: red; font-weight: bold;"><?php echo $error; ?></p>
                        <?php } ?>
                        <?php if(!empty($success)) { ?>
                        <p style="color: green; font-weight: bold;"><?php echo $success; ?></p>
                        <?php } ?>
                        <form action="../actions/upload/resume.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="u6" style="line-height: 36px; vertical-align: middle;">
                                    <label for="name"><b>Full Name:</b></label><br>
                                    <label for="id"><b>IEEE Member Number:</b></label><br>
                                    <label for="major"><b>Major:</b></label><br>
                                    <label for="overall_gpa"><b>Overall GPA:</b></label><br>
                                    <label for="major_gpa"><b>Major GPA:</b></label><br>
                                    <label for="resume"><b>Resume:</b></label>
                                </div>
                                <div class="u6" style="line-height: 36px;">
                                    <input type="text" id="name" name="name" style="width: 100%;" <?php echo 'value="'.$namevar.'"'; ?> /><br>
                                    <input type="number" id="id" name="id" style="width: 100%;" <?php echo 'value="'.$idvar.'"'; ?> /><br>
                                    <select id="major" name="major" style="width: 100%; box-sizing: initial;">
                                        <?php
                                            $db = DB::getInstance();
                                            $majors = $db->get('majors', array('1', '=', '1'))->results();
                                            foreach($majors as $major) {
                                        ?>
                                        <option <?php if($majorvar == $major->id) { ?> selected <?php } ?>value="<?php echo $major->id; ?>"><?php echo $major->abbrev; ?> - <?php echo $major->name; ?></option>
                                        <?php } ?>
                                    </select><br>
                                    <input type="text" id="overall_gpa" name="overall_gpa" style="width: 100%;" <?php echo 'value="'.$overall_gpavar.'"'; ?> /><br>
                                    <input type="text" id="major_gpa" name="major_gpa" style="width: 100%;" <?php echo 'value="'.$major_gpavar.'"'; ?> /><br>
                                    <input type="file" id="resume" name="resume" style="width: 100%;" /><br>
                                    <input type="hidden" name="token" value="<?php echo $token; ?>" />
                                    <input type="submit" class="button" value="Submit" />
                                </div>
                            </div>
                        </form>
					</div>
				</div>
                <div class="u3">&nbsp;</div>
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
			<input type="hidden" name="token" value="<?php echo $token; ?>" />
			<center><input type="submit" id="submit" class="button" value="Login" /></center>
		</form>
	</section>
</div>
</body>
</html>