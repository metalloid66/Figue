<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$mail = new PHPMailer(true);
$feedback= trim($_POST['feedback']);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'mohamadnabeel3@gmail.com';                     // SMTP username
    $mail->Password   = 'no';                              // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('mohamadnabeel3@gmail.com');
    $mail->addAddress('metalloid6666@gmail.com');


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Feedback from Muralna" ;
    $mail->Body    = "Feedback: $feedback" ;
    $mail->AltBody = "Feedback: $feedback" ;
    $mail->send();
    header("Location: https://figue1.herokuapp.com/#footer");
} catch (Exception $e) {
    // echo "Feedback could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo "We have stopped reciving orders and feedback. this is only a prototype site by now :) ) "
}


?>