<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Construct the email
    $to = "cparedes2696@sdsu.edu";  // Replace with your email address
    $email_subject = "New Contact Form Submission: $subject";
    $headers = "From: $email";

    // Construct the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Send the email
    mail($to, $email_subject, $email_message, $headers);

    // You can add additional logic here, like redirecting to a thank-you page
    // header("Location: thank_you.html");
    // exit();
}
?>