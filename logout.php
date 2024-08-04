<?php
session_start();

// Destroy the session data
session_destroy();

// Redirect to the login form page
header("Location: index.php");
exit();
?>