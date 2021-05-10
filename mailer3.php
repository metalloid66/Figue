<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$name = strip_tags(trim($_POST['name']));
$name = str_replace(array("\r","\n"), array(" ", " "), $name);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$message = trim($_POST['message']);
$phoneNum = trim($_POST['phoneNum']);
$shippingAddress = trim($_POST['shippingAddress']);
$typeOfProduct = $_POST['type-product'];




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
    $mail->setFrom("$email", "$name");
    $mail->addAddress('metalloid6666@gmail.com');


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "A new custom $typeOfProduct order!" ;
    $mail->Body    = "Name:$name \n\n" . "Email:$email \n\n" . "Phone Number:$phoneNum \n\n" . "Shipping Address:$shippingAddress \n\n" . "Description: $message \n\n"  ;
    $mail->AltBody = "Name:$name \n\n" . "Email:$email \n\n" . "Phone Number:$phoneNum \n\n" . "Shipping Address:$shippingAddress \n\n" . "Description: $message \n\n" ;

$file_tmp  = $_FILES['file-upload']['tmp_name'];
$file_name = $_FILES['file-upload']['name'];
$mail->AddAttachment($file_tmp, $file_name);
    $mail->send();
    header("Location: https://figue1.herokuapp.com/index.php?success=1#form");
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo "We have stopped reciving orders and feedback. this is only a prototype site by now :) ) "
}


?>