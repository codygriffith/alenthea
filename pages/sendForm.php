<?php   
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = $visitor_email;
    $email_subject = "New Form Submission";
    $email_body = "You have received a new message from the user $name.\n".
                            "Email: $email_from.\n".
                            "$message\n\n\n\n\n".

    $to = "cody@alenthea.com";
    $headers .= "Reply-To: $visitor_email \r\n";
    $headers = "From: $email_from \r\n";
    
    if (mail($to,$email_subject,$email_body,$headers))
    {
        echo "Message accepted";
    }
    else
    {
        echo "Error: Message not accepted";
    }
?>
<style>
<?php include 'style/contact.css'; ?>
</style>
<form method="post" action="/pages/sendForm.php" class="flex row space-between wrap" id="homepageContact">
    <h3 class="centerText contactHeader">We Look Forward To Hearing From You</h3>
    <h1 id="mobileContactHeader" class="centerText contactHeader">Lets Get Started</h1>

    <label for="contactName">Your Name:</label>
    <input id="contactName" type="text" name="name" placeholder="Your name,">

    <label for="contactEmail">Your Email:</label>
    <input id="contactEmail" type="email" name="email" placeholder="email,">

    <label for="moreInfo">How may we help you?</label>
    <textarea name="message" id="moreInfo" placeholder="and what we can do for you."></textarea>

    <label for="promo">Submit</label>
    <input id="contactSubmit" class="button" type="submit">
</form>