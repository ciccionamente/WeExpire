<?php

/**
* Logic for handling the maintenance mode and the session as soon as a page is loaded
*/

// Check first if the maintenance mode is enabled and redirect accordingly
require_once '../underwear/environment_variables/configuration.php';
global $maintenance_mode;
if ($maintenance_mode == true) {
  http_response_code(503);
    header('Retry-After: 3600');
    include 'maintenance.php';
    exit();
}

// Check if there is already an active session, if not start a new one
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Unset, destroy and restart the session if the last activity was more than 10 minutes ago
if (isset($_SESSION['session_last_activity']) && (time() - $_SESSION['session_last_activity'] > 600)) {
    session_unset();
    session_destroy();
    session_start();
}

// Update and store the last activity time
$_SESSION['session_last_activity'] = time();

?>
