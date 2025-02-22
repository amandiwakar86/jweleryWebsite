<?php
include '../includes/config.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    
    $conn = new mysqli("localhost", "root", "", "sinjhini_db");
    $sql = "DELETE FROM products WHERE product_id = $product_id";

    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully!";
    } else {
        echo "Error deleting product: " . $conn->error;
    }

    $conn->close();
    header("Location: ./viewProducts.php"); // Redirect back
}
?>
