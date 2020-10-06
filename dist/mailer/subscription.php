<?php 

$email = $_POST['mail-address'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$mail->isSMTP();
$mail->Host = 'smtp.ukr.net';
$mail->SMTPAuth = true;
$mail->Username = 'lolkekcheburek1905@ukr.net';
$mail->Password = 'passdeletedandrevoked';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('lolkekcheburek1905@ukr.net', 'Orange Web');
$mail->addAddress('guidecco@ukr.net');
$mail->isHTML(true);

$mail->Subject = 'Письмо о подписке c Orange Web';
$mail->Body    = '
	Пользователь тестового сайта <b>Orange Web</b> подписался на рассылку!<br><br> 
	E-mail: ' . $email . '<br> ';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>