<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/faqs.css">
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
</head>
<body>
    <header class="header">
        <marquee behavior="scroll" direction="left" id="dynamicMarquee" scrollamount="5">
            Sparkle & Save! Extra 10% OFF on Prepaid Orders - Use Code: SILVER10
        </marquee>
        <div class="navbar">
            <div class="logo"><img src="#" alt="Logo"></div>
            <div class="phone-menu" id="menu">
                <ul class="menu">
                    <li class="menu-item dropdown"><a href="#">Shop</a>
                        <ul class="DropDownMenu1 dropDownMenu">
                            <li><a href="./all-products.php">All Jewellery</a></li>
                            <li><a href="./earings.php">Earringss</a></li>
                            <li><a href="./neckllaces.php">Necklaces</a></li>
                            <li><a href="./braclets.php">Bracelets</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">Collections</a>
                        <ul class="DropDownMenu2 dropDownMenu">
                            <li><a href="./new_arriables.php">New Arrivals</a></li>
                            <li><a href="./best_sallers.php">Best Sallers</a></li>
                            <li><a href="./gift_ideas.php">Gift Ideas</a></li>
                            <li><a href="./sessonal_fabourite.php">Seasonal Fabourite</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">About Us</a>
                        <ul class="DropDownMenu3 dropDownMenu">
                            <li><a href="./our_story.php">Our Story</a></li>
                            <li><a href="./our_story.php">Mission & Values</a></li>
                            <li><a href="./team.php">Meat the Team</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">Customer Care</a>
                        <ul class="DropDownMenu4 dropDownMenu">
                            <li><a href="./contact.php">Contact Us</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="./Return_refund_policy.php">Return & Refound Policy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="./blogs.php">Blogs</a></li>
                </ul>
            </div>
            <div class="nav-links">
                <ul class="menu">
                    <li class="menu-item dropdown"><a href="#">Shop <i class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu1 dropDownMenu">
                            <li><a href="./all-products.php">All Jewellery</a></li>
                            <li><a href="./earings.php">Earringss</a></li>
                            <li><a href="./neckllaces.php">Necklaces</a></li>
                            <li><a href="./braclets.php">Bracelets</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">Collections <i
                                class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu2 dropDownMenu">
                            <li><a href="./new_arriables.php">New Arrivals</a></li>
                            <li><a href="./best_sallers.php">Best Sallers</a></li>
                            <li><a href="./gift_ideas.php">Gift Ideas</a></li>
                            <li><a href="./sessonal_fabourite.php">Seasonal Fabourite</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">About Us <i class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu3 dropDownMenu">
                            <li><a href="./our_story.php">Our Story</a></li>
                            <li><a href="./our_story.php">Mission & Values</a></li>
                            <li><a href="./team.php">Meat the Team</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">Customer Care <i
                                class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu4 dropDownMenu">
                            <li><a href="./contact.php">Contact Us</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="./Return_refund_policy.php">Return & Refound Policy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="./blogs.php">Blogs</a></li>
                </ul>
            </div>
            <div class="searchBar">
                <input type="text" id="search-box" placeholder="Search for products..."
                    onkeypress="handleSearch(event)">

            </div>
            <div class="nav-icons">
                <a href="./userDashboard.php"> <i class="fa-solid fa-user"></i></a>
                <a href="#"> <i class="fa-solid fa-cart-shopping"></i></a>
                <div class="hamburger" id="menu-toggle">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </header>
    <div class="faq-container">
        <h2 class="faq-header">Frequently Asked Questions</h2>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>What services do you offer? <span>+</span></h3>
            <p>We offer a range of services including web development, mobile app development, and digital marketing.</p>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>How can I contact customer support? <span>+</span></h3>
            <p>You can reach us via email at support@example.com or call us at (123) 456-7890.</p>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>What is your refund policy? <span>+</span></h3>
            <p>We offer a 30-day money-back guarantee on all our services.</p>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>What is your refund policy? <span>+</span></h3>
            <p>We offer a 30-day money-back guarantee on all our services.</p>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>What is your refund policy? <span>+</span></h3>
            <p>We offer a 30-day money-back guarantee on all our services.</p>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>What is your refund policy? <span>+</span></h3>
            <p>We offer a 30-day money-back guarantee on all our services.</p>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>What is your refund policy? <span>+</span></h3>
            <p>We offer a 30-day money-back guarantee on all our services.</p>
        </div>
        <div class="faq-item" onclick="toggleFAQ(this)" data-aos="zoom-in-down">
            <h3>What is your refund policy? <span>+</span></h3>
            <p>We offer a 30-day money-back guarantee on all our services.</p>
        </div>
        

    </div>
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

    
    <script>
        function toggleFAQ(element) {
            element.classList.toggle("active");
            let span = element.querySelector("h3 span");
            span.textContent = element.classList.contains("active") ? "-" : "+";
        }
    </script>
</body>
<!-- For scroll animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- Main Js -->
 <script src="../assets/js/script.js"></script>
</html>
