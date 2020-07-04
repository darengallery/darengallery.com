<?php
$name = $_POST['name'];
$email = $_POST['email'];
$one = $_POST['one'];
$two = $_POST['two'];
$three = $_POST['three'];
$four = $_POST['four'];
$five = $_POST['five'];
$six = $_POST['six'];

$formcontent="From: $name \n Email: $email \n Web Development: $one \n Web Maintenance: $two \n Web Amendments: $three \n Hosting and Servers: $four \n Images and Media: $five \n Printed Media: $six";
$recipient = "daren_gallery@hotmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
