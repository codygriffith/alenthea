<style>
<?php include 'style/header.css'; ?>
</style>
<header>
	
<ul class="desktop flex row dark white-text">
	<li>
		<a href="/" id="headerLogo">
			<img src="/images/alentheaFullLogo_light.svg" alt="Alenthea Logo">
		</a>
	</li>
	<li>
		<a>Services</a>
		<ul>
			<li>
				<a href="/services/columbus-ga-web-design.php">Website Design</a>
			</li>
			<li>
				<a href="/services/digital-marketing-columbus-ga.php">Digital Marketing</a>
			</li>
			<li>
				<a href="/services/branding.php">Logos & Branding</a>
			</li>
			<li>
				<a href="/services/ecommerce.php">E-Commerce</a>
			</li>
			<!-- <li>
				<a href="/services/ecommerce.php">S.E.O.</a>
			</li>			 -->
		</ul>
	</li>
	<!-- <li>
		<a href="/pages/branding">Our Work</a>
	</li> -->
	<li>
		<a href="/pages/blog.php">Our Blog</a>
	</li>
	<li>
		<a id="headerContact" href="/pages/contact.php">Contact Us</a>
	</li>
</ul>


	<ul class="desktop flex row center dark white-text">
		
		
		
		<!--  -->
</ul>

	<ul class="mobile flex column dark white-text">
		<div onclick="myFunction()" id="toggleBar" class="row flex space-between full">
			<a href="/" id="headerLogo">
				<img src="/images/alentheaFullLogo_light.svg" alt="Alenthea Logo">
			</a>
			<div id="toggle">=</div>
		</div>
		<div id="mobileHeaderLinks">
			<a class="mobileHeaderLinks" href="/services/columbus-ga-web-design.php">Web Design</a>
			<a class="mobileHeaderLinks" href="/services/ecommerce.php">E-Commerce</a>
			<a class="mobileHeaderLinks" href="/services/branding.php">Logos & Branding</a>
			<!-- <a href="/sections/ecommerce.php">E-Commerce</a> -->
			<a class="mobileHeaderLinks" href="/services/digital-marketing-columbus-ga.php">Online Marketing</a>
			<a class="mobileHeaderLinks" id="headerContact" href="/pages/contact.php">Contact Us</a>
		</div>
</ul>
</header>

















<script>
function myFunction() {
  document.getElementById("mobileHeaderLinks").classList.toggle("toggle");
}
</script>