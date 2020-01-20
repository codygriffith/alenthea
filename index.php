<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alenthea Design Co.</title>
<link href="index.css" rel="stylesheet" type="text/css">
<link href="sections/contact.css" rel="stylesheet" type="text/css">
<link href="sections/footer.css" rel="stylesheet" type="text/css">
<!-- <meta http-equiv="refresh" content="1"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <base href="http://www.alenthea.com/index.html"> -->

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>

<body>
	<?php include 'sections/header.php';?>
	<div id="heroImage" class="flex center">
		<img src="images/alentheaFullLogo.svg">
	</div>
	<div class="flex row center full" id="services">
		<div class="flex column center serviceTile">
			<div class="flex medium full center serviceIcon">
				<img src="images/desktop.png">
			</div>
			<div class="flex column center serviceTileContent light">
				<h2>Web Design</h1>
				<p>Mobile friendly, responsive, and beautiful across all devices.</P>
				<a href="/pages/webDesign.php" class="button">View More</a>
			</div>
		</div>
		<div class="flex column center serviceTile">
			<div class="flex medium full center serviceIcon">
				<img src="images/desktop.png">
			</div>
			<div class="flex column center serviceTileContent light">
				<h2>E-Commerce</h1>
				<p>Grow your customer base and reach new potential.</P>
				<a href="/pages/ecommerce.php" class="button">View More</a>
			</div>
		</div>
		<div class="flex column center serviceTile">
			<div class="flex medium full center serviceIcon">
				<img src="images/desktop.png">
			</div>
			<div class="flex column center serviceTileContent light">
				<h2>Online Marketing</h1>
				<p>Spread awareness for your products or brand.</P>
				<a href="/pages/marketing.php" class="button">View More</a>
			</div>
		</div>
		<div class="flex column center serviceTile">
			<div class="flex medium full center serviceIcon">
				<img src="images/desktop.png">
			</div>
			<div class="flex column center serviceTileContent light">
				<h2>Logos & Branding</h1>
				<p>Give your brand a new, fresh, and timeless appearance.</P>
				<a href="/pages/logos.php" class="button">View More</a>
			</div>
		</div>
	</div>
	<p id="homepage-pitch" class="font-two">Our <span class="text-highlight">Hand-Crafted</span> Solutions  are uniquely developed for each individual client for a product that stands out from the rest and delivers <span class="text-highlight">Complete Satisfaction</span> for both yourself and users alike.</p>
	<div class="flex center row light" id="missionBanner">
		<img src="images/alentheaFullDark">
		<h3>Our Mission Is To Help Our Clients Realize Their Dreams.<br>No Matter How Big Or Small.</h3>
	</div>
	<?php include 'sections/contact.php';?>
	<?php include 'sections/footer.php';?>
</body>
	
</html>