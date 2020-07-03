<?php
$name = $_POST['name'];
$email = $_POST['email'];
isset($_POST['form_development']);
isset($_POST['form_maintenance']);
isset($_POST['form_amendments']);
isset($_POST['form_hosting']);
isset($_POST['form_images']);
isset($_POST['form_media']);
$formcontent=" From: $name \n Email: $email \n Maintenance: $form_maintenance \n Development: $form_development \n Amendments: $form_amendments \n Hosting: $form_hosting \n Images: $form_images \n $form_media";
$recipient = "daren_gallery@hotmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
