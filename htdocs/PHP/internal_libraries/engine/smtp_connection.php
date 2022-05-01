<?php

/**
* SMTP configuration used for sending email notifications
*/

// Load the environment variables needed for the process and set them as global
require_once '../underwear/environment_variables/configuration.php';
global $SMTP_host, $SMTP_username, $SMTP_password, $SMTP_port;

// Load PHPMailer
use PHPMailer\PHPMailer\PHPMailer;

$mail->SMTPDebug = 0;                                       //Disable/Enable verbose debug output. 0 = disabled, 1 = Output messages sent by the client, 2 = as 1, plus responses received from the server (this is the most useful setting)
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = $SMTP_host;                             //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = $SMTP_username;                         //SMTP username
$mail->Password   = $SMTP_password;                         //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = $SMTP_port;                             //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

?>
