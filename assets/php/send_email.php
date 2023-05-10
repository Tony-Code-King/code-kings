<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send the email
    $to = 'info@code-kings.org';
    $subject = 'New message from '.$name;
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
    $headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;

    if (mail($to, $subject, $body, $headers)) {
        echo 'Message sent successfully.';
    } else {
        echo 'Error: Unable to send message.';
    }
}

?>