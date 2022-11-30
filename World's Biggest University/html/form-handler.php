<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'matei.ambrus@yahoo.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n". 
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n". 
              "User Message: $message.\n".
    
    $to = 'pyro_mail@tutanota.com';

$headers = "Form: $email_form \r\n";

$headers .= "Reply-to: $visitior_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: ../html/contact.html")

?>