<?php

/**
* This is the main landing page
*/

// Include the session initializer
include_once 'PHP/internal_libraries/engine/starter.php';

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
  <title>WeExpire - <?=$translation["landing_page_title"];?></title>
  <meta name="description" content="<?=$translation["landing_page_meta_description"];?>">
  <link rel="canonical" href="https://weexpire.org">
  <link rel="alternate" hreflang="en" href="https://weexpire.org/en">
  <link rel="alternate" hreflang="es" href="https://weexpire.org/es">
  <link rel="alternate" hreflang="fr" href="https://weexpire.org/fr">
  <link rel="alternate" hreflang="it" href="https://weexpire.org/it">
</head>
<body>
  <?php include 'PHP/internal_libraries/page_templates/header.php';?>
  <main class="container">
    <div class="row align-items-center min-content-height">
      <div class="col">
        <div class="pb-5 pt-3 pt-md-5 mx-auto text-center">
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
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h1><?=$translation["landing_page_section_5_title"];?></h1>
              <p><?=$translation["landing_page_section_5_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mb-4 mt-sm-5 mb-sm-5">
            <div class="col-12 col-md-8 offset-md-2">
              <h1><?=$translation["landing_page_section_6_title"];?></h1>
              <p><?=$translation["landing_page_section_6_description"];?></p>
            </div>
          </div>
          <div class="row mt-4 mt-sm-5 d-inline d-md-none text-center">
            <div class="col-12 col-md-8 offset-md-2 text-center">
              <a class="btn btn-primary btn-lg" href="start.php"><?=$translation["button_get_started"];?></a>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12 offset-md-16 text-center">
              <div class="row justify-content-center align-items-center mt-4 g-4">
                <div class="col-3 col-sm"><hr></div>
                <div class="col-6 col-sm"><h4><?=$translation["landing_page_section_7_title"];?></h4></div>
                <div class="col-3 col-sm"><hr></div>
              </div>
              <div class="row justify-content-center align-items-center mt-4 g-2">
                  <div class="col-12 col-sm"><a href="https://carney.co/daily-carnage/cold-calling/" target="_blank" class="featured-logo"><img src="img/featured/carney_logo.svg" alt="Carney"></a></div>
                  <div class="col-12 col-sm"><a href="https://www.densediscovery.com/issues/286/" target="_blank" class="featured-logo"><img src="img/featured/dense_discovery_logo.svg" alt="Dense Discovery"></a></div>
                  <div class="col-12 col-sm"><a href="https://www.fastcompany.com/91134587/encrypt-private-messages-in-qr-codes-weexpire" target="_blank" class="featured-logo"><img src="img/featured/fast_company_logo.svg" alt="Fast Company"></a></div>
                  <div class="col-12 col-sm"><a href="https://www.fm93.com/audio/513743/un-site-web-pour-laisser-un-message-apres-sa-mort" target="_blank" class="featured-logo"><img src="img/featured/fm93_logo.svg" alt="FM93"></a></div>
                  <div class="col-12 col-sm"><a href="https://www.heise.de/select/ct/2024/17/2419011044304742848" target="_blank" class="featured-logo"><img src="img/featured/heise_online_logo.svg" alt="Heise Online"></a></div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'PHP/internal_libraries/page_templates/footer.php';?>
  </main>
</body>
</html>
