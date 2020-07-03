<?php

if (isset($_post['name'])) {
    $name = $_POST['name'];
}
if (isset($_post['email'])) {
    $email = $_POST['email'];
}
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
$formcontent=" From: $name \n Email: $email \n Web Maintenance: $maintenance \n Web Amendments: $amendments \n Hosting and Server: $hosting \n Images: $images \n Printed Media: $media";
$recipient = "darengallery@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>


?>