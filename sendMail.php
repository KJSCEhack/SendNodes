<?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$subject = "College Notfication";
$str = $_POST['msg'];
$str = "<p>$str</p>";
$mail = new PHPMailer(true);
$mail->IsSMTP();                                     
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = 'twscfeedback@gmail.com';
$mail->Password = 'twsc1234';
$mail->SMTPSecure = 'ssl';
$mail->From = 'twscfeedback@gmail.com';
$mail->FromName = "twscfeedback@gmail.com";
$mail->AddAddress('hthakkar8@gmail.com');
$mail->Priority = 1;
$mail->AddCustomHeader("X-MSMail-Priority: High");
$mail->WordWrap = 50;    
$mail->IsHTML(true);  
$mail->Subject = $subject;
$mail->Body    = $str;
// if(!$mail->Send()) {
// $err = 'Message could not be sent.';
// $err .= 'Mailer Error: ' . $mail->ErrorInfo;                        
// }
echo json_encode(array("status"=>'success'));
$mail->ClearAddresses()

?>
