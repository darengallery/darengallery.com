<?php
$name = $_POST['name'];
$email = $_POST['email'];

if(isset($_POST["form_development"]))
{
  echo "Web Development";
}
if(isset($_POST["form_amendments"]))
{
  echo "Web Amendments";
}
if(isset($_POST["form_hosting"]))
{
  echo "Hosting and Servers";
}
if(isset($_POST["form_images"]))
{
  echo "Images and Media";
}
if(isset($_POST["form_media"]))
{
  echo "Printed Media";
}

$formcontent=" From: $name \n Email: $email";
$recipient = "daren_gallery@hotmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
