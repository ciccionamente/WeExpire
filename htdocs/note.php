<?php

/**
* This page is where the user, coming from the access.php page, has to verify
* the access code in order to get access to the relative emergency note.
*
* In case the access code is correct, the user has to wait the relative inactivity time
* before they can read the emergency note. Durinng this waiting time WeExpire.org will send an email notification
* to the note's owner in order to prevent any unwanted accesses.
*/

// Include the session initializer
include_once 'PHP/internal_libraries/engine/starter.php';

// Check if there is a POST request
if (($_SERVER["REQUEST_METHOD"] == "POST")) {

  // Verify the secure form token in order to avoid any cross-domain POST request.
  // If it's not verified then remove all the session variables, destroy the sesson
  // and redirect to the index.php page
  if($_SESSION['csrf_token'] !== $_POST['csrf_token']){
    session_unset();
    session_destroy();
    header("Location: /index.php");
    exit();
  }

  // If the access code hasn't the correct lenght, redirect to the access.php page
  // and show the error message
  if (strlen($_POST["access_code"]) !== 16) {
    // Encode the note used in the URL before using it as a variable for redirection
    $_SESSION["note_to_decrypt"] = rawurlencode($_SESSION["note_to_decrypt"]);

    header("Location: /access.php?m=" . $_SESSION["note_to_decrypt"] . "&v=" . $_SESSION["note_version"] . "&error=true");
    exit();
  }

  // Store the access code variable in session in order to use it in the rest of the processes
  $_SESSION["access_code"] = $_POST["access_code"];

  // Decrypt the emergency note
  require 'PHP/internal_libraries/engine/note_decryption.php';

  // Check if the emergency note has been correctly decrypted
  require 'PHP/internal_libraries/engine/verify_decryption.php';

  // Check if the emergency note can be accessed
  require 'PHP/internal_libraries/engine/verify_access.php';

}

// If there is no POST request then remove all the session variables, destroy the session
// and redirect to the index.php page
else {
  session_unset();
  session_destroy();
  header("Location: /index.php");
  exit();
}

// Include the page language switch in order to provide translated content
include_once 'PHP/internal_libraries/engine/page_language_switch.php';

?>
<!doctype html>
<html lang="en">
<head>
  <?php include 'PHP/internal_libraries/page_templates/head.php';?>
</head>
<body>
  <?php include 'PHP/internal_libraries/page_templates/header.php';?>
  <main class="container">
    <div class="row align-items-center min-content-height">
      <div class="col">
        <div class="pb-3 pt-3 pt-md-5 mx-auto text-center">
          <h1 class="display-3"><?=$translation["note_page_title"];?></h1>
        </div>
        <div class="pb-3">
          <div class="row">
            <div class="col-12 col-md-8 offset-md-2 mt-3 text-break">
              <?php
              // Display the content of the emergency note or its status according to the relative case
              if ($_SESSION["note_access_status"] == "Blocked") {
                echo $translation["note_page_blocked_message"];
              } if ($_SESSION["note_access_status"] == "Expired") {
                echo $translation["note_page_expired_message"];
              } if ($_SESSION["note_access_status"] == "Waiting") {
                echo $translation["note_page_waiting_message"];
              } if ($_SESSION["note_access_status"] == "Allowed") {
                if ($expiration_date == "None") {
                  echo $translation["note_page_allowed_message_no_expiration"];
                } else {
                  echo $translation["note_page_allowed_message_with_expiration"];
                }
              } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'PHP/internal_libraries/page_templates/footer.php';?>
  </main>
</body>
</html>
