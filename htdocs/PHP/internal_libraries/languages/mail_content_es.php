<?php

/**
* Translations for email notifications
* Language: Spanish
*/

$translation = array();

// Access request email notification
$translation["access_request_subject"] = "Acceso al mensaje de emergencia";
$translation["access_request_html_content"] = "<p>Hola,</p>
                  <p>Alguien está intentando acceder a tu mensaje de emergencia que tiene el siguiente título: <b>{$subject}</b></p>
                  <p>Si quieres bloquear temporalmente durante 60 días el acceso al mensaje pulsa en el siguiente enlace:</p>
                  <p><b><a href='{$base_path}/block.php?m={$hashed_note}' target='_blank'>Si, quiero bloquear temporalmente durante 60 días el acceso al mensaje.</a></b></p>
                  <p>Después de estos 60 días, recibirás una nueva notificación si alguien intenta acceder nuevamente a tu nota de emergencia.</p>
                  <hr>
                  <p>¿Tienes dudas o necesitas ayuda? Escríbenos a <a href='mailto:{$SMTP_username}'>{$SMTP_username}</a></p>";
$translation["access_request_non-html_content"] = "Hola, alguien está intentando acceder a tu mensaje de emergencia que tiene el siguiente título: {$subject}. Si quieres bloquear temporalmente durante 60 días el acceso al mensaje entra en el siguiente enlace URL de tu navegador: {$base_path}/block.php?m={$hashed_note}. Después de estos 60 días, recibirás una nueva notificación si alguien intenta acceder nuevamente a tu nota de emergencia. ¿Tienes dudas o necesitas ayuda? Escríbenos a {$SMTP_username}";

?>
