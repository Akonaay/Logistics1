<?php
//get data from form  

$w3lName = $_POST['w3lName'];
$w3lSender = $_POST['w3lSender'];
$w3lSubject = $_POST['w3lSubject'];
$w3lPhone = $_POST['w3lPhone'];
$w3lMessage = $_POST['w3lMessage'];
$to = "info@cosmostravel.co.tz";
// reservations@cosmostravel.co.tz
$subject = "Mail From website | Contact Form";
$txt = "Name = " . $w3lName . "\r\n  Sender = " . $w3lSender . "\r\n Phone =" . $w3lPhone . "\r\n Subject =" . $subject . "\r\n Message =" . $w3lMessage;
$headers = "From: noreply@cosmostravel.co.tz";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

//redirect
header("Location: contact.html");
