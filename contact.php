<?php
    $name = $_POST['name'];
    $u_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "$u_email";
    $email_subject = "SotonyeCV Contact Form";
    $email_body = "From: $name.\n".
                  "Email: $u_email.\n".
                  "Message: $message.\n";



    $to = "sotonyemcleod@gmail.com";
    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $u_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>