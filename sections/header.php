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
					<div>
						<li><a>Services</a></li>
						<ul>
							<li><a href="/services/columbus-ga-web-design">Website Design</a></li>
							<li><a href="/services/columbus-ga-seo">S.E.O.</a></li>
							<li><a href="/services/digital-marketing-columbus-ga">Digital Marketing</a></li>
							<li><a href="/services/branding">Logos & Branding</a></li>
							<li><a href="/services/ecommerce">E-Commerce</a></li>
							<!-- <li><a href="/services/ecommerce.php">S.E.O.</a></li>-->
						</ul>
					</div>
					<li><a href="/pages/blog">Our Blog</a></li>
					<li><a id="headerContact" href="/pages/contact">Contact Us</a></li>
				</ul>
			</nav>
			
</ul>
		</div>
	</div>
</header>





<header>
	<!-- <div>
		<ul class="desktop flex row center dark white-text" id="social_links">
			<li><a href=""><img src="/images/icons/social_media/facebook.svg" alt="ff"></a></li>
			<li><a href=""><img src="/images/icons/social_media/twitter.svg" alt="ff"></a></li>
			<li><a href=""><img src="/images/icons/social_media/instagram.svg" alt="ff"></a></li>
		</ul>	
	<ul class="desktop flex row dark white-text space-evenly">
	<li>
		<a href="/" id="companyLogo">
			<img src="/images/alentheaFullLogo_light.svg" alt="Alenthea Logo">
		</a>
	</li>
	<li>
		<a>Services</a>
		<ul>
			<li>
				<a href="/services/columbus-ga-web-design">Website Design</a>
			</li>
			<li>
				<a href="/services/digital-marketing-columbus-ga">Digital Marketing</a>
			</li>
			<li>
				<a href="/services/branding">Logos & Branding</a>
			</li>
			<li>
				<a href="/services/ecommerce">E-Commerce</a>
			</li>
		</ul>
	</li>
	<li>
		<a href="/pages/blog">Our Blog</a>
	</li>
	<li>
		<a id="headerContact" href="/pages/contact">Contact Us</a>
	</li>
</ul>
</div> -->
	<div class="mobile flex column dark white-text">
		<div onclick="myFunction()" id="toggleBar" class="row flex space-between full">
			<a href="/" id="mobileCompanyLogo">
				<img src="/images/alentheaFullLogo_light.svg" alt="Alenthea Mobile Logo">
			</a>
			<div id="toggle">=</div>
		</div>
		<ul id="mobileHeaderLinks">
			<a class="mobileHeaderLinks" href="/services/columbus-ga-web-design">Web Design</a>
			<a class="mobileHeaderLinks" href="/services/ecommerce">E-Commerce</a>
			<a class="mobileHeaderLinks" href="/services/branding">Logos & Branding</a>
			<a class="mobileHeaderLinks" href="/services/digital-marketing-columbus-ga">Digital Marketing</a>
			<a class="mobileHeaderLinks" href="/pages/contact">Contact Us</a>
		</ul>
</ul>
</header>

















<script>
function myFunction() {
  document.getElementById("mobileHeaderLinks").classList.toggle("toggle");
}
</script>