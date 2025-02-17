<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        .links {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }

        .link-btn {
            text-decoration: none;
            background: #007bff;
            color: white;
            padding: 10px;
            border-radius: 5px;
            display: block;
            transition: 0.3s;
        }

        .link-btn:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Select Where to Add Products</h2>
        <div class="links">
            <h3>Pages</h3>
            <a href="./add_in_all_products_page.php"class="link-btn">All Jewelry</a>
            <a href="./add_in_earring_page.php" class="link-btn">Earrings</a>
            <a href="./add_in_necklaces.php" class="link-btn">Necklace</a>
            <a href="./add_in_braclets.php" class="link-btn">Bracelets</a>
            <a href="./add_in_newArriables.php" class="link-btn">New Arrivals</a>
            <a href="./add_in_bestSallers.php" class="link-btn">Best Sellers</a>
            <a href="./add_in_giftIdeas.php" class="link-btn">Gift Ideas</a>
            <a href="./add_in_sessionFavorite.php" class="link-btn">Season Favorites</a>

            <h3>Sections</h3>
            <a href="#" class="link-btn">New Collection</a>
            <a href="#" class="link-btn">Trending Products</a>
            <a href="#" class="link-btn">Offer Banner</a>
        </div>
    </div>
</body>

</html>