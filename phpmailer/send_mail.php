<?php


require 'class.phpmailer.php';
require 'class.subphpmailer.php'; //Para php 5.6
require 'class.smtp.php';

$mail = new subPHPMailer;

foreach($_POST as $key => $value)
{
	$value = trim(preg_replace('/\n|\r/', '', $value));
	$_POST[$key] = strip_tags($value);
}

$message = '<!DOCTYPE html>
			<html>
			<head>
			  <meta charset="utf-8">
			  <meta http-equiv="X-UA-Compatible" content="IE=edge">
			  <title>hola</title>
			  <link rel="stylesheet" href="">
			</head>
			<body>
				<br>Nombre: '.$_POST['nombre'].'
				<br>Email: '.$_POST['email'].'
				<br>Telefono: '.$_POST['telefono'].'
				<br>Curso o taller: '.$_POST['curso_taller'].'
				<br>Comentarios: '.$_POST['comentarios'].'
			</body>
			</html>';

//$mail->SMTPDebug = 2;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP

$mail->Host = 'secure.emailsrvr.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication

$mail->Username = "centralcoaching@publicidadenlinea.com";
$mail->Password = "draH6wEt";


$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to


//$mail->isHTML(true);
$mail->From         = $_POST['email'];
$mail->FromName     = 'CONTACTO';
$mail->addAddress('contacto@centralcoaching.com.mx');
$mail->addAddress('daniel.rojas@publicidadenlinea.com');
//$mail->addAddress('ivan.hernandez@publicidadenlinea.com');

  

$mail->isHTML(true); 
$mail->Subject = "CENTRAL COACHING";
$mail->Body = $message;
//$mail->AltBody = $message;



if(!$mail->send()) {
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo 'Mensaje enviado correctamente';
}

