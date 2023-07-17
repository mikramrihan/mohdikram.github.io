<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Implement the email sending process here using PHP's mail() function or a library like PHPMailer
  // Example using mail() function:
  $to = "recipient@example.com";
  $subject = "New message from website form";
  $email_content = "Full Name: " . $fullname . "\n\n" .
                   "Email: " . $email . "\n\n" .
                   "Message: " . $message;
  $headers = "From: sender@example.com" . "\r\n" .
             "Reply-To: sender@example.com" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $email_content, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email.";
  }
}
?>