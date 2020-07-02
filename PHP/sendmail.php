<?php
$name = $_POST['name'];
$email = $_POST['email'];
$opt-1 = $_POST['development'];
$opt-2= $_POST['maintenance'];
$opt-3 = $_POST['amendments'];
$opt-4 = $_POST['hosting'];
$opt-5 = $_POST['images'];
$opt-6 = $_POST['media'];


$formcontent=" From: $name \n Senders Name: $email \n Email:  $opt-1 \n Web Development $opt-2 \n Web Maintenance $opt-3 \n Web Amendments $opt-4 \n Hosting and Servers $opt-5 \n Images and Media $opt-6 \n Printed Media";
$recipient = "darengallery@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://www.darengallery.com/thank_you.html');
exit;
?>
