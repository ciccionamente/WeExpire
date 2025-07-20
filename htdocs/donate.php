<?php

/**
* This page is where the user can donate to WeExpire.org. At the moment the page just redirects to the relative page on Buy Me A Coffee website.
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
  <?php 
// Include Plausible Analytics only if server name is weexpire.org
if ($_SERVER['SERVER_NAME'] == 'weexpire.org') { ?>
<script defer data-domain="weexpire.org" src="https://plausible.io/js/plausible.js"></script>
<?php } ?>
<title>WeExpire</title>
<meta name="robots" content="noindex, nofollow">
</head>
<body>
<script defer>
    window.location = 'https://www.buymeacoffee.com/ciccionamente';
</script>
</body>
</html>