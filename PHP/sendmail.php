<?php
$name = $_POST['name'];
$email = $_POST['email'];

$check_value = isset($_POST['opt-1']) ? 1 : 0;

$formcontent="From: $name \n Email: $email";
$recipient = "daren_gallery@hotmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
