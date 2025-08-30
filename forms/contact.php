<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "abdulhaigawai9@gmail.com";  // 👈 Yahan apna email likhein
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    $fullMessage = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Message Sent Successfully!";
    } else {
        echo "Error Sending Message!";
    }
} else {
    echo "Invalid Request!";
}
?>