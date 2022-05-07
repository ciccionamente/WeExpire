<?php

/**
* This is the page where the user starts the process of creating their emergency note
*/

// Include the session initializer
include_once 'PHP/internal_libraries/engine/starter.php';

// Set the secure form token in order to avoid any cross-domain POST request
$token = md5(uniqid(rand(), TRUE));
// Assign token to session
$_SESSION['csrf_token'] = $token;

// Load the environment variables needed for the process and set them as global
require_once '../underwear/environment_variables/configuration.php';
global $test_mode, $test_mode_example_text, $test_mode_primary_email_example, $test_mode_secondary_email_example;

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
}
?>">
<head>
  <?php include 'PHP/internal_libraries/page_templates/head.php';?>
</head>
<body>
  <?php include 'PHP/internal_libraries/page_templates/header.php';?>
  <main class="container">
    <div class="row align-items-center min-content-height">
      <div class="col">
        <div class="pb-3 pt-3 pt-md-5 mx-auto text-center">
          <h1 class="display-3"><?=$translation["start_page_title"];?></h1>
        </div>
        <div class="pb-3">
          <form action="review.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?=$token;?>">
            <div class="row">
              <div class="col-12 col-md-8 offset-md-2 mt-3 mb-3 text-break">
                <label class="form-label"><?=$translation["start_page_subject_input_title"];?></label>
                <input type="text" name="subject" class="form-control" maxlength="100" required value="<?php if ($test_mode == true) { echo $test_mode_example_text; }?>">
                <span class="form-text">
                  <?=$translation["start_page_subject_input_hint"];?>
                </span>
              </div>
              <div class="col-12 col-md-8 offset-md-2 mt-3 mb-3">
                <label class="form-label"><?=$translation["start_page_note_input_title"];?></label>
                <textarea name="note" class="form-control" rows="10" maxlength="1000" required><?php if ($test_mode == true) { echo $test_mode_example_text; }?></textarea>
                <span class="form-text">
                  <?=$translation["start_page_note_input_hint"];?>
                </span>
              </div>
              <div class="col-12 col-md-8 offset-md-2 mt-3 mb-3">
                <label class="form-label"><?=$translation["start_page_primary_email_input_title"];?></label>
                <input type="email" name="primary_email" class="form-control" maxlength="254" required id="primary_email_input" value="<?php if ($test_mode == true) { echo $test_mode_primary_email_example; }?>">
                <span class="form-text">
                  <?=$translation["start_page_primary_email_input_hint"];?>
                </span>
              </div>
              <div class="col-12 col-md-8 offset-md-2 mt-3 mb-3">
                <label class="form-label"><?=$translation["start_page_secondary_email_input_title"];?></label>
                <input type="email" name="secondary_email" class="form-control" maxlength="254" id="secondary_email_input" value="<?php if ($test_mode == true) { echo $test_mode_secondary_email_example; }?>">
                <span class="form-text">
                  <?=$translation["start_page_secondary_email_input_hint"];?>
                </span>
                <div class="invalid-feedback">
                  <?=$translation["start_page_secondary_email_input_error"];?>
                </div>
              </div>
              <div class="col-12 col-md-8 offset-md-2 mt-3 mb-3">
                <label class="form-label"><?=$translation["start_page_inactivity_input_title"];?></label>
                <select name="inactivity_time" class="form-select" aria-label="Inactivity time" id="inactivity_time_select">
                  <option value="1">1 <?=$translation["start_page_inactivity_input_day"];?></option>
                  <option value="2">2 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="3">3 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="4">4 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="5">5 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="6">6 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="7" selected>7 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="8">8 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="9">9 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="10">10 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="11">11 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="12">12 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="13">13 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="14">14 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="15">15 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="16">16 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="17">17 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="18">18 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="19">19 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="20">20 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="21">21 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="22">22 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="23">23 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="24">24 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="25">25 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="26">26 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="27">27 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="28">28 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="29">29 <?=$translation["start_page_inactivity_input_days"];?></option>
                  <option value="30">30 <?=$translation["start_page_inactivity_input_days"];?></option>
                </select>
                <span class="form-text">
                  <?=$translation["start_page_inactivity_input_hint"];?>
                </span>
              </div>
              <div class="col-12 col-md-8 offset-md-2 mt-3 mb-md-4">
                <div class="row g-0">
                  <div class="col-auto">
                    <div class="form-check form-switch">
                      <input name="expiration_date_switch" class="form-check-input" type="checkbox" role="switch" id="expiration_date_switch">
                    </div>
                  </div>
                  <div class="col-auto">
                    <label for="expiration_date_switch" class="form-label"><?=$translation["start_page_expiration_input_title"];?></label>
                  </div>
                </div>
                <input name="expiration_date" type="date" id="expiration_date" class="form-control" value="<?php
                // Include the time zone setting
                include_once 'PHP/internal_libraries/engine/time_zone.php';
                echo date('Y-m-d', strtotime("+ 7 days"));
                ?>" min="<?php
                // Include the time zone setting
                include_once 'PHP/internal_libraries/engine/time_zone.php';
                echo date('Y-m-d', strtotime("+ 7 days"));
                ?>" max="3000-12-31" disabled required>
                <span class="form-text">
                  <?=$translation["start_page_expiration_input_hint"];?>
                </span>
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
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
  <script src="js/verify_inputs.js"></script>
</body>
</html>
