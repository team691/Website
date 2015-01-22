<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
	<title>
		FRC Team 691 - Project 691 Robotics
	</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	<div class="wrapper">
		<!-- HEADER START -->
		<div class="header">
			<a href="."><img class="logo" src="logo.png"></a>
			<div class="dropdown">
				<ul>
					<li><a href="?p=home">Home</a></li>
					<li>
						<a href="?p=sponsors">Sponsors</a>
						<ul>
							<li><a href="http://appliedcompanies.com">Applied Companies</a></li>
							<li><a href="http://baylessengineering.com">Bayless Engineering</a></li>
							<li><a href="http://jpl.nasa.gov">NASA JPL</a></li>
							<li><a href="http://sjmfoundation.com">St. Jude</a></li>
							<li><a href="http://solidworks.com">Solidworks</a></li>
							<li><a href="http://bostonscientific.com">Boston Scientific</a></li>
							<li><a href="http://ndep.us">NDEP</a></li>
							<li><a href="http://scautobrokers.net">SC Auto Brokers</a></li>
							<li><a href="http://utak.com">UTAK</a></li>
							<li><a href="http://nbsparts.com">National Bandsaw Company</a></li>
						</ul>
					</li>
					<li>
						<a href="?p=aboutus">About Us</a>
						<ul>
							<li><a href="?p=aboutus-whoarewe">Who Are We?</a></li>
							<li><a href="?p=aboutus-awards">Awards</a></li>
							<li><a href="?p=aboutus-media">Media</a></li>
							<li><a href="?p=aboutus-faq">FAQ</a></li>
						</ul>
					</li>
					<li>
						<a href="?p=robots">Robots</a>
						<ul>
							<li><a href="?p=robots-blackwing">Blackwing</a></li>
							<li><a href="?p=robots-doom">Doom</a></li>
							<li><a href="?p=robots-mostlyharmless">Mostly Harmless</a></li>
							<li><a href="?p=robots-masterchief">Master Chief</a></li>
							<li><a href="?p=robots-divineintervention">Divine Intervention</a></li>
							<li><a href="?p=robots-bluebot">Blue Bot</a></li>
						</ul>
					</li>
					<li><a href="?p=calendar">Calendar</a></li>
					<li><a href="?p=shop">Shop</a></li>
					<li><a href="?p=donate">Donate</a></li>
					<li><a href="?p=contactus">Contact Us</a></li>
				</ul>
			</div>
		</div>
		<!-- HEADER END -->

		<!-- CONTENT START -->
		<div class="content">

			<!-- SIDEBAR START -->
			<div class="sidebar">
				<a class="twitter-timeline" href="https://twitter.com/project691" data-widget-id="386721008700252160">Tweets by @Project691</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<div class="socialmedia">
					<a href="https://www.facebook.com/team691"><img class="socialicon" src="images/icons/facebook.png"></a>
					<a href="https://twitter.com/project691"><img class="socialicon" src="images/icons/twitter.png"></a>
					<a href="https://www.youtube.com/user/Hartrobotics691"><img class="socialicon" src="images/icons/youtube.png"></a>
				</div>
			</div>
			<!-- SIDEBAR END -->

			<!-- PAGE START -->
			<div class="page">
				<?php
					if(isset($_GET["p"])) {
						$page = "pages/" . str_replace("-", "/", $_GET["p"]) . ".html";
						if(file_exists($page)) {
							include($page);
						} else {
							$_GET["err"] = 404;
							require("pages/error.html");
						}
					} else {
						require("pages/home.html");
					}
				?>
			</div>
			<!-- PAGE END -->

		</div>
		<!-- CONTENT END -->

		<!-- FOOTER START -->
		<div class="sponsorfooter">
			<img class="xlarge sponsoricon" src="images/sponsors/appliedcompanies.png">
			<img class="xlarge sponsoricon" src="images/sponsors/baylessengineering.png">
			<img class="large sponsoricon" src="images/sponsors/nasa.png"><img class="large sponsoricon" src="images/sponsors/jpl.png">
			<img class="large sponsoricon" src="images/sponsors/stjude.png">
			<img class="large sponsoricon" src="images/sponsors/solidworks.png">
			<img class="medium sponsoricon" src="images/sponsors/bostonscientific.png">
			<img class="medium sponsoricon" src="images/sponsors/ndep.png">
			<img class="small sponsoricon" src="images/sponsors/scautobrokers.png">
			<img class="small sponsoricon" src="images/sponsors/utak.png">
			<img class="small sponsoricon" src="images/sponsors/nbscompany.png">
		</div>
		<div class="footer">
			Copyright &copy; 2013-<?php echo date("Y"); ?> Project 691 Robotics. | Code available on <a href="https://github.com/team691/website">Github</a>. | Licensed under the <a href="?p=license">GNU GPLv2</a>.
		</div>
		<!-- FOOTER END -->
	</div>
</body>

</html>
