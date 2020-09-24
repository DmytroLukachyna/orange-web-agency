<?php 

$email = $_POST['mail-address'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.ukr.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'lolkekcheburek1905@ukr.net';                 // Наш логин
$mail->Password = '9TSMdfSL76GWwyyl';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('lolkekcheburek1905@ukr.net', 'Orange Web');   // От кого письмо 
$mail->addAddress('guidecco@ukr.net');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

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