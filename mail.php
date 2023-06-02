<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "jonathanbeya38@gmail.com";
$subject = "Mail from Website";
$headers = "From: ".$name. "\r\n" .

$txt = "You have received an email from ".$name ."\r\nEmail: " .$email ."\r\nMessage: ". $message;

if($email=!null){
    mail($to, $subject, $txt, $headers);
}
header('Location:contact.php');


?>