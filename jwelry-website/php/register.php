<?php
include 'config.php'; // Include the database connection
session_start(); // Start session for user login

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']); 
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);

    // Hash the password before saving it in the database
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $check_email_query = "SELECT email FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($check_email_query)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // Email already exists
            echo "<script>
                    alert('This email is already registered. Please use a different email or log in.');
                    window.location.href = 'register.php';
                  </script>";
            exit();
        }
        $stmt->close();
    }

    // Insert data into the database
    $sql = "INSERT INTO users (name, email, password, phone, address) VALUES (?, ?, ?, ?, ?)";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssss", $name, $email, $password_hash, $phone, $address);
        if ($stmt->execute()) {
            // Store user info in session
            $_SESSION['user_id'] = $stmt->insert_id;
            $_SESSION['user_name'] = $name;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_phone'] = $phone;

            // Set a cookie for 30 days to remember the user
            setcookie("user_email", $email, time() + (30 * 24 * 60 * 60), "/");

            // Redirect to main page with success message
            echo "<script>
                    alert('Registration Successful!');
                    window.location.href = '../../index.php';
                  </script>";
            exit();
        } else {
            echo "<script>alert('Error: " . $stmt->error . "'); window.location.href = 'register.php';</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Error in preparing statement: " . $conn->error . "'); window.location.href = 'register.php';</script>";
    }
    $conn->close();
}
?>
