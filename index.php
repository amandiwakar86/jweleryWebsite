<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ./jwelry-website/userAuthentication/login.php"); // Redirect to login if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zavya.com</title>
    <link rel="stylesheet" href="./jwelry-website/assets/css/style.css">
    <link rel="stylesheet" href="./jwelry-website/assets/css/responsive.css">
    <!-- For AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playwrite+IN:wght@100..400&display=swap"
        rel="stylesheet">
</head>
<style>
    /* Reset & General Styles */
/* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    overflow-x: hidden;
} */
.search-Container {
        min-width: 300px;
        background-color: white;
        padding: 8px;
        border-radius: 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 40px;
    }

    /* Search Box Styling */
    #search-box {
        width: 100%;
        max-width: 400px;
        padding: 10px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 20px;
        margin: 20px auto;
        display: block;
    }

    .search-Container {
        border: 1px solid black;
        border-radius: 50px;

    }

    .search-Container:hover {
        border: 2px solid black;
    }

/* Hero Section */
.hero {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh; /* Full height */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    z-index: 1;
}

/* Background Video */
#hero-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Overlay */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Dark overlay */
}

/* Hero Content */
.hero-content {
    position: relative;
    z-index: 2;
    max-width: 700px;
}

.hero-content h1 {
    font-size: 3rem;
    margin-bottom: 10px;
}

.hero-content p {
    font-size: 1.2rem;
    margin-bottom: 20px;
}

/* Button */
.btn {
    display: inline-block;
    background: #d4af37;
    color: white;
    padding: 12px 24px;
    text-decoration: none;
    font-size: 1.2rem;
    border-radius: 5px;
    transition: 0.3s;
}

.btn:hover {
    background: #b8952a;
}

/* Video Control Button */
#video-control {
    position: absolute;
    bottom: 20px;
    right: 20px;
    background: rgba(255, 255, 255, 0.3);
    color: white;
    padding: 8px 16px;
    border: none;
    cursor: pointer;
    font-size: 1rem;
    border-radius: 5px;
    transition: 0.3s;
}

#video-control:hover {
    background: rgba(255, 255, 255, 0.5);
}

.new-collection-section{
    margin-top:510px;
}
/* Responsive Design */
@media (max-width: 768px) {
    .hero-content h1 {
        font-size: 2rem;
    }
    .hero-content p {
        font-size: 1rem;
    }
    .btn {
        font-size: 1rem;
    }
}

