<?php
include '../includes/config.php';

$conn = new mysqli("localhost", "root", "", "sinjhini_db");

// Check if product ID is provided
if (!isset($_GET['id'])) {
    die("Product ID is required.");
}

$product_id = $_GET['id'];

// Fetch product details
$result = $conn->query("SELECT * FROM products WHERE product_id = $product_id");
$product = $result->fetch_assoc();

if (!$product) {
    die("Product not found.");
}

// Fetch categories
$categoriesResult = $conn->query("SELECT category_id, category_name FROM categories");
$categories = [];
while ($row = $categoriesResult->fetch_assoc()) {
    $categories[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h2>Edit Product</h2>
    <form method="POST" enctype="multipart/form-data" action="updateProduct.php">
        <input type="hidden" name="product_id" value="<?= $product['product_id']; ?>">

        <label>Category:</label>
        <select name="category_id" required>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['category_id']; ?>" <?= ($category['category_id'] == $product['category_id']) ? 'selected' : ''; ?>>
                    <?= $category['category_name']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label>Product Name:</label>
        <input type="text" name="name" value="<?= $product['name']; ?>" required>

        <label>Price (₹):</label>
        <input type="number" name="price" step="0.01" value="<?= $product['price']; ?>" required>

        <label>Stock Quantity:</label>
        <input type="number" name="stock_quantity" value="<?= $product['stock_quantity']; ?>" required>

        <label>Current Image:</label><br>
        <img src="<?= $product['image_url']; ?>" width="100"><br>

        <label>Change Image (optional):</label>
        <input type="file" name="image" accept="image/*">

        <button type="submit">Update Product</button>
    </form>
</body>
</html>
