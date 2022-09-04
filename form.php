<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'ankunjsuraj1999@gmail.com';
    $email_subject = "New form submitted";
    $email_body = "User name : $name. \n". "User mail : $email. \n". "User message : $message.";
    $to = "prem.shankar.prasad.9999@gmail.com";
    $headers = "From : $email_from\r\n";
    $headers . ="Reply to : $email \r\n";

    mail($to,$email_subject, $email_body, $headers);
    /*header("Location : index.html");*/

?>
