<?php
/* 
  Configuration file in which can be used across
  various PHP files to connect to Database.
 */
 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'UChewse_users');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($link === false)die("ERROR: Unable to connect. " . mysqli_connect_error());

?>
