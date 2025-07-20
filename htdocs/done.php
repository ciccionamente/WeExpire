<?php

/**
* This page is where the user, coming from the review.php page, has finished the process of creating their emergency note.
* Here it's possible to download the PDF document which will give access to the emergency note in the future.
*/

// Include the session initializer
include_once 'PHP/internal_libraries/engine/starter.php';

// Load the environment variables needed for the process and set them as global
require_once '../underwear/environment_variables/configuration.php';
global $base_path, $current_note_version, $test_mode;

// Check if there is a POST request and if there is a page token set
if (($_SERVER["REQUEST_METHOD"] == "POST") and isset($_SESSION["page_token"])) {

  // Verify if the user is coming from the review page
  if ($_SESSION["page_token"] == "review_page") {

  // Encrypt the emergency note
  require 'PHP/internal_libraries/engine/note_encryption.php';

  // For statistic purposes only, log the anonymous information about the note creation date
  require 'PHP/internal_libraries/engine/mysqli_connection.php';
  $mysqli->query("INSERT INTO created_notes (DATE_TIME) VALUES (now())");
  $mysqli->close();

  // Set the page token
  $_SESSION["page_token"] = "done_page";

  }

  // If the user is not coming from the review.php page,
  // then remove all the session variables, destroy the session and redirect to the index page
  else {
    session_unset();
    session_destroy();
    header("Location: /");
    exit();
  }

}

// If there is no POST request and no page token set,
// then remove all the session variables, destroy the session and redirect to the index page
else {
  session_unset();
  session_destroy();
  header("Location: /");
  exit();
}

// Include the page language switch in order to provide translated content
include_once 'PHP/internal_libraries/engine/page_language_switch.php';

?>
<!DOCTYPE html>
<html lang="<?php
if ($_SESSION['l'] == "en") {
  echo "en";
} if ($_SESSION['l'] == "es") {
  echo "es";
} if ($_SESSION['l'] == "it") {
  echo "it";
} if ($_SESSION['l'] == "fr") {
  echo "fr";
}
?>">
<head>
  <?php include 'PHP/internal_libraries/page_templates/head.php';?>
  <title>WeExpire - <?=$translation["done_page_title"];?></title>
  <meta name="robots" content="noindex, nofollow">
</head>
<body>
  <?php include 'PHP/internal_libraries/page_templates/header.php';?>
  <main class="container">
    <div class="row align-items-center min-content-height">
      <div class="col">
        <div class="pb-3 pt-3 pt-md-5 mx-auto text-center">
          <h1 class="display-3"><?=$translation["done_page_title"];?></h1>
        </div>
        <div class="pb-3">
          <div class="row">
            <div class="col-12 col-md-8 offset-md-2 mt-3 text-break">
              <?=$translation["done_page_content"];?>
            </div>
          </div>
          <div class="row pt-5 text-center">
            <div class="col">
              <div class="btn-group">
                <a class="btn btn-primary btn-lg" role="button" href="/pdf.php" target="_blank">
                  <?=$translation["button_get_emergency_note"];?>
                </a>
                <button type="button" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/en/pdf" target="_blank">English</a></li>
                  <li><a class="dropdown-item" href="/es/pdf" target="_blank">Español</a></li>
                  <li><a class="dropdown-item" href="/fr/pdf" target="_blank">Français</a></li>
                  <li><a class="dropdown-item" href="/it/pdf" target="_blank">Italiano</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-8 offset-md-2 mt-3 text-break">
              <?=$translation["done_page_donate_message"];?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if ($test_mode == true) { ?>
      <!-- Display test information in case the test mode is enabled -->
      <div class="row">
        <div class="col-6 offset-md-3 text-break">
          <div class="alert alert-warning text-center" role="alert">
            <a href="<?=$base_path;?>/access.php?l=<?=$_SESSION["l"];?>&m=<?=$_SESSION['encrypted_note'];?>&v=<?=$current_note_version;?>" target="_blank"><b>Note direct link</b></a> | <b>Access code:</b> <?=$_SESSION["initialization_vector"];?>
          </div>
        </div>
      </div>
    <?php } ?>
    <?php include 'PHP/internal_libraries/page_templates/footer.php';?>
  </main>
</body>
</html>
