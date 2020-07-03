<?php

if (isset($_POST['development'])) {
    $development = $_POST['development'];
}

if (isset($_POST['maintenace'])) {
    $maintenace = $_POST['maintenace'];
}

if (isset($_POST['amendments'])) {
    $amendments = $_POST['amendments'];
}
if (isset($_POST['hosting'])) {
    $hosting = $_POST['hosting'];
}

if (isset($_POST['images'])) {
    $images = $_POST['images'];
}

if (isset($_POST['media'])) {
    $media = $_POST['media'];
}
$formcontent=" From: $name \n Phone: $phone \n maintenance Back: $maintenance \n amendments: $amendments \n hosting: $hosting \n images: $images \n media: $message";
$recipient = "darengallery@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>


?>