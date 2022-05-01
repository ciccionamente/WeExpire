<?php

/**
* This is the main landing page
*/

// Include the session initializer
include_once 'PHP/internal_libraries/engine/starter.php';

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
        <div class="pb-3 pt-3 pt-md-5 pb-5 mx-auto text-center">
          <h1 class="display-3"><?=$translation["landing_page_headline"];?></h1>
          <p class="lead"><b><?=$translation["landing_page_secondary_headline"];?></b></p>
          <a class="btn btn-primary btn-lg d-inline-block d-md-none mt-4" href="start.php"><?=$translation["button_get_started"];?></a>
        </div>
        <div class="pb-3">
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h1><?=$translation["landing_page_section_1_title"];?></h1>
              <p><?=$translation["landing_page_section_1_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h1><?=$translation["landing_page_section_2_title"];?></h1>
              <p><?=$translation["landing_page_section_2_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h1><?=$translation["landing_page_section_3_title"];?></h1>
              <p><?=$translation["landing_page_section_3_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h1><?=$translation["landing_page_section_4_title"];?></h1>
              <p><?=$translation["landing_page_section_4_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mb-4 mt-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h1><?=$translation["landing_page_section_5_title"];?></h1>
              <p><?=$translation["landing_page_section_5_description"];?></p>
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
