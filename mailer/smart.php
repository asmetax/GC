<?php 

$phone = $_POST['user_phone'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'good.cardboard@bk.ru';                 // Наш логин
$mail->Password = 'SpCiuFqiLlWn1kHhPZCdLV';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('good.cardboard@bk.ru', 'Good Cardboard');   // От кого письмо 
$mail->addAddress('metaxas.a@yandex.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Новая заявка с сайта Good-cardboard';
$mail->Body    = '<div style="display: block">Пользователь сайта Good-cardboard оставил контактные данные </div>
<div style="display: block"> Имя: Неизвестный </div>
<div style="display: block"> Телефон: ' . $phone . ' </div>';
$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    return true;
} else {
    return true;
}

?>