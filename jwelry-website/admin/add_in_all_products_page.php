<?php
include '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity']; // Added stock quantity
    $category_id = $_POST['category_id']; // Added category
    $image = $_FILES['image']['name'];

    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($image);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $conn = new mysqli("localhost", "root", "", "sinjhini_db");
        
        $sql = "INSERT INTO products (name, description, price, stock_quantity, category_id, image_url, created_at, updated_at) 
                VALUES ('$name', '$description', '$price', '$stock_quantity', '$category_id', '$targetFile', NOW(), NOW())";

        if ($conn->query($sql) === TRUE) {
            echo "Product added successfully!";
        } else {
            echo "Error: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Failed to upload image.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h2>Add New Product</h2>

    <form method="POST" enctype="multipart/form-data">
        <label>Product Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Description:</label>
        <textarea name="description" required></textarea><br><br>

        <label>Price (₹):</label>
        <input type="number" name="price" step="0.01" required><br><br>

        <label>Stock Quantity:</label>
        <input type="number" name="stock_quantity" required><br><br>

        <label>Category:</label>
        <select name="category_id" required>
            <option value="1">Rings</option>
            <option value="2">Necklaces</option>
            <option value="3">Bracelets</option>
            <option value="4">Earrings</option>
        </select><br><br>

        <label>Product Image:</label>
        <input type="file" name="image" accept="image/*" required><br><br>

        <button type="submit">Add Product</button>
    </form>

    <br>
    <a href="../pages/all-products.php">View Products</a>
</body>
</html>
