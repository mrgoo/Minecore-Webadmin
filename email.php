<?php

$check = $_GET['check'];
$subject = $_GET['subject'];
$nick = $_GET['nick'];
$message = $_GET['message'];
$email = $_GET['email'];
$checka = "neverever";


if ($check == $checka){

$headers = 'From: info@minecore.cz' . "\r\n" .
    'Reply-To: info@minecore.cz' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  $header_ = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
mail($email, $subject, $message, $header_.$headers);
echo $email.$subject.$message.$header_.$headers;}
else{exit;}
?>