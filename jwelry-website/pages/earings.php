<!-- earrings.html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playwrite+IN:wght@100..400&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/earings.css">
       <!-- For AOS Animation -->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Earrings </title>
    </head>

<body>
<?php
include '../includes/header.php'; 
?>

    <!-- Products -->
    <div class="container">
        <h1>Elegant Earrings Collection</h1>
        <div id="productsContainer" data-aos="flip-left">
            <!-- Products added here dynamicaly -->
        </div>
    </div>


    <?php
include '../includes/footer.php'; 
?>

    <!-- <script>
        fetch('fetch_products.php')
            .then(response => response.json())
            .then(data => {
                let productsDiv = document.getElementById('products');
                data.forEach(product => {
                    let productHTML = `
                        <div class='product'>
                            <img src="${product.image}" alt="${product.name}">
                            <h2>${product.name}</h2>
                            <p>Price: $${product.price}</p>
                            <button onclick="buyProduct(${product.id})">Buy Now</button>
                        </div>
                    `;
                    productsDiv.innerHTML += productHTML;
                });
            });

        function buyProduct(id) {
            alert('Product ' + id + ' added to cart!');
        }
    </script> -->
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let earingsProducts = JSON.parse(localStorage.getItem("earings_products")) || [];
        let productContainer = document.getElementById("productContainer");

        if (earingsProducts.length === 0) {
            productContainer.innerHTML = "<p>No products available.</p>";
            return;
        }

        earingsProducts.forEach(product => {
            let productCard = `
                <div class="product-card">
                    <img src="${product.image}" alt="${product.name}" style="width:100px;">
                    <h3>${product.name}</h3>
                    <p>Price: ₹${product.price}</p>
                    <p>${product.description}</p>
                </div>
            `;
            productContainer.innerHTML += productCard;
        });
    });

    // For Searching 
    // Function to handle search when Enter is pressed
    function handleSearch(event) {
        if (event.key === "Enter") {
            const searchQuery = document.getElementById("search-box").value.trim().toLowerCase();
            if (searchQuery !== "") {
                window.location.href = `search.php?query=${encodeURIComponent(searchQuery)}`;
            }
        }
    }
</script>
<!-- For scroll animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="../assets/js/earrings.js"></script>
<!-- MainKs -->
<!-- <script src="../assets/js/script.js"></script> -->

</html>