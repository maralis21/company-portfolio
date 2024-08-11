<?php

$recipients = array( "n.refahtalab@gmail.com","info@sthcommerce.com","workmysocial@gmail.com"
  

);   
//$to = 'arjang.amin2000@gmail.com';

$to = implode(',', $recipients);

$subject = "Email sent from " . $_POST['name']   ;
$from = $_POST['email'];
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers

// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#2980b9;">Hi Admin!</h1>';
$message .= "<p style='color:#2c3e50;font-size:18px;'>" . $_POST['message'] . "</p>";
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}

?>