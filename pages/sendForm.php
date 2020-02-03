<?php   
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = $visitor_email;
    $email_subject = "New Form Submission";
	$email_body = "You have received a new message from the user $name.\n".
                            "$message".

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