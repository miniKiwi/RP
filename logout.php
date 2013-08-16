<?php
/** @file
 * Logout script.
 * Web server session is destroyed.
 */
session_destroy();
header("Location: index.php?location=index");
exit;
?>