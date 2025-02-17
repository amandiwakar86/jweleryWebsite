<?php
include "cinfig.php"; // connect databsse connection
$admin_email = "admin@example.com";
$admin_password = password_hash("admin123", PASSWORD_BCRYPT); // Secure Password

$sql = "INSERT INTO admin_users (email, password) VALUES ('$admin_email', '$admin_password')";

if ($conn->query($sql) === TRUE) {
    echo "Admin added successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>
