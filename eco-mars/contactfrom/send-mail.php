<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName    = htmlspecialchars($_POST['firstName']);
    $lastName    = htmlspecialchars($_POST['lastName']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "alikhansameer234gmail.com"; 
    $subject = "New Contact Form Message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent.";
    }
}
?>
    