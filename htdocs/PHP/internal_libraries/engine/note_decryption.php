<?php

/**
* Logic for decrypting the emergency note
*/

// Load the environment variables needed for the process and set them as global
require_once '../underwear/environment_variables/configuration.php';
global $note_key_1;

// Set the right note key value depending on the original note version
if ($_SESSION["note_version"] = 1) {
  $note_key = $note_key_1;
}

// Set the cipher method
$ciphering = "AES-256-CTR";

// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

// Set the initialization vector for decryption
$decryption_initialization_vector = $_SESSION["access_code"];

// Set the note to decrypt variable by decoding its relative session variable
$note_to_decrypt = rawurldecode($_SESSION["note_to_decrypt"]);

// Generate the decryption key by hashing the WeExpire note key and the access code previously set by the user
$decryption_key = hash('sha256', $note_key.$_SESSION["access_code"]);

// Use openssl_decrypt() function to decrypt the data
$decrypted_note = openssl_decrypt($note_to_decrypt, $ciphering, $decryption_key, $options, $decryption_initialization_vector);

// Check if the number of the variables in the decrypted note is correct, otherwise set an error variable in the current session
$decrypted_note_variables = explode('�', $decrypted_note);

  if (count($decrypted_note_variables) != 10) {

    // Set the access code error variable
    $_SESSION["access_code_error"] = "1";

  } else {

    // Unset in session the access code error variable (if any)
    unset($_SESSION["access_code_error"]);

    // Get the emergency note variables by exploding the decrypted note
    list($note_verifier, $current_note_version, $subject, $note, $primary_email, $secondary_email, $inactivity_time, $expiration_date, $creation_date_time, $note_owner_language) = explode('�', $decrypted_note);

  }

?>
