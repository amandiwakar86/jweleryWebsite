<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
            color: #555;
        }

        input,
        textarea,
        button {
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            height: 80px;
        }

        button {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border: none;
            margin-top: 15px;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Add Product</h2>
        <form id="productForm" action="save_products.php" method="POST" enctype="multipart/form-data">
            <label>Product Image:</label>
            <input type="file" id="productImage" accept="image/*" required>
            <label>Product Name:</label>
            <input type="text" id="productName" required>
            <label>Price:</label>
            <input type="number" id="productPrice" required>
            <label>Description:</label>
            <textarea id="productDescription" required></textarea>
            <button type="submit">Add Product</button>
        </form>
    </div>

    <script>
        document.getElementById("productForm").addEventListener("submit", function (event) {
            event.preventDefault();

            let productName = document.getElementById("productName").value;
            let productPrice = document.getElementById("productPrice").value;
            let productDescription = document.getElementById("productDescription").value;
            let productImage = document.getElementById("productImage").files[0];

            if (productImage) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    let productData = {
                        name: productName,
                        price: productPrice,
                        description: productDescription,
                        image: event.target.result
                    };

                    // Store products only in earrings section
                    let earingsProducts = JSON.parse(localStorage.getItem("earings_products")) || [];
                    earingsProducts.push(productData);
                    localStorage.setItem("earings_products", JSON.stringify(earingsProducts));

                    alert("Product Added Successfully!");
                    window.location.href = "../pages/earings.php"; // Redirect to earrings page
                };
                reader.readAsDataURL(productImage);
            }
        });
    </script>

</body>

</html>