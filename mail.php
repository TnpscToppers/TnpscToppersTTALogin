<?php
require_once ('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail -> isSMTP();
$mail -> SMTPAuth = true;
$mail -> SMTPSecure ='ssl';
$mail -> Host='smtp.gmail.com';
$mail -> Port ='465';
$mail -> isHTML();
$mail -> Username ='sudharvijay@gmail.com';
$mail -> Password = 'i@msudh@rs@n';
$mail -> SetFrom ('Verification@TTA@gmail.com');
$mail -> FromName = "TTA_Verification";
$mail -> Subject ='hello world';
$mail -> Body ='Test email';
$mail -> AddAddress('ksudharsan1996@gmail.com');

$mail -> Send();

?>