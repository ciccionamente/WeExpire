<?php

/**
* Select the email notification content according to the language of the owner's note
*/

$mail_language = $note_owner_language;

switch ($mail_language) {
  case 'en':
  $mail_language_file = 'PHP/internal_libraries/languages/mail_content_en.php';
  break;

  case 'es':
  $mail_language_file = 'PHP/internal_libraries/languages/mail_content_es.php';
  break;

  case 'it':
  $mail_language_file = 'PHP/internal_libraries/languages/mail_content_it.php';
  break;
  
  case 'fr':
  $mail_language_file = 'PHP/internal_libraries/languages/mail_content_fr.php';
  break;
  
  default:
  $mail_language_file = 'PHP/internal_libraries/languages/mail_content_en.php';

}

include_once $mail_language_file;

?>
