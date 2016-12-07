<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'tobrydberg@gmail.com';
$mail->Password = 'Polis3000';
$mail->SMTPSecure = 'ssl';


$från = $_POST["från"];
$till = $_POST["till"];
$cc = $_POST["cc"];
$bcc = $_POST["bcc"];
$ärende = $_POST["ärende"];
$meddelande = $_POST["meddelande"];
$lösenord = $_POST["lösenord"];



$mail->FromName = $från;
$mail->AddAddress($till);  // Add a recipient
$mail->Subject = $ärende;
$mail->Body    = $meddelande;

if(!$mail->Send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
}