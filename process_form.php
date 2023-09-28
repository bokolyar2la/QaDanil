<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    
    $to = "bokolyar2la@gmail.com";
    $subject = "Message from $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    
    echo "Thank you, your message has been sent!";
} else {
   
    http_response_code(405);
    echo "Method not allowed.";
}
?>
