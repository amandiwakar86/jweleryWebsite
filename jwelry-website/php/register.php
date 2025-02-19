<?php
include 'config.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing for security
    $phone = $_POST['phone'];
    $address =$_POST['address'];

    // Insert data into the database
    $sql = "INSERT INTO users (name, email, password, phone, address) VALUES ($name, $email, $password_hash, $phone, $address)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $password, $phone, $address);

    if ($stmt->execute()) {
        echo "Registration successful! <a href='login.php'>Go to Login</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
