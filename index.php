<?php
if (isset($_POST['send'])) {
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPhone = $_POST['userPhone'];
    $userMessage = $_POST['userMessage'];

    $to = "your-email@example.com"; // Remplacez par votre adresse email
    $subject = "Message from " . $userName;
    $body = "Name: " . $userName . "\n";
    $body .= "Email: " . $userEmail . "\n";
    $body .= "Phone: " . $userPhone . "\n";
    $body .= "Message: " . $userMessage . "\n";

    if (mail($to, $subject, $body)) {
        echo "<div style='background-color: #dff0d8; color: #3c763d; padding: 10px;'>Message sent successfully!</div>";
    } else {
        echo "<div style='background-color: #f2dede; color: #a94442; padding: 10px;'>Failed to send message. Please try again later.</div>";
    }
}
?>
