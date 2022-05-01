<?php

/**
* MySQLi configuration for database connection
*/

// Load the environment variables needed for the process and set them as global
require_once '../underwear/environment_variables/configuration.php';
global $db_host, $db_user, $db_password, $db_db;

$mysqli = @new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db
);

// Check if there is a problem with the database connection
if ($mysqli->connect_error) {

  // Add information in the .txt error log file
  include_once 'error_logger.php';
  $log = $date_log . " - MYSQLI ERROR: {$mysqli->connect_error} - Error number {$mysqli->connect_errno}\n";
  fwrite($log_file, $log);
  fclose($log_file);

  // Store the error token in session and redirect to the error.php page
  $_SESSION['error_token'] = 1;
  header("Location: error.php");
  exit();
}

?>
