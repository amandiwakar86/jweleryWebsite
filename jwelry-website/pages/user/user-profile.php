<?php
session_start(); // Start session

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php"); // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Silver Ecommerce</title>
    <link rel="stylesheet" href="../../css/user_profile.css">
</head>

<body>
    <div class="user_profile">
        <h1>User Profile</h1>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['user_name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($_SESSION['user_phone']); ?></p>
        <a href="../../../index.php">Back to Main Page</a> |
    </div>
</body>

</html>