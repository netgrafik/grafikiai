<?php
$email = $_POST['email'];

$formcontent="Email: $email";
$recipient = "piotrknop@op.pl";
$subject = "Newslater Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
require_once "dzieki.html";
?>