<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Code to process and sanitize the form data

  // Code to send the email using the processed data
  $to = "adnanzaad786@gmail.com";
  $subject = "New message from your website";
  $email_body = "Name: " . $name . "\n";
  $email_body .= "Email: " . $email . "\n";
  $email_body .= "Message: " . $message . "\n";
  $headers = "From: adnanzaad786@gmail.com";

  if (mail($to, $subject, $email_body, $headers)) {
    echo "Thank you for your message! We will be in touch shortly.";
  } else {
    echo "Oops! An error occurred while sending the message.";
  }
}
?>
