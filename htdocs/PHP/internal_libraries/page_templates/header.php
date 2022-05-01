<header class="d-print-none d-flex flex-column flex-md-row align-items-center pt-5 pb-2 p-md-3 px-md-3 mb-3 bg-white sticky-md-top">
  <p class="my-0 me-md-auto fw-normal"><a href="index.php"><img src="img/logo.svg" class="logo" alt="WeExpire"/></a></p>
  <?php
  // Hide the 'Get started' button for start.php, review.php, done.php, access.php, verify.php and note.php pages only
  if ($_SERVER['PHP_SELF'] != '/start.php'
   && $_SERVER['PHP_SELF'] != '/review.php'
   && $_SERVER['PHP_SELF'] != '/done.php'
   && $_SERVER['PHP_SELF'] != '/access.php'
   && $_SERVER['PHP_SELF'] != '/verify.php'
   && $_SERVER['PHP_SELF'] != '/note.php') { ?>
    <a class="btn btn-primary btn-lg d-none d-md-inline-block" href="start.php"><?=$translation["button_get_started"];?></a>
  <?php };
  // Show the 'Create another one' button when visitinng the done.php page only
  if ($_SERVER['PHP_SELF'] == '/done.php') { ?>
    <a class="btn btn-outline-primary btn-lg d-none d-md-inline-block" href="start.php"><?=$translation["button_create_another_one"];?></a>
  <?php };
  // Show the 'Create your emergency note' when visiting the note.php page only
  if ($_SERVER['PHP_SELF'] == '/note.php') { ?>
    <a class="btn btn-outline-primary btn-lg d-none d-md-inline-block" href="start.php"><?=$translation["button_create_your_emergency_note"];?></a>
  <?php };?>
</header>
