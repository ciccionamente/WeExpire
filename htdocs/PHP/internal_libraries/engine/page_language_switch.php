<?php

/**
* Logic for detecting and switching the user language
*/

// Check if there is already an active session, if not start a new one
include_once 'PHP/internal_libraries/engine/starter.php';

// Check first if the language variable is in the URL
if(isset($_GET['l']))
{
  $page_language = $_GET['l'];
  $accepted_languages = ['it', 'en', 'es'];
  $page_language = in_array($page_language, $accepted_languages) ? $page_language : 'en';

  // Store the language variable in session but not in case the current page is the pdf.php page (where the emergency note PDF is generated)
  // In this way users will be able to download the emergency notes documents in languages different from their main language
  $current_page = basename($_SERVER['PHP_SELF']);
  if($current_page !== 'pdf.php') {
      $_SESSION['l'] = $page_language;
  }
}

// Check if the language variable has been already stored in session and set its value accordingly
else if(isset($_SESSION['l']))
{
  $page_language = $_SESSION['l'];
}

// If there is no language variable in the URL or session, then get the browser language
else
{
  $page_language = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2) : '';
  $accepted_languages = ['it', 'en', 'es'];
  $page_language = in_array($page_language, $accepted_languages) ? $page_language : 'en';
  $_SESSION['l'] = $page_language;
}

// Select the page content according to the user's or browser language
switch ($page_language) {
  case 'en':
  $page_language_file = 'PHP/internal_libraries/languages/page_content_en.php';
  break;

  case 'es':
  $page_language_file = 'PHP/internal_libraries/languages/page_content_es.php';
  break;

  case 'it':
  $page_language_file = 'PHP/internal_libraries/languages/page_content_it.php';
  break;

  default:
  $page_language_file = 'PHP/internal_libraries/languages/page_content_en.php';

}

include_once $page_language_file;

?>
