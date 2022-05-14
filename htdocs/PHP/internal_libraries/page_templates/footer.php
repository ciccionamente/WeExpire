<footer class="d-print-none pt-3 pb-3 text-center">
  <hr class="mt-4 mt-sm-5 mb-3 mb-sm-5"/>
  <div class="row flex-fill d-block d-sm-none">
    <div class="col">
      <span class="px-2"><a class="link-secondary" href="mailto:support@weexpire.org"><?=$translation["footer_contact"];?></a></span>
      <span class="px-2"><a class="link-secondary" href="https://www.buymeacoffee.com/ciccionamente"><?=$translation["footer_donate"];?></a></span>
      <span class="px-2"><a class="link-secondary" href="privacy.php"><?=$translation["footer_privacy"];?></a></span>
      <span class="px-2"><a class="link-secondary" href="terms.php"><?=$translation["footer_terms"];?></a></span>
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
          }
          ?>
        </button>
        <ul class="dropdown-menu" aria-label="<?=$translation["footer_language"];?>">
          <li><a class="dropdown-item" href="index.php?l=en">English</a></li>
          <li><a class="dropdown-item" href="index.php?l=es">Español</a></li>
          <li><a class="dropdown-item" href="index.php?l=it">Italiano</a></li>
        </ul>
      </div>
    </div>
    <div class="col mb-4 d-none d-sm-block">
      <h5><?=$translation["footer_about"];?></h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="mailto:support@weexpire.org"><?=$translation["footer_contact"];?></a></li>
        <li><a class="link-secondary" href="https://www.buymeacoffee.com/ciccionamente" target="_blank"><?=$translation["footer_donate"];?></a></li>
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
