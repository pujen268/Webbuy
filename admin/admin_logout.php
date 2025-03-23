<?php
// logout.php

// Start session to clear session variables
session_start();

// Destroy all session data to log the user out
session_unset();
session_destroy();

// Redirect to the login page (located one directory above the current one)
header("Location: admin_lndex.php");
exit;
