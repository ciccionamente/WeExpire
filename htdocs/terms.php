<?php

/**
* This page contains WeExpire's Terms of Service
*/

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
  <title>WeExpire - <?=$translation["terms_page_title"];?></title>
  <meta name="description" content="<?=$translation["terms_page_meta_description"];?>">
  <link rel="canonical" href="https://weexpire.org/terms">
  <link rel="alternate" hreflang="en" href="https://weexpire.org/en/terms">
  <link rel="alternate" hreflang="es" href="https://weexpire.org/es/terms">
  <link rel="alternate" hreflang="fr" href="https://weexpire.org/fr/terms">
  <link rel="alternate" hreflang="it" href="https://weexpire.org/it/terms">
</head>
<body>
  <?php include 'PHP/internal_libraries/page_templates/header.php';?>
  <main class="container">
    <div class="row align-items-center min-content-height">
      <div class="col">
        <div class="pb-4 pt-3 pt-md-5 mx-auto text-center">
          <h1 class="display-3"><?=$translation["terms_page_title"];?></h1>
        </div>
        <div class="pb-3">
          <div class="row">
            <div class="col-12 col-md-8 offset-md-2 mt-4 text-break">
              <?=$translation["terms_page_content"];?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'PHP/internal_libraries/page_templates/footer.php';?>
  </main>
</body>
</html>
