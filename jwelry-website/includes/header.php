<?php
// Automatically detect base URL
$base_url = "http://" . $_SERVER['HTTP_HOST'] . "/jweleryWebsite/jwelry-website/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/header.css">
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
    <title>Header</title>
</head>

<body>
    <header class="header">
        <marquee behavior="scroll" direction="left" id="dynamicMarquee" scrollamount="5">
            Sparkle & Save! Extra 10% OFF on Prepaid Orders - Use Code: SILVER10
        </marquee>
        <div class="navbar">
            <div class="logo">Sinjhini.com</div>
            <!-- <div class="logo"><img src="./jwelry-website/assets/images/logo.jpg" alt="Logo"></div> -->
            <div class="phone-menu" id="menu">
                <ul class="menu">
                    <li class="menu-item dropdown"><a href="#">Shop</a>
                        <ul class="DropDownMenu1 dropDownMenu">
                            <li><a href="<?php echo $base_url; ?>pages/all-products.php">All Jewellery</a></li>
                            <li><a href=<?php echo $base_url; ?>pages/earings.php">Earringss</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/neckllaces.php">Necklaces</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/braclets.php">Bracelets</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">Collections</a>
                        <ul class="DropDownMenu2 dropDownMenu">
                            <li><a href="<?php echo $base_url; ?>pages/new_arriables.php">New Arrivals</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/best_sallers.php">Best Sallers</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/gift_ideas.php">Gift Ideas</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/sessonal_fabourite.php">Seasonal Fabourite</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">About Us</a>
                        <ul class="DropDownMenu3 dropDownMenu">
                            <li><a href="<?php echo $base_url; ?>pages/our_story.php">Our Story</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/our_story.php">Mission & Values</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/team.php">Meat the Team</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">Customer Care</a>
                        <ul class="DropDownMenu4 dropDownMenu">
                            <li><a href="<?php echo $base_url; ?>pages/contact.php">Contact Us</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/faqs.php">FAQs</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/Return_refund_policy.php">Return & Refound Policy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="<?php echo $base_url; ?>pages/blogs.php">Blogs</a></li>
                </ul>
            </div>
            <div class="nav-links">
                <ul class="menu">
                    <li class="menu-item dropdown"><a href="#">Shop <i class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu1 dropDownMenu">
                            <li><a href="<?php echo $base_url; ?>pages/all-products.php">All Jewellery</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/earings.php">Earringss</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/neckllaces.php">Necklaces</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/braclets.php">Bracelets</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">Collections <i
                                class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu2 dropDownMenu">
                            <li><a href="<?php echo $base_url; ?>pages/new_arriables.php">New Arrivals</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/best_sallers.php">Best Sallers</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/gift_ideas.php">Gift Ideas</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/sessonal_fabourite.php">Seasonal Fabourite</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">About Us <i class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu3 dropDownMenu">
                            <li><a href="<?php echo $base_url; ?>pages/our_story.php">Our Story</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/our_story.php">Mission & Values</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/team.php">Meat the Team</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">Customer Care <i
                                class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu4 dropDownMenu">
                            <li><a href="<?php echo $base_url; ?>pages/contact.php">Contact Us</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/faqs.php">FAQs</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/Return_refund_policy.php">Return & Refound Policy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="<?php echo $base_url; ?>pages/blogs.php">Blogs</a></li>
                </ul>
            </div>
            <div class="searchBar">
                <input type="text" id="search-box" placeholder="Search for products..."
                    onkeypress="handleSearch(event)">
            </div>
            <div class="nav-icons">
                <a href="<?php echo $base_url; ?>pages/userDashboard.php"> <i class="fa-solid fa-user"></i></a>
                <a href="<?php echo $base_url; ?>pages/cart.php"> <i class="fa-solid fa-cart-shopping"></i></a>
                <!-- <a href="./jwelry-website/pages/login.php" class="login_btn">Login</a> -->
                <div class="hamburger" id="menu-toggle">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </header>
</body>
<script src="../assets/js/header.js"></script>

</html>