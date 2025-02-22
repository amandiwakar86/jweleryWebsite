<?php
include '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $category_id = $_POST['category_id'];
    $image = $_FILES['image']['name'];

    // Upload directory
    $targetDir = "./uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $targetFile = $targetDir . basename($image);
    
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $conn = new mysqli("localhost", "root", "", "sinjhini_db");

        $sql = "INSERT INTO products (name, price, stock_quantity, category_id, image_url, created_at) 
                VALUES ('$name', '$price', '$stock_quantity', '$category_id', '$targetFile', NOW())";

        if ($conn->query($sql) === TRUE) {
            echo "Product added successfully!";
            header("Location: ./products.php"); // Redirect back
        } else {
            echo "Error: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Failed to upload image.";
    }
}
?>
