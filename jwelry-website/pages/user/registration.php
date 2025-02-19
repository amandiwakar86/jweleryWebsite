<!-- HTML Login Form -->
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <title>Login</title>
</head>
<style>

body {
    font-family: 'Arial', sans-serif;
    background: url('../../assets/images/register-page-background.jpg') no-repeat center center fixed;
    background-size: cover;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.login-container{
    background:rgba(255, 255, 255, 0.49);
}
p{
    cursor: pointer;
}

</style>
<body>
    <div class="login-container">
    <h2>Registration & Login</h2>

<!-- Registration Form -->
<form action="../../php/register.php" method="post" id="registerForm">
    <input type="text" name="name" placeholder="Enter your name" required>
    <input type="email" name="email" placeholder="Enter your email" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input type="text" name="phone" placeholder="Enter your phone number" required>
    <input type="text" name="address" placeholder="Enter your address" required>
    <button type="submit" name="register">Register</button>
</form>

<!-- Login Form -->
<form action="../../php/register.php" method="post" id="loginForm" style="display:none;">
    <input type="email" name="email" placeholder="Enter your email" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <button type="submit" name="login">Login</button>
</form>

<p class="toggle" onclick="toggleForms()">Already have an account? Login</p>
    </div>
</body>
<script>
    function toggleForms() {
        var regForm = document.getElementById('registerForm');
        var logForm = document.getElementById('loginForm');
        var toggleText = document.querySelector('.toggle');

        if (regForm.style.display === "none") {
            regForm.style.display = "block";
            logForm.style.display = "none";
            toggleText.innerText = "Already have an account? Login";
        } else {
            regForm.style.display = "none";
            logForm.style.display = "block";
            toggleText.innerText = "Don't have an account? Register";
        }
    }

    // User login handle
    // document.addEventListener("DOMContentLoaded", function () {
    //     var userEmail = getCookie("user_email");

    //     if (userEmail) {
    //         // If user is already logged in, redirect to main page
    //         window.location.href = "../../index.php";
    //     } else {
    //         // Pre-fill the email if stored in cookies
    //         document.querySelector("input[name='email']").value = userEmail || "";
    //     }
    // });

    // function getCookie(name) {
    //     var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
    //     return match ? match[2] : null;
    // }

</script>

</html>