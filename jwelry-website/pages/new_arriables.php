<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/new_arriables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playwrite+IN:wght@100..400&display=swap"
        rel="stylesheet">
        
        
        <!-- For AOS Animation -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <title>New Arrivals - Jewelry</title>
</head>

<body>
<?php
include '../includes/header.php'; 
?>

    <h1>
        <h1>New Arrivals</h1>
    </h1>
    <section id="arrivals">
        <div class="container">
            <div id="jewelry-list" class="grid" data-aos="flip-left"></div>
        </div>
    </section>

    <!-- Footer section -->
    <footer>
        <div class="footer-container">
            <div class="footer-section about">
                <h2>Silver Elegance</h2>
                <p>Discover the finest silver jewelry with exquisite craftsmanship and timeless beauty.</p>
            </div>

            <div class="footer-section links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="./all-products.php">Shop</a></li>
                    <li><a href="./about.php">About Us</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li><a href="./faqs.php">FAQs</a></li>
                    <li><a href="../admin/index.php">Admin Panel</a>
                    </li>
                </ul>
            </div>

            <div class="footer-section support">
                <h3>Customer Support</h3>
                <ul>
                    <li><a href="#">Shipping & Returns</a></li>
                    <li><a href="./Return_refund_policy.php">Privacy Policy</a></li>
                    <li><a href="./terms.php">Terms & Conditions</a></li>
                </ul>
            </div>

            <div class="footer-section newsletter">
                <h3>Join Our Newsletter</h3>
                <form>
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>

            <div class="footer-section social">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Silver Elegance | All Rights Reserved</p>
        </div>
    </footer>

    <!-- Script -->
    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const jewelryData = [
                { "image": "ring.jpg", "name": "Gold Ring", "description": "Elegant gold ring with diamonds.", "price": "199" },
                { "image": "necklace.jpg", "name": "Pearl Necklace", "description": "Beautiful pearl necklace.", "price": "299" },
                { "image": "bracelet.jpg", "name": "Silver Bracelet", "description": "Stylish silver bracelet.", "price": "149" }
            ];

            const jewelryList = document.getElementById("jewelry-list");
            jewelryData.forEach(item => {
                const card = document.createElement("div");
                card.classList.add("jewelry-card");
                card.innerHTML = `
                    <img src="${item.image}" alt="${item.name}">
                    <h2>${item.name}</h2>
                    <p>${item.description}</p>
                    <span>Price: $${item.price}</span>
                    <button>Add to Cart</button>
                `;
                jewelryList.appendChild(card);
            });
        });
    </script> -->
</body>
<!-- For scroll animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- Mai Js -->
<script src="../assets/js/script.js"></script>

</html>