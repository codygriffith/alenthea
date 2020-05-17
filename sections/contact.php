<style>
<?php include 'style/contact.css'; ?>
</style>
<form method="post" action="/pages/sendForm.php" class="flex row space-between wrap" id="homepageContact">
    <h3 class="centerText contactHeader">We Look Forward To Hearing From You</h3>
    <h1 id="mobileContactHeader" class="centerText contactHeader">Lets Get Started</h1>
    <div>
    <label for="contactName">Your Name:</label>
    <input id="contactName" type="text" name="name" placeholder="Your name,">

    <label for="contactEmail">Your Email:</label>
    <input id="contactEmail" type="email" name="email" placeholder="email,">

    <label for="moreInfo">How may we help you?</label>
    <textarea name="message" id="moreInfo" placeholder="and what we can do for you."></textarea>

    <label for="contactSubmit">Submit</label>
    <input id="contactSubmit" class="button" type="submit">
</div>
</form>