<?php

/**
* Translations for email notifications
* Language: Italian
*/

$translation = array();

// Access request email notification
$translation["access_request_subject"] = "Accesso nota d'emergenza";
$translation["access_request_html_content"] = "<p>Ciao,</p>
                  <p>Qualcuno sta provando ad accedere ad una tua nota d'emergenza che ha il seguente oggetto: <b>{$subject}</b></p>
                  <p>Se vuoi bloccare temporaneamente l'accesso alla nota per 60 giorni devi premere il link sottostante:</p>
                  <p><b><a href='{$base_path}/block.php?m={$hashed_note}' target='_blank'>Si, voglio temporaneamente bloccare l'accesso alla nota per 60 giorni.</a></b></p>
                  <p>Trascorsi questi 60 giorni riceverai una nuova notifica qualora qualcuno tenterà di accedere nuovamente alla tua nota d'emergenza.</p>
                  <hr>
                  <p>Hai domande o hai bisogno di aiuto? Scrivici a <a href='mailto:{$SMTP_username}'>{$SMTP_username}</a></p>";
$translation["access_request_non-html_content"] = "Ciao, qualcuno sta provando ad accedere alla tua nota d'emergenza che ha il seguente oggetto: {$subject}. Se vuoi bloccare temporaneamente l'accesso alla nota per 60 giorni devi visitare il seguente URL nel tuo browser: {$base_path}/block.php?m={$hashed_note}. Trascorsi questi 60 giorni riceverai una nuova notifica qualora qualcuno tenterà di accedere nuovamente alla tua nota d'emergenza. Hai domande o hai bisogno di aiuto? Scrivici a {$SMTP_username}";

?>
