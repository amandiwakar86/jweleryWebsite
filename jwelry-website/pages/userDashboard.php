<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/user_dash_board.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playwrite+IN:wght@100..400&display=swap"
        rel="stylesheet">
    <script defer src="script.js"></script>
   <!-- For AOS Animation -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <title>User Dashboard</title>
</head>

<body>
    <!-- <header class="header">
        <marquee behavior="scroll" direction="left" id="dynamicMarquee" scrollamount="5">
            Sparkle & Save! Extra 10% OFF on Prepaid Orders - Use Code: SILVER10
        </marquee>
        <div class="navbar">
            <div class="logo"><img src="#" alt="Logo"></div>
            <div class="phone-menu" id="menu">
                <ul class="menu">
                    <li class="menu-item dropdown"><a href="#">Shop</a>
                        <ul class="DropDownMenu1 dropDownMenu">
                            <li><a href="./jwelry-website/pages/all-products.html">All Jewellery</a></li>
                            <li><a href="./jwelry-website/pages/earings.html">Earringss</a></li>
                            <li><a href="./jwelry-website/pages/neckllaces.html">Necklaces</a></li>
                            <li><a href="./jwelry-website/pages/braclets.html">Bracelets</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">Collections</a>
                        <ul class="DropDownMenu2 dropDownMenu">
                            <li><a href="./jwelry-website/pages/new_arriables.html">New Arrivals</a></li>
                            <li><a href="./jwelry-website/pages/best_sallers.html">Best Sallers</a></li>
                            <li><a href="./jwelry-website/pages/gift_ideas.html">Gift Ideas</a></li>
                            <li><a href="./jwelry-website/pages/sessonal_fabourite.html">Seasonal Fabourite</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">About Us</a>
                        <ul class="DropDownMenu3 dropDownMenu">
                            <li><a href="./jwelry-website/pages/our_story.html">Our Story</a></li>
                            <li><a href="./jwelry-website/pages/our_story.html">Mission & Values</a></li>
                            <li><a href="./jwelry-website/pages/team.html">Meat the Team</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">Customer Care</a>
                        <ul class="DropDownMenu4 dropDownMenu">
                            <li><a href="./jwelry-website/pages/contact.html">Contact Us</a></li>
                            <li><a href="./jwelry-website/pages/faqs.html">FAQs</a></li>
                            <li><a href="./jwelry-website/pages/Return_refund_policy.html">Return & Refound Policy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="./jwelry-website/pages/blogs.html">Blogs</a></li>
                </ul>
            </div>
            <div class="nav-links">
                <ul class="menu">
                    <li class="menu-item dropdown"><a href="#">Shop <i class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu1 dropDownMenu">
                            <li><a href="./jwelry-website/pages/all-products.html">All Jewellery</a></li>
                            <li><a href="./jwelry-website/pages/earings.html">Earringss</a></li>
                            <li><a href="./jwelry-website/pages/neckllaces.html">Necklaces</a></li>
                            <li><a href="./jwelry-website/pages/braclets.html">Bracelets</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">Collections <i
                                class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu2 dropDownMenu">
                            <li><a href="./jwelry-website/pages/new_arriables.html">New Arrivals</a></li>
                            <li><a href="./jwelry-website/pages/best_sallers.html">Best Sallers</a></li>
                            <li><a href="./jwelry-website/pages/gift_ideas.html">Gift Ideas</a></li>
                            <li><a href="./jwelry-website/pages/sessonal_fabourite.html">Seasonal Fabourite</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">About Us <i class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu3 dropDownMenu">
                            <li><a href="./jwelry-website/pages/our_story.html">Our Story</a></li>
                            <li><a href="./jwelry-website/pages/our_story.html">Mission & Values</a></li>
                            <li><a href="./jwelry-website/pages/team.html">Meat the Team</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="#">Customer Care <i
                                class="fa-regular fa-greater-than"></i></a>
                        <ul class="DropDownMenu4 dropDownMenu">
                            <li><a href="./jwelry-website/pages/contact.html">Contact Us</a></li>
                            <li><a href="./jwelry-website/pages/faqs.html">FAQs</a></li>
                            <li><a href="./jwelry-website/pages/Return_refund_policy.html">Return & Refound Policy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown"><a href="./jwelry-website/pages/blogs.html">Blogs</a></li>
                </ul>
            </div>
            <div class="searchBar">
                <input type="text" id="search-box" placeholder="Search for products..."
                    onkeypress="handleSearch(event)">

            </div>
            <div class="nav-icons">
                <a href="./jwelry-website/pages/userDashboard.html"> <i class="fa-solid fa-user"></i></a>
                <a href="#"> <i class="fa-solid fa-cart-shopping"></i></a>
                <div class="hamburger" id="menu-toggle">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </header> -->
    <div class="dashboard">
        <nav class="sidebar">
            <h2>Silver Shop</h2>
            <ul>
                <li><a href="./user/user-profile.php">Profile</a></li>
                <li><a href="./user/user_orders.php">Orders</a></li>
                <li><a href="./user/wishlist.php">Wishlist</a></li>
                <li><a href="#settings">Settings</a></li>
                <li><a href="../php/logout.php">Logout</a></li>
            </ul>
        </nav>
        <main class="content">
            <section id="profile" class="content-text">
                <h2>Welcome, User!</h2>
                <p>Email: user@example.com</p>
                <p>Member since: January 2024</p>
            </section>
            <section id="orders" class="content-text">
                <h2>Order History</h2>
                <ul id="order-list"></ul>
            </section>
            <section id="wishlist" class="content-text">
                <h2>Wishlist</h2>
                <ul id="wishlist-items"></ul>
            </section>
        </main>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const orders = ["Silver Ring - $50", "Silver Necklace - $120"];
            const wishlist = ["Silver Bracelet", "Silver Earrings"];

            const orderList = document.getElementById("order-list");
            orders.forEach(order => {
                const li = document.createElement("li");
                li.textContent = order;
                orderList.appendChild(li);
            });

            const wishlistItems = document.getElementById("wishlist-items");
            wishlist.forEach(item => {
                const li = document.createElement("li");
                li.textContent = item;
                wishlistItems.appendChild(li);
            });
        });
    </script>
</body>
<!-- For scroll animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>