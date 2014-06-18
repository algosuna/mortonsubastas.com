<?php
require_once '/home1/andrea/public_html/sites/mortonsubastas.com/html/lol/vldt.php';

$name = $email = $tel = $message = $valid = $nmErr = $emErr = $telErr = $msErr = $to = $subject = $body = $headers = $mail_sent = $notification = "";

if (isset($_POST['did_send']) == 'true') {
	$name		=	clean_input($_POST['name']);
	$email	=	clean_input($_POST['email']);
	$tel		=	clean_input($_POST['tel']);
	$message=	clean_input($_POST['message']);
	$valid	=	true;



	if (strlen($name) == 0 OR !preg_match("/^[a-zA-Z\s]*$/", $name)) {
		$valid	= false;
		$nmErr	= "<div class='alert alert-warning'>Por favor escriba su nombre. Solo letras y espacios permitidos.</div>";
	}
	if (strlen($email) == 0 OR check_email_address($email) == false) {
		$valid	= false;
		$emErr	= "<div class='alert alert-warning'>Escriba un correo v&aacute;lido.</div>";
	}
	if (strlen($tel) == 0 OR !preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}||[0-9]{10}$/", $tel)) {
  	$valid	= false;
  	$telErr	= "<div class='alert alert-warning'>Escriba un tel&eacute;fono con el siguiente formato: <strong>555-555-5555</strong></div>";
	}
	if (strlen($message) == 0) {
		$valid	= false;
		$msErr	= "<div class='alert alert-warning'>Por favor escriba su mensaje.</div>";
	}


	$to			=	"atencion.clientes@mortonsubastas.com";
	$subject=	"Formulario de Pre-Registro de Subasta | mortonsubastas.com";
	$body		=	'<html><body style="background-color: #000; padding: 20px;">';
	$body		.=	'<img src="http://mortonsubastas.andyosuna.com/images/logo.png" style="padding-bottom: 20px;" alt="Morton Casa de Subastas" />';
	$body		.=	'<table rules="all" style="border-color: #666; width: 100%;" cellpadding="20">';
	$body		.=	"<tr style='background: #eee;'><td><strong>Nombre:</strong></td><td>" . $name . "</td></tr>";
	$body		.=	"<tr style='background: #fff;'><td><strong>Correo:</strong></td><td>" . $email . "</td></tr>";
	$body		.=	"<tr style='background: #fff;'><td><strong>Telefono:</strong></td><td>" . $tel . "</td></tr>";
	$body		.=	"<tr style='background: #fff;'><td><strong>Subasta:</strong></td><td>" . $message . "</td></tr>";
	$body		.=	"</table>";
	$body		.=	"</body></html>";
	$headers=	"From: " . $email . "\r\n";
	$headers.=	"Reply-to: " . $email . "\r\n";
	$headers.=	"CC: andyosuna@gmail.com\r\n";
	$headers.=	"MIME-version: 1.0\r\n";
	$headers.=	"Content-Type: text/html; charset=ISO-8859-1\r\n";


	if ($valid == true) {
		$mail_sent	=	mail($to, $subject, $body, $headers);
		if ($mail_sent == 1) {
			$notification	=	"<div class='alert alert-success'>Gracias por su correo, " . $name . ". Le responderemos en cuanto nos sea posible.</div>";
		} else {
			$notification	=	"<div class='alert alert-danger'>Lo sentimos, algo sali&oacute; mal. Su mensaje no fue enviado. Por favor env&iacute;enos un correo e inf&oacute;rmenos del error. <a href='mailto:info@andyosuna.com' class='alert-link'>info@andyosuna.com</a></div>";
		}
	}
}
