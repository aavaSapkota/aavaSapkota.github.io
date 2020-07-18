<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once( 'vendor/autoload.php' );

$mail= new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = "587";
$mail->isHTML();
$mail->Username = 'aavachhori@gmail.com';
$mail->Password = 'myPassword';
$mail->SetFrom('aavachhori@gmail.com');
$mail->Subject= 'ok';
$mail->Body = 'A test email!';
$mail->AddAddress('aavachhori@gmail.com');

echo "<p>ok....</p>";
$mail->Send();
echo "<p>Haha</p>";

?>