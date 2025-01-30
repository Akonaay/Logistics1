<?php
//get data from form  

$name = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$duration = $_POST['duration'];
$tour_type = $_POST['tour_type'];
$message = $_POST['message'];

$to = "reservations@cosmostravel.co.tz";
// reservations@cosmostravel.co.tz
$subject = "Mail From Website | Safari & Tours Request";
$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Phone =" . $phone . "\r\n Tour Duration =" . $duration . "\r\n Tour Type =" . $tour_type . "\r\n Message =" . $message;
$headers = "From: noreply@cosmostravel.co.tz";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

//redirect
header("Location: index.html");
