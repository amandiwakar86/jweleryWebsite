<?php
include '../../php/config.php'; // Include database connection
session_start();

// Handle login when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email exists in the database
    $sql = "SELECT user_id, name, email, password FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id, $name, $user_email, $hashed_password);
            $stmt->fetch();

            // Verify the password
            if (password_verify($password, $hashed_password)) {
                // Store user info in session
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_name'] = $name;
                $_SESSION['user_email'] = $user_email;

                // Redirect to main page
                echo "<script>
                        alert('Login Successful! Welcome, $name.');
                        window.location.href = '../../../index.php';
                      </script>";
                exit();
            } else {
                echo "<script>
                        alert('Incorrect password. Please try again.');
                        window.location.href = 'login.php';
                      </script>";
            }
        } else {
            echo "<script>
                    alert('Email not found. Please register first.');
                    window.location.href = 'registration.php';
                  </script>";
        }
        $stmt->close();
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br><br>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="./registration">Register here</a></p>
</body>
</html>
