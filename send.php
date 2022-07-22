<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
include("config.php");
require '.\PHPMailer\src\Exception.php';
require '.\PHPMailer\src\PHPMailer.php';
require '.\PHPMailer\src\SMTP.php';
$targetmail = $_POST['mail'];
$Mbody = $_POST['Mbody'];
$sub = $_POST['Subject'];
$mail = new PHPMailer(true);                              
try {
    $mail->isSMTP();                                    
    $mail->Host = $smtpserver; 
    $mail->SMTPAuth = true;                          
    $mail->Username = $user;
    $mail->Password = $pass;                    
    $mail->SMTPSecure = 'tls';                    
    $mail->Port = $smtpserverport;      

    $mail->setFrom('mail-sender@mydomain.cz', "Mail-Sender"); // sender's email and name
    $mail->addAddress($targetmail, "Mail-Sender");  // Tutaj będziesz dostawać maile o nowej paczce (musisz manualnie kody dodawać do bazy danych)

    $mail->Subject = $sub;
    $mail->Body    = $Mbody;

    $mail->send();
    echo "Mail sent sucessfully";
} catch (Exception $e) { // To raczej nie powinno się stać ale zostawiam na wszelki wypadek
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>