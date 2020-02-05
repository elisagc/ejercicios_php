<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/phpmailer/src/Exception.php';
require 'phpmailer/phpmailer/src/PHPMailer.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {


    /* Set the mail sender. */
    $mail->setFrom('elisagcubero@gmail.com');

    /* Add a recipient. */
    $mail->addAddress('elisagcubero@gmail.com');

    /* Set the subject. */
    $mail->Subject = 'Force';

    /* Set the mail message body. */
    $mail->Body = 'There is a great disturbance in the Force.';

    /* Finally send the mail. */
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo $e->getMessage();
}
