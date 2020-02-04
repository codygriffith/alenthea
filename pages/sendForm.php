
<!doctype html>
<html lang="en">
<head>
<link rel="canonical" href="https://alenthea.com/pages/contact" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157506747-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157506747-1');
</script>
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<meta charset="utf-8">
	<title>Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../style.css" rel="stylesheet" type="text/css">
	<link href="style/page.css" rel="stylesheet" type="text/css">

	<link href="style/contactUs.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include "../sections/header.php";?>
	<div class="flex column bigOlText">
        <h1>Lets Do Something Great</h1> 
	</div>
	<?php include "../sections/contact.php";?>
	<?php include '../sections/footer.php';?>
</body>

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
	
</html>