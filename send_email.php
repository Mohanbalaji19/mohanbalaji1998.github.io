<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Your email address where you want to receive messages
    $to = 'mohanmsp19@gmail.com';
    $subject = 'Message from your website';
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Email headers
    $headers = "From: $email\r\n"; // Sender's email address

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo '<p>Your message has been sent successfully!</p>';
    } else {
        echo '<p>There was a problem sending your message. Please try again later.</p>';
    }
}
?>
