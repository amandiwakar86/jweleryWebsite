<?php
include 'config.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $phone = $_POST['phone'];
    $address =$_POST['address'];

     // Hash the password before saving it in the database
     $password_hash = password_hash($password, PASSWORD_DEFAULT);


    // Insert data into the database
    $sql = "INSERT INTO users (name, email, password, phone, address) VALUES (?, ?, ?, ?, ?)";   

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssss", $name, $email, $password_hash, $phone, $address);
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error in preparing statement: " . $conn->error;
    }
    $conn->close();
}
?>
