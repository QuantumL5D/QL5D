<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['fname']);
    $lastName = htmlspecialchars($_POST['lname']); 
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $to = 'QuantumLyndsey5D@gmail.com'; 
    $subject = 'New Message from Contact Form';
    $body = "You have received a new message from: $firstName $lastName\n\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";
    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for your message!';
    } else {
        echo 'Sorry, there was an error sending your message. Please try again.';
    }
}

header('Location: success.php');
exit();
?>
