<?php
require_once('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail -> isSMTP();
$mail -> SMTPAuth = true;
$mail -> SMPTSecure = 'ssl';
$mail -> host = 'smtp.gmail.com';
$mail -> port = '465';
$mail -> isHTML();
$mail -> Username = 'vincent.richard12345@gmail.com';
$mail -> Password = '08886195888B';
$mail -> SetFrom('no-reply@dollaise.com');
$mail -> Suubject = 'test mail';
$mail -> Body = 'test mail';
$mail -> AddAddress('vincent.richard12345@gmail.com');

$mail -> Send();

?>