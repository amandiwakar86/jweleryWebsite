<?php
session_start();
session_destroy();
header("Location: ../pages/user/registration.php"); // Redirect to login page
exit();
?>
