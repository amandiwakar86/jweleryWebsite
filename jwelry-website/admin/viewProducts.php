<?php
include '../includes/config.php';

$conn = new mysqli("localhost", "root", "", "sinjhini_db");
$result = $conn->query("SELECT products.*, categories.category_name 
                        FROM products 
                        JOIN categories ON products.category_id = categories.category_id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
</head>
<body>
    <h2>All Products</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price (₹)</th>
            <th>Stock</th>
            <th>Action</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['product_id']; ?></td>
                <td><img src="<?= $row['image_url']; ?>" width="50"></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['category_name']; ?></td>
                <td><?= $row['price']; ?></td>
                <td><?= $row['stock_quantity']; ?></td>
                <td>
                    <a href="editProduct.php?id=<?= $row['product_id']; ?>">Edit</a> |
                    <a href="delete_products.php?id=<?= $row['product_id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>

    </table>
</body>
</html>
