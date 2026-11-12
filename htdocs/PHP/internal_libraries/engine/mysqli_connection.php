<?php

/**
* MySQLi configuration for database connection
*/

// Load the environment variables needed for the process and set them as global
require_once '../underwear/environment_variables/configuration.php';
global $db_host, $db_user, $db_password, $db_db;

// Since PHP 8.1 a failed connection throws an exception instead of just setting connect_error,
// so both cases are handled here
$mysqli_connection_error = null;
try {
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
  if ($mysqli->connect_error) {
    $mysqli_connection_error = "{$mysqli->connect_error} - Error number {$mysqli->connect_errno}";
  }
} catch (mysqli_sql_exception $e) {
  $mysqli_connection_error = "{$e->getMessage()} - Error number {$e->getCode()}";
}

// Check if there is a problem with the database connection
if ($mysqli_connection_error !== null) {

  // Add information in the .txt error log file
  include_once 'error_logger.php';
  $log = $date_log . " - MYSQLI ERROR: {$mysqli_connection_error}\n";
  fwrite($log_file, $log);
  fclose($log_file);

  // Store the error token in session and redirect to the error page
  $_SESSION['error_token'] = 1;
  header("Location: /error");
  exit();
}

?>
