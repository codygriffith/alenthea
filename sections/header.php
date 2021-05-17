<style>
<?php include 'style/header.css'; ?>
</style>

<header>
	<div class="desktop flex row space-between">
		<a href="/" id="companyLogo">
			<img src="/images/alentheaFullLogo_light.svg" alt="Alenthea Logo">
		</a>
		<div class="desktop flex column" id="header-right">
			<ul class="desktop flex row center white-text" id="social_links">
				<li><a href="https://www.facebook.com/AlentheaDesignCo"><img src="/images/icons/social_media/facebook.svg" alt="ff"></a></li>
				<li><a href="https://twitter.com/AlentheaDesign"><img src="/images/icons/social_media/twitter.svg" alt="ff"></a></li>
				<li><a href="https://www.instagram.com/alentheadesign/"><img src="/images/icons/social_media/instagram.svg" alt="ff"></a></li>
			</ul>
			<nav>
				<ul class="desktop flex row white-text space-evenly">
					<li><a href="/services/columbus-ga-web-design">Web Design</a>
						<ul>
							<!-- <li><a href="/services/wordpress">Wordpress</a></li> -->
							<li><a href="/services/ecommerce">E-Commerce</a></li>
							<!-- <li><a href="/services/columbus-ga-seo">Website Redesign</a></li> -->
						</ul>
					</li>
					<li><a href="/services/columbus-ga-seo">S.E.O.</a></li>
					<li><a href="/services/branding">Branding</a></li>
					<li><a href="/services/digital-marketing-columbus-ga">Digital Marketing</a></li>
					<li><a href="/pages/blog">Blog</a></li>
					<li><a id="headerContact" href="/pages/contact">Contact</a></li>
				</ul>
			</nav>
			
</ul>
		</div>
	</div>
</header>

<header>
	<div class="mobile flex column dark white-text">
		<div onclick="myFunction()" id="toggleBar" class="row flex space-between full">
			<a href="/" id="mobileCompanyLogo">
				<img src="/images/alentheaFullLogo_light.svg" alt="Alenthea Mobile Logo">
			</a>
			<div id="toggle">=</div>
		</div>
		<ul id="mobileHeaderLinks">
			<li><a class="mobileHeaderLinks" href="/services/columbus-ga-web-design">Web Design</a></li>
			<li><a class="mobileHeaderLinks" href="/services/columbus-ga-seo">S.E.O.</a></li>
			<li><a class="mobileHeaderLinks" href="/services/ecommerce">E-Commerce</a></li>
			<li><a class="mobileHeaderLinks" href="/services/branding">Logos & Branding</a></li>
			<li><a class="mobileHeaderLinks" href="/services/digital-marketing-columbus-ga">Digital Marketing</a></li>
			<li><a class="mobileHeaderLinks" href="/pages/contact">Contact Us</a></li>			
		</ul>
</ul>
</header>

<script>
function myFunction() {
  document.getElementById("mobileHeaderLinks").classList.toggle("toggle");
}
</script>