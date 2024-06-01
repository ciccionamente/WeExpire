<?php

/**
* Translations for email notifications
* Language: English
*/

$translation = array();

// Access request email notification
$translation["access_request_subject"] = "Emergency note access request";
$translation["access_request_html_content"] = "<p>Hi,</p>
                  <p>Someone is trying to access your emergency note that has the following subject: <b>{$subject}</b></p>
                  <p>If you want to temporarily block the access of this note for 60 days, you must hit the link below:</p>
                  <p><b><a href='{$base_path}/block.php?m={$hashed_note}' target='_blank'>Yes, I want to temporarily block the access of this note for 60 days.</a></b></p>
                  <p>After these 60 days, you will receive a new notification if someone tries to access your emergency note again.</p>
                  <hr>
                  <p>Have questions or need help? Just write us at <a href='mailto:{$SMTP_username}'>{$SMTP_username}</a></p>";
$translation["access_request_non-html_content"] = "Hi, someone is trying to access your emergency note that has the following subject: {$subject}. If you want to temporarily block the access of this note for 60 days, you must visit the following URL on your browser: {$base_path}/block.php?m={$hashed_note}. After these 60 days, you will receive a new notification if someone tries to access your emergency note again. Have questions or need help? Just write us at {$SMTP_username}";

?>
