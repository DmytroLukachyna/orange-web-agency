<?php 

$name = $_POST['user_name'];
$email = $_POST['user_mail'];
$usermessage = $_POST['user_message'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$mail->isSMTP();
$mail->Host = 'smtp.ukr.net';
$mail->SMTPAuth = true;
$mail->Username = 'lolkekcheburek1905@ukr.net';
$mail->Password = '9TSMdfSL76GWwyyl';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('lolkekcheburek1905@ukr.net', 'Orange Web');
$mail->addAddress('guidecco@ukr.net');
$mail->isHTML(true);
$mail->Subject = 'Письмо c Orange Web';
$mail->Body    = '
	Пользователь тестового сайта <b>Orange Web</b> оставил данные!<br><br> 
	Имя: ' . $name . ' <br>
	E-mail: ' . $email . '<br>
	Сообщение: ' . $usermessage . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>