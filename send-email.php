<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  $to = 'kefas.jourdan99@gmail.com';

  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  $email_message = "<html><body>";
  $email_message .= "<p><strong>Name:</strong> $name</p>";
  $email_message .= "<p><strong>Email:</strong> $email</p>";
  $email_message .= "<p><strong>Subject:</strong> $subject</p>";
  $email_message .= "<p><strong>Message:</strong> $message</p>";
  $email_message .= "</body></html>";


  if (mail($to, $subject, $email_message, $headers)) {

    echo "Message sent successfully.";
  } else {

    echo "Sorry, an error occurred. Please try again later.";
  }
}
?>