</style>
<body>
<?php
include './jwelry-website/includes/header.php'; 
?>

    <!-- Hero Sction -->

    <section class="hero">
        <video autoplay muted loop id="hero-video">
            <source src="./jwelry-website/assets/videos/video1.mp4.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>

        <div class="overlay"></div>

        <div class="hero-content">
            <h1>Discover Timeless Elegance</h1>
            <p>Handcrafted Silver Jewelry for Every Occasion</p>
            <div class="searchBar">
                <input type="text" id="search-box" placeholder="Search for products..."
                    onkeypress="handleSearch(event)">
            </div>
            <a href="#shop" class="btn">Shop Now</a>
        </div>

        <button id="video-control" onclick="toggleVideo()">Pause</button>
    </section>
    <!-- <section class="hero-section">
        <div class="hero-background-image">
            <img src="./jwelry-website/assets/images/hero2.jpg" alt="" data-aos="fade-right">
        </div>
        <div class="hero-text" data-aos="zoom-in">
            <div class="pera">
                <p>Every Price Of Jewellery Tells A Story</p>
                <div class="line"></div>
            </div>
            <h1>Classic Jewellery Collection</h1>
            <a href="./jwelry-website/pages/checkout.php?product_id=1" class="buy-now"><button>SHOP NOW</button></a>
        </div>
    </section> -->


    <!-- New Collection -->
    <section class="new-collection-section">
        <div class="new-collection-box" data-aos="fade-up" data-aos-duration="3000">
            <a href="./jwelry-website/pages/checkout.php?product_id=1"> 
                <img src="./jwelry-website/assets/images/newCollection1.jpg" alt="">
            </a>
        </div>
        <div class="new-collection-box" data-aos="fade-up" data-aos-duration="3000">
            <a href="./jwelry-website/pages/checkout.php?product_id=1">
                <img src="./jwelry-website/assets/images/newCollection2.jpg" alt="">
            </a>
        </div>
        <div class="new-collection-box" data-aos="fade-up" data-aos-duration="3000">
            <a href="./jwelry-website/pages/checkout.php?product_id=1">
                <img src="./jwelry-website/assets/images/newCollection3.jpg" alt="">
            </a>
        </div>
        <div class="new-collection-box" data-aos="fade-up" data-aos-duration="3000">
            <a href="./jwelry-website/pages/checkout.php?product_id=1">
                <img src="./jwelry-website/assets/images/newCollection3.jpg" alt="">
            </a>
        </div>
    </section>

    <!-- Trending Products -->
    <section class="trending-section">
        <h2>Trending Products</h2 data-aos="zoom-in-down">
        <div class="products-container" id="products-container" data-aos="zoom-in-up">
            <!-- Products will be added dynamically here -->
        </div>
    </section>

    <!-- Offer banner section -->
    <section class="offer-banner-section"  data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
        <div id="offer-banner" class="offer-banner" onclick="buyOfferProduct()">
            <img id="offer-image" src="" alt="Special Offer">
            <div class="offer-details">
                <h2 id="offer-name"></h2>
                <p id="offer-price"></p>
                <a href="./jwelry-website/pages/checkout.php?product_id=1">
                    <p class="offer-text">Limited Time Offer! Click to Buy Now</p>
                </a>
            </div>
        </div>
    </section>
  
   <!-- Our costomer section -->
    <section class="our-customers">
        <div class="container mx-auto px-6">
            <h2>Our Happy Customers</h2>
            <p>Join our satisfied customers who trust us for their silver jewelry needs.</p>
            <div class="grid">
                <!-- Customer 1 -->
                <div class="customer-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="./jwelry-website/assets/images/Customer1.jpg" alt="Customer 1">
                    <p>"Absolutely love my new silver necklace! Great quality and fast delivery."</p>
                    <h4>- Elon Musk</h4>
                </div>

                <!-- Customer 2 -->
                <div class="customer-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="./jwelry-website/assets/images/customer2.jpg" alt="Customer 2">
                    <p>"Amazing craftsmanship! I keep coming back for more silver jewelry."</p>
                    <h4>- Mukesh Ambani</h4>
                </div>

                <!-- Customer 3 -->
                <div class="customer-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="./jwelry-website/assets/images/customer3.jpg" alt="Customer 3">
                    <p>"Best customer service and stunning designs. Highly recommended!"</p>
                    <h4>- Gautam Adani</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Store center section -->
    <section id="our-store" class="store-section">
        <h2>Our Store</h2>
        <p>Welcome to our premium silver jewelry store! Explore our collection of exquisite designs crafted with perfection.</p>

        <div class="store-gallery">
            <img src="store1.jpg" alt="Store Interior">
            <img src="store2.jpg" alt="Silver Jewelry Showcase">
            <img src="store3.jpg" alt="Customer Experience">
        </div>

        <div class="store-location" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
            <h3>Visit Us</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3548.6281700911773!2d78.00573325!3d27.199421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397477465299446b%3A0xac5ba75085a0a0cf!2sSanjay%20Palace%2C%20Sanjay%20Place%2C%20Civil%20Lines%2C%20Agra%2C%20Uttar%20Pradesh%20282002!5e0!3m2!1sen!2sin!4v1738837138637!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" width="100%" height="200" style="border:0;"
                allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- FAQs section -->
    <div class="faq-container">
        <h2>Frequently Asked Questions (FAQs)</h2>
        <div class="faq-item" data-aos="zoom-in-down">
            <p class="faq-question">1. What type of silver jewelry do you offer? <span class="faq-toggle">&#9662;</span>
            </p>
            <p class="faq-answer">We offer a wide range of high-quality silver jewelry, including rings, necklaces,
                bracelets, earrings, and customized designs. All our pieces are crafted from 925 sterling silver,
                ensuring durability and elegance.</p>
        </div>
        <div class="faq-item" data-aos="zoom-in-down">
            <p class="faq-question">2. Is your silver jewelry authentic? <span class="faq-toggle">&#9662;</span></p>
            <p class="faq-answer">Yes, our jewelry is made from certified 925 sterling silver. Each piece undergoes a
                thorough quality check to ensure authenticity and excellence.</p>
        </div>
        <div class="faq-item" data-aos="zoom-in-down">
            <p class="faq-question">3. How do I take care of my silver jewelry? <span class="faq-toggle">&#9662;</span>
            </p>
            <p class="faq-answer">To maintain the shine of your silver jewelry:<br>
                - Store it in an airtight container when not in use.<br>
                - Avoid contact with water, perfumes, and chemicals.<br>
                - Use a soft cloth or silver polish to clean it regularly.</p>
        </div>
        <div class="faq-item" data-aos="zoom-in-down">
            <p class="faq-question">4. Do you offer customized jewelry? <span class="faq-toggle">&#9662;</span></p>
            <p class="faq-answer">Yes! We provide customization services where you can design your own unique piece or
                engrave names, initials, or special messages. Contact our support team for more details.</p>
        </div>
        <div class="faq-item" data-aos="zoom-in-down">
            <p class="faq-question">5. How can I determine my ring size? <span class="faq-toggle">&#9662;</span></p>
            <p class="faq-answer">You can refer to our size guide available on the product page or visit a local jeweler
                for precise measurements. If you need further assistance, feel free to contact us.</p>
        </div>
    </div>
    
<?php
include './jwelry-website/includes/footer.php';
?>

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="./jwelry-website/assets/js/script.js"></script>
<!-- For scroll animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script>
    const video = document.getElementById("hero-video");
const controlButton = document.getElementById("video-control");

function toggleVideo() {
    if (video.paused) {
        video.play();
        controlButton.innerText = "Pause";
    } else {
        video.pause();
        controlButton.innerText = "Play";
    }
}

</script>
</html>