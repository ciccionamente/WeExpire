<?php

/**
* This page is where the user is redirected after scanning the QR code of the emergency note.
* Here the user is requested to provide a valid access code in order to access the relative emergency note.
*/

// Include the session initializer
include_once 'PHP/internal_libraries/engine/starter.php';

// Set the secure form token in order to avoid any cross-domain POST request
$token = md5(uniqid(rand(), TRUE));

// Assign token to session
$_SESSION['csrf_token'] = $token;

// Check if the note and the note version variables have been passed in the URL and check if the note variable lenght is higher than 30 characters
if ((strlen($_GET["m"]) > 30) and (strlen($_GET["v"]) == 1)) {

  // Store the note variable in session and strip HTML/PHP tags
  $_SESSION["note_to_decrypt"] = strip_tags($_GET["m"]);

  // Store the note version variable in session
  $_SESSION["note_version"] = strip_tags($_GET["v"]);

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
          <h1 class="display-3"><?=$translation["access_page_title"];?></h1>
        </div>
        <div class="pb-3">
          <form action="note.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?=$token;?>">
            <div class="row">
              <div class="col-12 col-md-4 offset-md-4 mt-4">
                <label class="form-label"><?=$translation["access_page_access_code_input_title"];?></label>
                <input type="text" name="access_code" class="form-control <?php if ((isset($_GET["error"])) and ($_GET["error"] == "true")) { echo "is-invalid"; }; ?>" maxlength="1000" required>
                <?php
                // Show an error message in case the access code or the note provided is invalid
                if ((isset($_GET["error"])) and ($_GET["error"] == "true")) {
                  ?>
                  <div class="invalid-feedback">
                    <?=$translation["access_page_access_code_input_error"];?>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="row pt-5 text-center">
              <div class="col">
                <button class="btn btn-primary btn-lg" type="submit"><?=$translation["button_next"];?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php include 'PHP/internal_libraries/page_templates/footer.php';?>
  </main>
</body>
</html>
