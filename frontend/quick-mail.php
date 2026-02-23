<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Require Composer's autoload if you installed with Composer:
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'Obilasam3@gmail.com@gmail.com';
    $mail->Password   = 'tyhv yjku xwxs qhha';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('Obilasam3@gmail.com', 'Mailer');
    $mail->addAddress('samallela86@gmail.com', 'Logical Clothing');

    $mail->isHTML(false);
    $mail->Subject = 'Test Contact Form';
    $mail->Body    = "Some message from standalone tester.";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>