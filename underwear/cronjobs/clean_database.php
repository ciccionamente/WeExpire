<?php

/**
* This cronjob deletes the hashed notes from the database
* 60 days after the grant date or 60 days after they have been temporarily blocked by the owner of the note
*/

// Load the environment variables needed for the process and set them as global
$root_directory = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "$root_directory/underwear/environment_variables/configuration.php";
global $db_host, $db_user, $db_password, $db_db;

// Start the database connection
$mysqli = @new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db
);

// Delete messages where the granted access date is 60 days older than today's date
$mysqli->query("DELETE FROM notes_to_read WHERE GRANT_ACCESS + INTERVAL 60 DAY < NOW()");

// Delete messages where the denied access date is 60 days older than today's date
$mysqli->query("DELETE FROM notes_to_read WHERE DENIED_ACCESS + INTERVAL 60 DAY < NOW()");

?>
