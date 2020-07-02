<?php
$name = $_POST['name'];
$playersName = $_POST['playersName'];
$playersSchool = $_POST['playersSchool'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];
$homePhone = $_POST['homePhone'];
$contactPhone = $_POST['contactPhone'];
$email = $_POST['email'];
$medical = $_POST['medical'];
$message = $_POST['message'];
$optradio = $_POST['optradio'];

$formcontent=" From: $name \n Players Name: $playersName \n Players School:  $playersSchool \n $gender gender: \n Address: $address \n postcode: $postcode \n Home Phone: $homePhone \n Contact Phone: $contactPhone \n Medical: $medical \n Message: $message \n First Aid: $optradio";
$recipient = "admin@essexrangers2020.org";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://www.essexrangers2020.org/thank_you.html');
exit;
?>
