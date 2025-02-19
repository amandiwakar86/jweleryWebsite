<!-- HTML Login Form -->
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="login-container">
        <h2>Register</h2>
        <form action="../../php/register.php" method="post">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <input type="text" name="phone" placeholder="Enter your phone number" required>
            <input type="text" name="address" placeholder="Enter your address " required>
            <button type="submit">Submit</button>
        </form>
        
    </div>
</body>

</html>