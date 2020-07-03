<?php
$name = $_POST['name'];
$email = $_POST['email'];
$development = $_POST['development'];
$maintenance= $_POST['maintenance'];
$amendments = $_POST['amendments'];
$hosting = $_POST['hosting'];
$image = $_POST['images'];
$media = $_POST['media'];


$formcontent=" From: $name \n Senders Name: $email \n Email:  $development \n Web Development $maintenance \n Web Maintenance $amendments \n Web Amendments $hosting \n Hosting and Servers $images \n Images and Media $Media \n Printed Media";
$recipient = "darengallery@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://www.darengallery.co.uk/public_html/php/thank_you.html');
exit;
?>
