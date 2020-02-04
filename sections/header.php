<style>
<?php include 'style/header.css'; ?>
</style>

<header>
	
	<div class="desktop flex row center dark white-text">
		<a href="/" id="headerLogo">
			<img src="/images/alentheaFullLogo_light.svg" alt="Alenthea Logo">
		</a>
		<a href="/pages/web-design">Web Design</a>
		<a href="/pages/branding">Logos & Branding</a>
		<!-- <a href="/pages/ecommerce.php">E-Commerce</a> -->
		<a href="/pages/marketing">Online Marketing</a>
		<a id="headerContact" href="/pages/contact">Contact Us</a>
	</div>

	<div class="mobile flex column dark white-text">
		<div onclick="myFunction()" id="toggleBar" class="row flex center space-between full">
			<a href="/" id="headerLogo">
				<img src="/images/alentheaFullLogo_light.svg" alt="Alenthea Logo">
			</a>
			<div id="toggle">=</div>
		</div>
		<div id="mobileHeaderLinks">
			<a class="mobileHeaderLinks" href="/pages/web-design">Web Design</a>
			<a class="mobileHeaderLinks" href="/pages/branding">Logos & Branding</a>
			<!-- <a href="/pages/ecommerce.php">E-Commerce</a> -->
			<a class="mobileHeaderLinks" href="/pages/marketing">Online Marketing</a>
			<a class="mobileHeaderLinks" id="headerContact" href="/pages/contact">Contact Us</a>
		</div>
	</div>
</header>
<script>
function myFunction() {
  document.getElementById("mobileHeaderLinks").classList.toggle("toggle");
}
</script>