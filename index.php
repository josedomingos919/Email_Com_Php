<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "./vendor/autoload.php";
$mail = new PHPMailer(true);

echo "<b>Bem-Vindo</b><br>";

$mail->CharSet = 'UTF-8';
//From email address and name
$mail->From = "josedomingos768@gmail.com";
$mail->FromName = "José Ndonge";

//To address and name
$mail->addAddress("josedomingos919@gmail.com", "José Gonçalves");
//$mail->addAddress("recepient1@example.com"); //Recipient name is optional

//Address to which recipient will reply
//$mail->addReplyTo("reply@yourdomain.com", "Reply");

//CC and BCC
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>
<img src='teste.jpg' ></img>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

echo "<img src='teste.jpg' ></img>";