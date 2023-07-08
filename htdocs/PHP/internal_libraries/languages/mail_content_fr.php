<?php

/**
* Translations for email notifications
* Language: French
*/

$translation = array();

// Access request email notification
$translation["access_request_subject"] = "Demande d'accès aux notes d'urgence";
$translation["access_request_html_content"] = "<p>Bonjour,</p>
                  <p>Quelqu'un essaie d'accéder à votre note d'urgence dont l'objet est le suivant : <b>{$subject}</b></p>
                  <p>Si vous voulez bloquer temporairement l'accès à cette note pendant 60 jours, vous devez cliquer sur le lien ci-dessous:</p>
                  <p><b><a href='{$base_path}/block.php?m={$hashed_note}' target='_blank'>Oui, je veux bloquer temporairement l'accès à cette note pendant 60 jours.</a></b></p>
                  <p>Après ces 60 jours, vous recevrez une nouvelle notification si quelqu'un tente à nouveau d'accéder à votre note d'urgence.</p>
                  <hr>
                  <p>Vous avez des questions ou besoin d'aide ? Écrivez-nous à <a href='mailto:{$SMTP_username}'>{$SMTP_username}</a></p>";
$translation["access_request_non-html_content"] = "Bonjour, quelqu'un essaie d'accéder à votre note d'urgence qui a le sujet suivant : {$subject}. Si vous souhaitez bloquer temporairement l'accès à cette note pendant 60 jours, vous devez visiter l'URL suivante sur votre navigateur : {$base_path}/block.php?m={$hashed_note}. Après ces 60 jours, vous recevrez une nouvelle notification si quelqu'un tente à nouveau d'accéder à votre note d'urgence. Vous avez des questions ou besoin d'aide ? Écrivez-nous à {$SMTP_username}";

?>
