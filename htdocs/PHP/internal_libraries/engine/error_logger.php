<?php

/**
* Create or open (if it alread exists) a new .txt error log file with the current date as filename
*/

// Include the time zone setting
include_once 'time_zone.php';

$date_log_file = date('d_m_Y', time());
$date_log = date('d/m/Y h:i:s a', time());
$log_file = fopen("../underwear/error_logs/{$date_log_file}.txt", "a");

?>
