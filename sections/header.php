<header class="flex row center dark white-text">
		<a href="/index.php" id="headerLogo">
			<img src="/images/alentheaFullLogo_light.svg">
		</a>
		<a href="/pages/webDesign.php">Web Design</a>
		<a href="/pages/branding.php">Logos & Branding</a>
		<!-- <a href="/pages/ecommerce.php">E-Commerce</a> -->
		<a href="/pages/onlineMarketing.php">Online Marketing</a>
		<a id="headerContact" href="/pages/contactUs.php">Contact Us</a>
</header>

<mobileHeader class="flex column dark white-text">
	<div onclick="myFunction()" id="toggleBar" class="row flex center space-between full">
	<a href="/index.php" id="headerLogo">
			<img src="/images/alentheaFullLogo_light.svg">
		</a>
		<div id="toggle">=</div>
	</div>
	<div id="mobileHeaderLinks">
		<a class="mobileHeaderLinks" href="/pages/webDesign.php">Web Design</a>
		<a class="mobileHeaderLinks" href="/pages/branding.php">Logos & Branding</a>
		<!-- <a href="/pages/ecommerce.php">E-Commerce</a> -->
		<a class="mobileHeaderLinks" href="/pages/onlineMarketing.php">Online Marketing</a>
		<a class="mobileHeaderLinks" id="headerContact" href="/pages/contactUs.php">Contact Us</a>
</div>
</mobileHeader>
<script>
function myFunction() {
  document.getElementById("mobileHeaderLinks").classList.toggle("toggle");
}
</script>