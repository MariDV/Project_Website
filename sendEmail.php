<?php
require 'PHPMailer/PHPMailerAutoload.php';
session_start();

$url='contactsThankyou.php';
$subject = $_POST['subject'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


sendBasicEmail($email,$name,$subject,$message,'');

function sendBasicEmail($fromEmail,$fromName,$subject,$body,$altBody ) {
	$mail = new PHPMailer;
	$mail->SMTPDebug = 0;                               // Enable verbose debug output
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'secure.emailsrvr.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'mariana@eternalskincare.ca';                 // SMTP username
	$mail->Password = 'Vilela1234';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                  // TCP port to connect to
    $mainBody = 'Hello,<br> you just received an e-mail from: ' .$fromName .'('. $fromEmail.') subject: <br>'.$subject. '<br>' .$body;

    $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress('mariana@eternalskincare.ca', 'Eternal Skincare');     // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	$mail->addReplyTo($fromEmail, $fromName);
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = $subject;
	$mail->Body    = $mainBody;
	$mail->AltBody = $altBody;

	$res=openssl_pkey_new();

	$mail->SMTPOptions = array(
	'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
	));

	if(!$mail->send()) {
		return 'False: ' . $mail->ErrorInfo;
	} else {
		return 'True';     
	}

}

   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
?>