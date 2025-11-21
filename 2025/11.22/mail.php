<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function smtp($receive,$title,$content) {
    global $smtpHost,$smtpName,$smtpSend,$smtpToken;
    
    require 'package/phpmailer/Exception.php';
    require 'package/phpmailer/PHPMailer.php';
    require 'package/phpmailer/SMTP.php';
    $mail = new PHPMailer(true);
    try {
        $mail->CharSet ="UTF-8";
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = $smtpHost;
        $mail->SMTPAuth = true;
        $mail->Username = $smtpSend;
        $mail->Password = $smtpToken;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom($smtpSend, $smtpName);
        $mail->addAddress($receive);
        $mail->addReplyTo($smtpSend, $smtpName);
        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body    = $content;
        $mail->AltBody = '您的邮箱不支持HTML，请联系你的邮箱工作人员更新邮箱系统';
        $mail->send();
        return "发送成功";
    } catch (Exception $e) {
        return "发送失败";
    }
}



