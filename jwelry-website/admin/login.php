<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="./login.css">
    <script src="./login.js" defer></script>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form id="loginForm" action="login.php" method="POST">
            <input type="email" id="email" name="email" placeholder="Enter Admin Email" required>
            <input type="password" id="password" name="password" placeholder="Enter Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
