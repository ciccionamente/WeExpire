<?php

/**
* This cronjob deletes the hashed notes from the database
* 60 days after the grant date or 60 days after they have been temporarily blocked by the owner of the note
*/

// Start the database connection
require 'htdocs/PHP/internal_libraries/engine/mysqli_connection.php';

// Delete messages where the granted access date is 60 days older than today's date
$mysqli->query("DELETE FROM notes_to_read WHERE GRANT_ACCESS + INTERVAL 60 DAY < NOW()");

// Delete messages where the denied access date is 60 days older than today's date
$mysqli->query("DELETE FROM notes_to_read WHERE DENIED_ACCESS + INTERVAL 60 DAY < NOW()");

?>
