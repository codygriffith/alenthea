<?PHP
$to = "cs.codygriffith@gmail.com";
$subject = "Test Mail";
$message = "php test message";
$from = "someone@example.com";
$headers = 'From:' . $from;

if (mail($to, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>