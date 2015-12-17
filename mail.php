<?php
require('model/class.phpmailer.php');
// cấu hình đến smtp gmail
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=465;
$mail->SMTPAuth=true;
$mail->Username='@gmail.com';
$mail->Password='!@#';
$mail->SMTPSecure='ssl';
$mail->AddAddress('midi9x@gmail.com');
$mail->FromName='MinhDinh';
$mail->Subject='test';
$mail->Body='noi dung';
$mail->IsHtml(true);
$mail->ChartSet='utf8';
$mail->Send();
echo $mail->ErrorInfo;
