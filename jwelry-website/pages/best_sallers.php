<?php
include '../includes/config.php';

$conn = new mysqli("localhost", "root", "", "sinjhini_db");

// Fetch best-selling products (most ordered)
$result = $conn->query("
    SELECT p.*, c.category_name, COUNT(oi.product_id) AS order_count
    FROM products p
    JOIN categories c ON p.category_id = c.category_id
    JOIN order_items oi ON p.product_id = oi.product_id  -- FIXED: Using order_items table
    GROUP BY p.product_id
    ORDER BY order_count DESC
    LIMIT 12
");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Sellers</title>
    <style>
      
        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        .product-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            padding: 10px;
        }
        .product-card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }
        .product-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .product-card p {
            font-size: 16px;
            color: #555;
        }
        .btn {
            display: inline-block;
            padding: 8px 15px;
            background: #ff9800;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        .btn:hover {
            background: #e68900;
        }
    </style>
</head>
<body>
<?php
include '../includes/header.php';
?>
<div class="container">
    <h2>🔥 Best Sellers</h2>
    <p style="text-align: center; font-size: 16px; color: #555;">
        Check out our most popular jewelry items that customers love the most!
    </p>
    <div class="grid">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="product-card">
                <img src="<?= str_replace('./', '/jwelery-website/admin/', $row['image_url']); ?>" alt="Best Seller">
                <h3><?= $row['name']; ?></h3>
                <p>Category: <?= $row['category_name']; ?></p>
                <p>Orders: <?= $row['order_count']; ?></p>
                <p>Price: ₹<?= number_format($row['price'], 2); ?></p>
                <a href="productDetail.php?id=<?= $row['product_id']; ?>" class="btn">View Details</a>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php
include '../includes/footer.php';
?>
</body>
</html>
