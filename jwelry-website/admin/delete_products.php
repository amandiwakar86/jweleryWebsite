<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products - Admin Panel</title>
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
            max-width: 600px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .product-list {
            list-style: none;
            padding: 0;
        }
        .product-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .product-item img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
        }
        .delete-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .delete-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Manage Products</h2>
        <ul class="product-list" id="productList"></ul>
    </div>

    <script>
        function loadProducts() {
            let products = JSON.parse(localStorage.getItem("products")) || [];
            let productList = document.getElementById("productList");
            productList.innerHTML = "";

            products.forEach((product, index) => {
                let li = document.createElement("li");
                li.classList.add("product-item");
                li.innerHTML = `
                    <img src="${product.image}" alt="${product.name}">
                    <span>${product.name} - $${product.price}</span>
                    <button class="delete-btn" onclick="deleteProduct(${index})">Delete</button>
                `;
                productList.appendChild(li);
            });
        }

        function deleteProduct(index) {
            let products = JSON.parse(localStorage.getItem("products")) || [];
            products.splice(index, 1);
            localStorage.setItem("products", JSON.stringify(products));
            loadProducts();
        }

        window.onload = loadProducts;
    </script>
</body>
</html>
