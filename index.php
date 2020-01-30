<!doctype html>
<html>
<head>
	<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Organization",
		  "url": "http://www.alenthea.com",
		  "logo": "http://www.alenthea.com/images/alentheaFullDark.png"
		}
		</script>
<meta charset="utf-8">
<title>Alenthea Design Co.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/style.css" rel="stylesheet" type="text/css">
<link href="/index.css" rel="stylesheet" type="text/css">
<!-- <meta http-equiv="refresh" content="1"> -->
<!-- <base href="http://www.alenthea.com/index.html"> -->

<!-- <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> -->

</head>

<body>
	<?php include 'sections/header.php';?>
	<main>
		<section id="heroImage" class="flex center">
			<img src="/images/alentheaFullLogo.svg">
		</section>

		<section class="flex row center full wrap" id="services">
			<section id="webDesign" class="flex column center serviceTile light">
				<div class="flex medium center serviceIconContainer">
					<picture>
						<source media="(max-width: 800px)" srcset="/images/webDev-darkest.svg">
						<source media="(min-width: 800px)" srcset="/images/webDev-light.svg">
						<img src="/images/webDev-dark.svg" alt="Flowers">
					</picture>
				</div>
				<div class="serviceTileContent flex column center">
					<h1>Web Design</h1>
					<p>Mobile friendly, responsive, and beautiful across all devices.</p>	
					<a href="/pages/webDesign.php" class="button">View More</a>
				</div>
			</section>
			<section id="ecommerce" class="flex column center serviceTile light">
				<div class="flex medium center serviceIconContainer">
					<picture>
						<source media="(max-width: 800px)" srcset="/images/ecommerce-darkest.svg">
						<source media="(min-width: 800px)" srcset="/images/ecommerce-light.svg">
						<img src="/images/ecommerce-light.svg" alt="Flowers">
					</picture>
				</div>
				<div class="serviceTileContent flex column center">
					<h1>E-Commerce</h1>
					<p>Grow your customer base and reach new potential.</p>	
					<a href="/pages/ecommerce.php" class="button">View More</a>
				</div>
			</section>
			<section id="onlineMarketing" class="flex column center serviceTile light">
				<div class="flex medium center serviceIconContainer">
					<picture>
						<source media="(max-width: 800px)" srcset="/images/onlineMarketing-darkest.svg">
						<source media="(min-width: 800px)" srcset="/images/onlineMarketing-light.svg">
						<img src="/images/onlineMarketing-darkest.svg" alt="Flowers">
					</picture>
				</div>
				<div class="serviceTileContent flex column center">
					<h1>Online Marketing</h1>
					<p>Spread awareness for your products or brand.</p>	
					<a href="/pages/onlineMarketing.php" class="button">View More</a>
				</div>
			</section>
			<section id="logosBranding" class="flex column center serviceTile light">
				<div class="flex medium center serviceIconContainer">
					<picture>
						<source media="(max-width: 800px)" srcset="/images/logoBranding-darkest.svg">
						<source media="(min-width: 800px)" srcset="/images/logoBranding-light.svg">
						<img src="/images/logoBranding-light.svg" alt="Flowers">
					</picture>
				</div>
				<div class="serviceTileContent flex column center">
					<h1>Logos & Branding</h1>
					<p>Give your brand a new, fresh, and timeless appearance.</p>	
					<a href="/pages/onlineMarketing.php" class="button">View More</a>
				</div>
			</section>
		</section>

		<section>
			<p id="homepage-pitch" class="font-two">
				Our 
				<span class="text-highlight">Hand-Crafted</span> 
				Solutions  are uniquely developed for each individual client for a product that stands out from the 
				rest and delivers 
				<span class="text-highlight">Complete Satisfaction</span> 
				for both yourself and users alike.
			</p>
		</section>
	<div class="flex center row light" id="missionBanner">
		<img src="/images/alentheaFullLogoDark.svg">
		<h3>Our Mission Is To Help Our Clients Realize Their Dreams.<br> No Matter How Big Or Small.</h3>
	</div>
	</main>
	<?php include 'sections/contact.php';?>
	<?php include 'sections/footer.php';?>
</body>

	
</html>