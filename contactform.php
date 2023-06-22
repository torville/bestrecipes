<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "villetorni69@gmail.com"; // REPLACE THIS WITH YOUR EMAIL
    $subject = "New message from your website";
    $body = "You have received a new message from your contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";
    
    if (mail($to, $subject, $body, $headers)) {
      echo "Message successfully sent!";
    } else {
      echo "Message delivery failed...";
    }
  }
?>
