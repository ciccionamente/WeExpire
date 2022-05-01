<?php

/**
*  Verify if the note has been decrypted correctly: if not then redirect to the access.php page and show an error message
*/

// Load the environment variables needed for the process and set them as global
require_once '../underwear/environment_variables/configuration.php';

// Check first if there is already an error stored in session
if (isset($_SESSION["access_code_error"])) {
  // Encode the note used in the URL before using it as a variable for redirection
  $_SESSION["note_to_decrypt"] = rawurlencode($_SESSION["note_to_decrypt"]);

  // Unset the session access code error variable
  unset($_SESSION["access_code_error"]);

  // Redirect to the access page and show the error message
  header("Location: /access.php?m={$_SESSION['note_to_decrypt']}&v={$_SESSION['note_version']}&error=true");
  exit();
}

// Verify that the note decryption is correct by comparing the hash values
if ($note_verifier !== hash('sha256', $current_note_version.'�'.$subject.'�'.$note.'�'.$primary_email.'�'.$secondary_email.'�'.$inactivity_time.'�'.$expiration_date.'�'.$creation_date_time.'�'.$note_owner_language)) {
  // Encode the note used in the URL before using it as a variable for redirection
  $_SESSION["message_to_decrypt"] = rawurlencode($_SESSION["note_to_decrypt"]);

  // Redirect to the access page and show the error message
  header("Location: /access.php?m={$_SESSION['note_to_decrypt']}&v={$_SESSION['note_version']}&error=true");
  exit();
}

?>
