<?php
$name = $_POST['playersName'];
$email = $_POST['email'];
$contactphone = $_POST['contactPhone'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];
$schoolYear = $_POST['schoolYear'];
$formcontent=" From: $name \n Email: $email \n Contact Phone: $contactPhone \n Date Of Birth: $dob \n Address: $address \n School Year: $schoolYear";
$recipient = "darengallery@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
