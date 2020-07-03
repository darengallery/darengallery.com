<?php
$name = $_POST['name'];
$email = $_POST['email'];
$development = $_POST['development'];
$maintenance = $_POST['maintenance'];
$amendments = $_POST['amendments'];
$hosting = $_POST['hosting'];
$images = $_POST['images'];
$media = $_POST['media'];
$formcontent=" From: $name \n Phone: $phone \n maintenance Back: $maintenance \n amendments: $amendments \n hosting: $hosting \n images: $images \n media: $message";
$recipient = "darengallery@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
