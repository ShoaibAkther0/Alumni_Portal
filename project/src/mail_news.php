<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "Exception.php";
require "PHPMailer.php";
require "SMTP.php";
//$mm = 'mriaz2k8@gmail.com';
//mailTo($mm,$body);
function mailTo($to_mail,$body)
{
$mail = new PHPMailer;
$mail->isSMTP();

$mail->SMTPDebug = 0;
$mail->Host = "smtp.gmail.com";

$mail->Port = 587;

$mail->SMTPSecure = "tls";
$mail->SMTPAuth = true;
$mail->Username="alumniportalby2k16@gmail.com";
$mail->Password = "";

$mail->setFrom("alumniportalby2k16@gmail.com","AlumniPortal"); 
$mail->addReplyTo("alumniportalby2k16@gmail.com","AlumniPortal");
$mail->Subject = "News Update";
$mail->Body = $body;
$mail->addAddress($to_mail);

if(!($mail->send()))
{
	echo "error  ". $mail->ErrorInfo;
}
else
{
	echo "Messsage Sent";
	
}
}
?>