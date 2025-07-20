<?php

/**
* This page is where the user is redirected when an error occurs
*/

// Include the session initializer
include_once 'PHP/internal_libraries/engine/starter.php';

// Verify that the user is coming for a real error, otherwise remove all the session variables,
// destroy the session and redirect to the index page
if(isset($_SESSION['error_token'])){
  // Remove all the session variables and destroy the session so the user can't refresh the page
  // or load it again without any real error
  session_unset();
  session_destroy();
}
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
  <title>WeExpire - <?=$translation["error_page_title"];?></title>
  <meta name="robots" content="noindex, nofollow">
</head>
<body>
  <?php include 'PHP/internal_libraries/page_templates/header.php';?>
  <main class="container">
    <div class="row align-items-center min-content-height">
      <div class="col">
        <div class="pb-3 pt-3 pt-md-5 mx-auto text-center">
          <h1 class="display-3"><?=$translation["error_page_title"];?></h1>
        </div>
        <div class="pb-3">
          <div class="row">
            <div class="col-12 col-md-8 offset-md-2 mt-3">
              <p class="text-center"><?=$translation["error_page_content"];?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'PHP/internal_libraries/page_templates/footer.php';?>
  </main>
</body>
</html>
