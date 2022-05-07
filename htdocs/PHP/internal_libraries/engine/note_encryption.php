<?php

/**
* Logic for encrypting the emergency note
*/

// Load the environment variables needed for the process and set them as global
require_once '../underwear/environment_variables/configuration.php';
global $note_key_1, $current_note_version;

// Store in session all the emergency note variables
$subject = $_SESSION["subject"];
$note = $_SESSION["note"];
$primary_email = $_SESSION["primary_email"];
$secondary_email = $_SESSION["secondary_email"];
$inactivity_time = $_SESSION["inactivity_time"];
$expiration_date = $_SESSION["expiration_date"];

// Sanitize the input values in case they contain the � character and replace them with empty spaces
// The � character will be used later for separating the variables stored in the note that has to be encrypted
if (strpos($subject,'�') !== false) {
  $subject = str_replace('�', ' ', $subject);
}
if (strpos($note,'�') !== false) {
  $note = str_replace('�', ' ', $note);
}
if (strpos($primary_email,'�') !== false) {
  $primary_email = str_replace('�', ' ', $primary_email);
}
if (strpos($secondary_email,'�') !== false) {
  $secondary_email = str_replace('�', ' ', $secondary_email);
}

// Include the time zone setting
include_once 'time_zone.php';

// Store the creation date and time in session in order to use it for the note encryption and for the pdf generator
$_SESSION["creation_date_time"] = date("Y-m-d H:i:s");

// Set the note verifier that will be eventually used for verifying the emergency note decryption
$note_verifier = hash('sha256', $current_note_version.'�'.$subject.'�'.$note.'�'.$primary_email.'�'.$secondary_email.'�'.$inactivity_time.'�'.$expiration_date.'�'.$_SESSION["creation_date_time"].'�'.$_SESSION['l']);

// Create a variable which contains the string that needs to be encrypted and use the � character as separator
// Note: the � character is not common at all in normal writing, that's why is pretty safe to use it as separator for data values
$note_to_encrypt = $note_verifier.'�'.$current_note_version.'�'.$subject.'�'.$note.'�'.$primary_email.'�'.$secondary_email.'�'.$inactivity_time.'�'.$expiration_date.'�'.$_SESSION["creation_date_time"].'�'.$_SESSION['l'];

// Set the cipher method
$ciphering = "AES-256-CTR";

// Configure variables for OpenSSl encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

// Generate a random initialization vector for encryption
// This initialization vector will be eventually used as access code for the emergency note
$encryption_initialization_vector = bin2hex(random_bytes(($iv_length)/2));

// Generate the encryption key by hashing the WeExpire note key and the random initialization vector (access code)
$encryption_key = hash('sha256', $note_key_1.$encryption_initialization_vector);

// Use openssl_encrypt() function to encrypt the data
$encrypted_note = openssl_encrypt($note_to_encrypt, $ciphering, $encryption_key, $options, $encryption_initialization_vector);

// Store the initialization vector in session
$_SESSION["initialization_vector"] = $encryption_initialization_vector;

// Encode the encrypted note (in order to avoid problems with special characters in the URL) and store it session
$_SESSION["encrypted_note"] = rawurlencode($encrypted_note);

?>
