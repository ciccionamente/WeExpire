<?php
// Load the environment variables needed for the process and set them as global
require_once '../underwear/environment_variables/configuration.php';
global $base_path;
?>
<footer class="d-print-none pt-2 pb-3 text-center">
  <hr class="mt-4 mt-sm-4 mb-3 mb-sm-5">
  <div class="row flex-fill d-block d-sm-none">
    <div class="col">
      <span class="px-2 text-nowrap"><a class="link-secondary" href="/WeExpire_press_kit.zip"><?=$translation["footer_press_kit"];?></a></span>
      <span class="px-2 text-nowrap"><a class="link-secondary" href="mailto:support@weexpire.org"><?=$translation["footer_contact"];?></a></span>
      <span class="px-2 text-nowrap"><a class="link-secondary" href="https://www.buymeacoffee.com/ciccionamente"><?=$translation["footer_donate"];?></a></span>
    </div>
    <div class="col">
      <span class="px-2 text-nowrap"><a class="link-secondary" href="privacy.php"><?=$translation["footer_privacy"];?></a></span>
      <span class="px-2 text-nowrap"><a class="link-secondary" href="terms.php"><?=$translation["footer_terms"];?></a></span>
    </div>
  </div>
  <div class="row flex-fill">
    <div class="col mb-4">
      <h5 class="d-none d-sm-block"><?=$translation["footer_language"];?></h5>
      <div class="dropdown pt-3 pt-sm-2">
        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="languageDropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          <?php
          if ($_SESSION['l'] == "en") {
            echo "English";
          } if ($_SESSION['l'] == "es") {
            echo "Español";
          } if ($_SESSION['l'] == "it") {
            echo "Italiano";
          } if ($_SESSION['l'] == "fr") {
            echo "Français";
          }
          ?>
        </button>
        <ul class="dropdown-menu" aria-label="<?=$translation["footer_language"];?>">
          <li><a class="dropdown-item" href="<?=$base_path;?>/?l=en">English</a></li>
          <li><a class="dropdown-item" href="<?=$base_path;?>/?l=es">Español</a></li>
          <li><a class="dropdown-item" href="<?=$base_path;?>/?l=fr">Français</a></li>
          <li><a class="dropdown-item" href="<?=$base_path;?>/?l=it">Italiano</a></li>
        </ul>
      </div>
    </div>
    <div class="col mb-4 d-none d-sm-block">
      <h5><?=$translation["footer_about"];?></h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="/WeExpire_press_kit.zip"><?=$translation["footer_press_kit"];?></a></li>
        <li><a class="link-secondary" href="mailto:support@weexpire.org"><?=$translation["footer_contact"];?></a></li>
        <li><a class="link-secondary" href="donate.php" target="_blank"><?=$translation["footer_donate"];?></a></li>
      </ul>
    </div>
    <div class="col mb-4 d-none d-sm-block">
      <h5><?=$translation["footer_legal"];?></h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="privacy.php"><?=$translation["footer_privacy"];?></a></li>
        <li><a class="link-secondary" href="terms.php"><?=$translation["footer_terms"];?></a></li>
      </ul>
    </div>
  </div>
</footer>
