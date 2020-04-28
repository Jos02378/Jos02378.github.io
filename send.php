<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];   

    $email_from = '';

    $email_subject = "josephwebsite20@gmail.com";

    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n". 
                        "User Message: $message.\n";

    $to = "haryantojoseph@gmail.com"

    $headers = "From: $email_from \r\n";

    mail($to, $email_subject,$email_body, $headers);

    header("Location: contact.html");
?>