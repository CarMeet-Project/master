<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'carmeetproject2020@gmail.com';

$email_subject = "Onderwerp:";

$email_body = "User name: $name.\n".
              "User Email: $visitor_email.\n".
              "User message: $message.\n";

$to = "carmeetproject2020@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: email.php");

?>