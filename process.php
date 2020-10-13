<?php
// if (isset($_POST['email'])) {

//   //Email information
//   $admin_email = ['559trabajodecampo@trabajodefil.com'];
//   $name = $_POST['name'];
//   $email = $_POST['email'];
//   $phone = $_POST['phone'];
//   $message = $_POST['message'];

//   //send email

//   mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);

//   header('Location: http://trabajodefil.com/success.html');
// }

$to = '559trabajodecampo@trabajodefil.com';
$subject = "Email from trabajodelfil.com";



$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
// $message = $_POST['message'];

$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $email";

mail($to, $subject, $phone, $headers);

header('Location: http://trabajodefil.com/success.html');
