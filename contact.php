<?php
session_start();
if (!$_POST) exit;

require 'SendMail/PHPMailerAutoload.php';

// Email address verification, do not edit.
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name     = $_POST['nombre'];
$email    = $_POST['email'];
$phone    = $_POST['telefono'];
$empresa    = $_POST['empresa'];
$tipo    = $_POST['tipo'];
$message = $_POST['mensaje'];

if (trim($name) == '') {
	$_SESSION['ERROR'] = "Escriba su nombre";
} else if (trim($email) == '') {
	$_SESSION['ERROR'] = "Esriba su correo electrónico";
} else if (!isEmail($email)) {
	$_SESSION['ERROR'] = "Esriba un correo electrónico válido";
} else if (trim($message) == '') {
	$_SESSION['ERROR'] = "Esriba su mensaje";
} else {
	if (get_magic_quotes_gpc()) {
		$message = stripslashes($message);
	}

	try {
		$mail = new PHPMailer();

		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.zoho.com';
		$mail->Username = 'root@synergyeventos.com';
		$mail->Password = '';
		$mail->SMTPSecure = 'tls';
		$mail->CharSet = 'UTF-8';
		$mail->Port = 587;

		$mail->From     = 'root@synergyeventos.com';
		$mail->FromName = 'Synergy Perú';

		$body = '<h2>De: '.$name.'</h2>'
				.'<ul><li><strong>CORREO ELECTRÓNICO:</strong> '.$email.'</li>'
				.'<li><strong>TELÉFONO:</strong> '.$phone.'</li>'
				.'<li><strong>COLEGIO:</strong> '.$empresa.'</li>'
				.'<li><strong>TIPO:</strong> '.$tipo.'</li>'
				.'<li><strong>MENSAJE</strong><blockquote>'. nl2br($message) .'</blockquote></li></ul>';

		$text_body = 'De: '.$name."\n\n"
				.'Correo electrónico: '.$email."\n"
				.'Teléfono: '.$phone."\n"
				.'Colegio: '.$empresa."\n"
				.'Tipo: '.$tipo."\n"
				."Mensaje\n". $message;

		$mail->Subject = 'Synergy :: Página contacto';
		$mail->Body    = $body;
		$mail->AltBody = $text_body;
		$mail->addAddress('info@synergyeventos.com', 'Synergy Eventos');

	    if ($mail->send())
		{
			$_SESSION['SUCCESS'] = "Su mensaje ha sido enviado";
		}
		else
		{
			$_SESSION['ERROR'] = "Hubo un error al enviar su mensaje, intentelo de nuevo";
		}

		// Clear all addresses and attachments for next loop
		$mail->clearAddresses();
	} catch (phpmailerException $e) {
		$_SESSION['ERROR'] = $e->getMessage();
	}
}


header('location: ' . $_SERVER['HTTP_REFERER']);