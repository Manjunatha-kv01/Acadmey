<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Construct the email message
    $to = "tekzowdevelopers@gmail.com"; // Replace with your email
    $subject = "Contact Form Submission"; // You can set a default subject or derive it from the form
    $messageBody = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";
    $headers = "From: tekzow@gmail.com"; // Replace with sender email

    // For additional debugging, we can log errors
    ini_set("log_errors", 1);
    ini_set("error_log", "/tmp/php-error.log");

    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Email sent successfully!";
    } else {
        error_log("Email failed to send to $to with subject $subject"); // Log the error
        echo "Failed to send email.";
    }
} else {
    echo "Method not allowed.";
}
?>
