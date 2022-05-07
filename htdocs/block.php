<?php

/**
* This page is where the note's owner, coming from a link in the notification email, can temporarily block the access to the note for 60 days.
*/

// Include the session initializer
include_once 'PHP/internal_libraries/engine/starter.php';

// Check if the note variable has been passed in the URL and check that its lenght is equal to 64 characters (SHA-256)
if ((isset($_GET["m"])) and (strlen($_GET["m"]) == 64)) {

  // Set the note variable and strip HTML/PHP tags
  $note_to_block = strip_tags($_GET["m"]);

  // Check if the note hasn't been recently blocked in order to avoid unnecessary requests for the block.php page (e.g. page refresh)
  if ((!isset($_SESSION["stop_block_requests"])) or ($_SESSION["stop_block_requests"] != $note_to_block)) {

    // Start MySQLi connection
    require 'PHP/internal_libraries/engine/mysqli_connection.php';

    // Find the hashed note
    $data = $mysqli->query("SELECT * FROM notes_to_read WHERE HASH = '$note_to_block'");

    // If there is an hashed note stored in database, temporarily block its access
    if ($data->num_rows > 0) {
      $mysqli->query("UPDATE notes_to_read SET DENIED_ACCESS = now() WHERE HASH = '$note_to_block'");

      // Set the stop token in order to avoid unnecessary requests for the block.php page (e.g. page refresh)
      $_SESSION["stop_block_requests"] = $note_to_block;
    }

    // If there is no hashed note stored in the database,
    // then remove all the session variables, destroy the session and redirect to the index.php page
    else {
      session_unset();
      session_destroy();
      header("Location: /index.php");
      exit();
    }

  }

}

// If the note variable hasn't been passed in the URL or its lenght is lower than 30 characters,
// then remove all the session variables, destroy the session and redirect to the index.php page
else {
  session_unset();
  session_destroy();
  header("Location: /index.php");
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
}
?>">
<head>
  <?php include 'PHP/internal_libraries/page_templates/head.php';?>
</head>
<body>
  <?php include 'PHP/internal_libraries/page_templates/header.php';?>
  <main class="container">
    <div class="row align-items-center min-content-height">
      <div class="col">
        <div class="pb-3 pt-3 pt-md-5 mx-auto text-center">
          <h1 class="display-3"><?=$translation["block_page_title"];?></h1>
        </div>
        <div class="pb-3">
          <div class="row">
            <div class="col-12 col-md-8 offset-md-2 mt-3 text-break">
              <p class="text-center"><?=$translation["block_page_content"];?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'PHP/internal_libraries/page_templates/footer.php';?>
  </main>
</body>
</html>
