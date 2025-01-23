<?php
//get data from form  

$name = $_POST['name'];
$email = $_POST['email'];
$service = $_POST['service'];
$to = "reservations@cosmostravel.co.tz";
// reservations@cosmostravel.co.tz
$subject = "Mail From website | Reservation Form";
$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Service =" . $service;
$headers = "From: noreply@cosmostravel.co.tz";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

//redirect
header("Location: index.html");
