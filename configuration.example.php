<?php

/**
* This file contains the environment variables for running WeExpire.org
*/

// Base URL
$base_path = 'http://localhost:8888';

// Database variables used for temporarily verifying the information regarding the emergency note that needs to be processed
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'we_expire';

// SMTP variables used for sending email notifications
// Make sure the SMTP configuration is compliant with PHPMailer documentation (https://github.com/PHPMailer/PHPMailer)
$SMTP_host        = '';
$SMTP_username    = '';
$SMTP_password    = '';
$SMTP_port        = '';
$SMTP_sender_name = '';

// Encryption and decryption variable, used for securing the emergency note
// This key should never be changed or deleted as some users wouldn't be able to decrypt their emergency notes anymore
// Only new keys can be created in the future and they must be associated to a new note version
$current_note_version = '1';
$note_key_1 = 'example_note_key';
$note_verifier_1 = 'example_note_verifier';

// When the test mode is enabled, these variables are used to print example values in the input forms
$test_mode = true;
$test_mode_example_text = '';
$test_mode_primary_email_example = '';
$test_mode_secondary_email_example = '';

// When the maintenance mode is enabled, all the traffic is redirected to the maintenance.php page
$maintenance_mode = false;

?>