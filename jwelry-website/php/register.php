<?php
include 'config.php'; // Include the database connection
session_start(); // Start session for user login

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        // Registration Logic
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $phone = trim($_POST['phone']);
        $address = trim($_POST['address']);

        // Hash password
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Check if email exists
        $check_email_query = "SELECT email FROM users WHERE email = ?";
        if ($stmt = $conn->prepare($check_email_query)) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                echo "<script>alert('This email is already registered. Please login.'); window.location.href = 'register.php';</script>";
                exit();
            }
            $stmt->close();
        }

        // Insert new user
        $sql = "INSERT INTO users (name, email, password, phone, address) VALUES (?, ?, ?, ?, ?)";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sssss", $name, $email, $password_hash, $phone, $address);
            if ($stmt->execute()) {
                $_SESSION['user_id'] = $stmt->insert_id;
                $_SESSION['user_name'] = $name;
                $_SESSION['user_email'] = $email;

                // Set a 30-day cookie
                setcookie("user_email", $email, time() + (30 * 24 * 60 * 60), "/");

                echo "<script>alert('Registration Successful!'); window.location.href = '../../index.php';</script>";
                exit();
            } else {
                echo "<script>alert('Error: " . $stmt->error . "');</script>";
            }
            $stmt->close();
        }
    } elseif (isset($_POST['login'])) {
        // Login Logic
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        // Fetch user details
        $sql = "SELECT user_id, name, email, password FROM users WHERE email = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $name, $email, $hashed_password);
            $stmt->fetch();

            // Verify password
            if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['user_name'] = $name;
                $_SESSION['user_email'] = $email;

                // Set a 30-day cookie
                setcookie("user_email", $email, time() + (30 * 24 * 60 * 60), "/");

                echo "<script>alert('Login Successful!'); window.location.href = '../../index.php';</script>";
                exit();
            } else {
                echo "<script>alert('Invalid email or password.'); window.location.href = 'register.php';</script>";
            }
            $stmt->close();
        }
    }
    $conn->close();
}
?>
