<?php
// Start the session
session_start();

// Set session variables
$ver = $_SESSION['email'];

unset($_SESSION['email']);
header('location:login.php');
?>