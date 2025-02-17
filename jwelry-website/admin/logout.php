<!-- logout.php - Logout Admin -->
<?php
session_start();
session_destroy();
header("Location: admin_login.php");
exit();
?>