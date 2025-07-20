<?php

/**
* This is the FAQ page
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
  <title>WeExpire - <?=$translation["FAQ_page_title"];?></title>
  <meta name="description" content="<?=$translation["FAQ_page_meta_description"];?>">
  <link rel="canonical" href="https://weexpire.org/FAQ">
  <link rel="alternate" hreflang="en" href="https://weexpire.org/en/FAQ">
  <link rel="alternate" hreflang="es" href="https://weexpire.org/es/FAQ">
  <link rel="alternate" hreflang="fr" href="https://weexpire.org/fr/FAQ">
  <link rel="alternate" hreflang="it" href="https://weexpire.org/it/FAQ">
</head>
<body>
  <?php include 'PHP/internal_libraries/page_templates/header.php';?>
  <main class="container">
    <div class="row align-items-center min-content-height">
      <div class="col">
        <div class="pb-4 pt-3 pt-md-5 mx-auto text-center">
          <h1 class="display-3"><?=$translation["FAQ_page_title"];?></h1>
        </div>
        <div class="pb-3">
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h5><?=$translation["FAQ_page_section_1_title"];?></h5>
              <p><?=$translation["FAQ_page_section_1_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h5><?=$translation["FAQ_page_section_2_title"];?></h5>
              <p><?=$translation["FAQ_page_section_2_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h5><?=$translation["FAQ_page_section_3_title"];?></h5>
              <p><?=$translation["FAQ_page_section_3_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h5><?=$translation["FAQ_page_section_4_title"];?></h5>
              <p><?=$translation["FAQ_page_section_4_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h5><?=$translation["FAQ_page_section_5_title"];?></h5>
              <p><?=$translation["FAQ_page_section_5_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h5><?=$translation["FAQ_page_section_6_title"];?></h5>
              <p><?=$translation["FAQ_page_section_6_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h5><?=$translation["FAQ_page_section_7_title"];?></h5>
              <p><?=$translation["FAQ_page_section_7_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h5><?=$translation["FAQ_page_section_8_title"];?></h5>
              <p><?=$translation["FAQ_page_section_8_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h5><?=$translation["FAQ_page_section_9_title"];?></h5>
              <p><?=$translation["FAQ_page_section_9_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h5><?=$translation["FAQ_page_section_10_title"];?></h5>
              <p><?=$translation["FAQ_page_section_10_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mt-sm-5 d-inline d-md-none text-center">
            <div class="col-12 col-md-8 offset-md-2 text-center">
              <a class="btn btn-primary btn-lg" href="start.php"><?=$translation["button_get_started"];?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'PHP/internal_libraries/page_templates/footer.php';?>
  </main>
</body>
</html>
