<?php
function sendContactEmail($name, $email, $subject, $message) {
    $to = "info@xyzuniversity.co.ke";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    $emailBody = "Name: $name\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Subject: $subject\n\n";
    $emailBody .= "Message:\n$message\n";
    
    return mail($to, "Contact Form: $subject", $emailBody, $headers);
}

?>