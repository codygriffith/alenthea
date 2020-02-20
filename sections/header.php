<style>
<?php include 'style/header.css'; ?>
</style>
<header>
	
<ul class="desktop flex row center dark white-text">
	<li>
		<a href="/" id="headerLogo">
			<img src="/images/alentheaFullLogo_light.svg" alt="Alenthea Logo">
		</a>
	</li>
	<li>
		<a href="/pages/columbus-ga-web-design">Services</a>
		<ul>
			<li>
				<a href="/pages/columbus-ga-web-design">Website Design</a>
			</li>
			<li>
				<a href="/pages/digital-marketing-columbus-ga">Digital Marketing</a>
			</li>
			<li>
				<a href="/pages/branding">Logos & Branding</a>
			</li>
			<li>
				<a href="/pages/ecommerce">E-Commerce</a>
			</li>
			<!-- <li>
				<a href="/pages/ecommerce.php">S.E.O.</a>
			</li>			 -->
		</ul>
	</li>
	<!-- <li>
		<a href="/pages/branding">Our Work</a>
	</li> -->
	<li>
		<a href="/pages/blog">Our Blog</a>
	</li>
	<li>
		<a id="headerContact" href="/pages/contact">Contact Us</a>
	</li>
</ul>


	<ul class="desktop flex row center dark white-text">
		
		
		
		<!--  -->
</ul>

	<ul class="mobile flex column dark white-text">
		<div onclick="myFunction()" id="toggleBar" class="row flex center space-between full">
			<a href="/" id="headerLogo">
				<img src="/images/alentheaFullLogo_light.svg" alt="Alenthea Logo">
			</a>
			<div id="toggle">=</div>
		</div>
		<div id="mobileHeaderLinks">
			<a class="mobileHeaderLinks" href="/pages/columbus-ga-web-design">Web Design</a>
			<a class="mobileHeaderLinks" href="/pages/ecommerce.php">E-Commerce</a>
			<a class="mobileHeaderLinks" href="/pages/branding">Logos & Branding</a>
			<!-- <a href="/pages/ecommerce.php">E-Commerce</a> -->
			<a class="mobileHeaderLinks" href="/pages/digital-marketing-columbus-ga">Online Marketing</a>
			<a class="mobileHeaderLinks" id="headerContact" href="/pages/contact">Contact Us</a>
		</div>
</ul>
</header>

















<script>
function myFunction() {
  document.getElementById("mobileHeaderLinks").classList.toggle("toggle");
}
</script>