<?php

/**
* This cronjob deletes the hashed notes from the database
* 60 days after the grant date or 60 days after they have been temporarily blocked by the owner of the note
*/

// Load the environment variables needed for the process and set them as global.
// The path starts from the folder of this file, so the cronjob works no matter where it is launched from
require_once __DIR__ . '/../environment_variables/configuration.php';
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
