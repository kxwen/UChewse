<?php
//script to log current user out and redirect to login page
session_start();
$_SESSION = array();
session_destroy();
header("location: UChewse_login.php");
exit;
?>


