<?php
// Start session
session_start();

// Clear session data
$_SESSION = array();

// Destroy session
session_destroy();

// Redirect to the login page
header("Location: login_form.php");
exit();
?>