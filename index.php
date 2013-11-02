<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
	<title>
		FRC Team 691 - Hart District Robotics
	</title>
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
							<li><a href="http://baylessengineering.com">Bayless Engineering</a></li>
							<li><a href="http://jpl.nasa.gov">NASA JPL</a></li>
							<li><a href="http://ndep.nih.gov">NDEP</a></li>
							<li><a href="http://airgas.com">Airgas</a></li>
							<li><a href="http://sjmfoundation.com">St. Jude</a></li>
							<li><a href="http://appliedcompanies.net">Applied Companies</a></li>
							<li><a href="http://thescmg.com">SCMG</a></li>
							<li><a href="http://raytheon.com">Raytheon</a></li>
						</ul>
					</li>
					<li>
						<a href="?p=aboutus">About Us</a>
						<ul>
							<li><a href="?p=aboutus-whoarewe">Who Are We?</a></li>
							<li><a href="?p=aboutus-meettheteam">Meet the Team</a></li>
							<li><a href="?p=aboutus-awards">Awards</a></li>
							<li><a href="?p=aboutus-media">Media</a></li>
							<li><a href="?p=aboutus-faq">FAQ</a></li>
						</ul>
					</li>
					<li>
						<a href="?p=robots">Robots</a>
						<ul>
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
			</div>
			<!-- SIDEBAR END -->

			<!-- PAGE START -->
			<div id="page" class="page">
				<?php
					$page = isset($_GET["p"]) ? file_get_contents("pages/".str_replace("-", "/", $_GET["p"]).".html") : file_get_contents("pages/home.html");
					echo $page;
				?>
			</div>
			<!-- PAGE END -->

		</div>
		<!-- CONTENT END -->

		<!-- FOOTER START -->
		<div class="footer">
			<strong>Copyright (c) 2013 Techwolf / Project 691. | Design & code by Techwolf.</strong>
		</div>
		<!-- FOOTER END -->
	</div>
</body>

</html>