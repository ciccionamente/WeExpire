<?php

/**
* Check if the emergency note can be accessed by the trusted contact or if the owner of the note has to be notified first
*/

// Initialize PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHP/external_libraries/PHPMailer/src/Exception.php';
require 'PHP/external_libraries/PHPMailer/src/PHPMailer.php';
require 'PHP/external_libraries/PHPMailer/src/SMTP.php';


// ---------------------------------------------------------------------------------//
// Function for reading or writing in the database, according to the specific cases
// --------------------------------------------------------------------------------//
function database_read_and_write(){

  // Set the subject, email addresses, inactivity time and note's owner language variables as global in order to use it in the following function
  global $subject, $primary_email, $secondary_email, $inactivity_time, $note_owner_language;

  // Hash the note using SHA-256
  $hashed_note = hash('sha256', $_SESSION["note_to_decrypt"]);

  // Check first if the note hasn't been recently blocked in order to avoid unnecessary requests (e.g. on page refresh)
  if ((!isset($_SESSION["stop_access_requests"])) or ($_SESSION["stop_access_requests"] != $hashed_note)) {

  // Check if the hash of the emergency note has been previously stored in database and if the note's owner previously blocked its access
  require 'PHP/internal_libraries/engine/mysqli_connection.php';
  $data = $mysqli->query("SELECT * FROM notes_to_read WHERE HASH = '$hashed_note'");

    // CASE 1: if there is already an hashed note stored in database, get all the relative variables
    if ($data->num_rows > 0) {
      while($row = $data->fetch_assoc()) {

        $hash = $row["HASH"];
        $requested_access = $row["REQUESTED_ACCESS"];
        $grant_access = $row["GRANT_ACCESS"];
        $denied_access = $row["DENIED_ACCESS"];

        // Store the grant access date in session in order to use it in the note.php page later
        $_SESSION['grant_access'] = $grant_access;

      }

      // Check if the note's owner has already temporarily blocked its access and, if so,
      // set the note access status variable to Blocked
      if (isset($denied_access)) {
        $_SESSION["note_access_status"] = "Blocked";
      }
      else {
        // If the grant date is less or equal than the current date then let the trusted contact access the note
        if (date('Y-m-d', strtotime($grant_access)) <= date('Y-m-d')) {

          // Set the note access status variable to Allowed
          $_SESSION["note_access_status"] = "Allowed";

          // Delete the hashed note from the database after it has been read
          $mysqli->query("DELETE FROM notes_to_read WHERE HASH = '$hashed_note'");

          // For statistic purposes log anonymous information about the note's accessed date
          $mysqli->query("INSERT INTO read_notes (DATE_TIME) VALUES (now())");

        }
        // If the grant date is higher than the current date then the trusted contact has to wait more time before the access is granted
        else {
          // Set the note access status variable to Waiting
          $_SESSION["note_access_status"] = "Waiting";
        }
      }

    }

    // CASE 2: if there isn't already an hashed note stored in database, notify the note's owner and store the hashed note in the database
    else {

      // Set the note access status variable to Waiting
      $_SESSION["note_access_status"] = "Waiting";

      // Set the PHPMailer mail variable
      $mail = new PHPMailer(true);

      try {
        // Include SMTP server settings
        include 'smtp_connection.php';

        // Add the primary recipient
        $mail->addAddress($primary_email);

        // Add the secondary recipient (if any)
        if ($secondary_email !== "None") {
          $mail->addAddress($secondary_email);
        }

        // Set the STMP server variables as global
        global $base_path, $SMTP_username, $SMTP_sender_name;

        // Include the mail language switch in order to provide translated content for the access request notification
        include_once 'mail_language_switch.php';

        $mail->CharSet = 'UTF-8';
        $mail->setFrom($SMTP_username, $SMTP_sender_name);
        $mail->isHTML(true);
        $mail->Subject = $translation["access_request_subject"];
        $mail->Body    = $translation["access_request_html_content"];
        $mail->AltBody = $translation["access_request_non-html_content"];

        // Send the email
        $mail->send();

        // Include the time zone setting
        include_once 'time_zone.php';

        // Store the hashed note in the database
        $grant_access = date('Y-m-d', strtotime(" + {$inactivity_time} days"));
        $mysqli->query("INSERT INTO notes_to_read (HASH, REQUESTED_ACCESS, GRANT_ACCESS) VALUES ('$hashed_note', now(), '$grant_access')");

        // Store the grant access date in session in order to use it in the note.php page later
        $_SESSION['grant_access'] = $grant_access;

      } catch (Exception $e) {

        // Add information in the log file if the email hasn't been sent due to an error
        include_once 'error_logger.php';
        $log = $date_log . " - SMTP ERROR: Access note notification could not be sent. Mailer Error: {$mail->ErrorInfo}\n";
        fwrite($log_file, $log);
        fclose($log_file);

        // Store the error token in session and redirect to the error.php page in case of email error
        $_SESSION['error_token'] = 1;
        header("Location: error.php");
        exit();
      }

    }

    $mysqli->close();

    // Set the stop token variable in order to avoid unnecessary requests for the access.php page (e.g. page refresh)
    $_SESSION["stop_access_requests"] = $hashed_note;

  }

}
// -----------------------------------------------------------------------------------//
// End function for reading or writing in the database, according to the specific cases
// -----------------------------------------------------------------------------------//


// If there is no expiration date in the note then query the database accordingly
if ($expiration_date == "None") {
  database_read_and_write();
}

// Check if the expiration date is higher or lower than today's date
else {

  // Include the time zone setting
  include_once 'time_zone.php';

  // Declare today's date
  $today_date = date('Y-m-d', time());

  // Use strtotime() function to convert dates into date timestamps
  $expiration_date_timestamp = strtotime($expiration_date);
  $today_timestamp = strtotime($today_date);

  // If today's timestamp is less or equal than the expiration date timestamp then query the database accordingly
  if ($today_timestamp <= $expiration_date_timestamp) {
    database_read_and_write();

  } else {
    // Don't let the trusted contact access the note
    // Set the note access status variable to Expired
    $_SESSION["note_access_status"] = "Expired";

  }
}

?>
