<?php
// Automatically detect base URL
$base_url = "http://" . $_SERVER['HTTP_HOST'] . "/jweleryWebsite/jwelry-website/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <link rel="stylesheet" href="../assets/css/header.css">
    <title>Header</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    text-align: center;
    position: relative;
    background-color: #fff;
}

ul {
    list-style: none;
}

a {
    text-decoration: none;
    /* color: rgb(102, 18, 199); */
    color: rgb(95 67 67);
    font-weight: bold;
}

.header {
    width: 100%;
    height: 100px;
    position: sticky;
    top: 0;
    left: 0;
    box-shadow: 0px 0px 10px rgb(85, 85, 87);
    background-color: #fdfafa;
    z-index: 99;
}

marquee {
    font-size: 18px;
    /* font-weight: bold; */
    color: #fff;
    background: #534947;
    padding: 5px;
    width: 100%;
    display: inline-block;
}

.navbar {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    z-index: 999;
}

.login_btn {
    font-size: 16px;
    border: 1px solid black;
    padding: 3px 6px;
    border-radius: 4px;
    background-color: rgb(31, 31, 117);
    color: #fff;
}

.logo img {
    width: 100px;
}

.hamburger {
    display: none;
    width: 50px;
    height: 50px;
    align-items: center;
    justify-content: center;
    display: flex;
    flex-direction: column;
    gap: 5px;
    z-index: 999;
    /* position: absolute;
    top: 30px;
    right: 20px; */
}

.hamburger span {
    display: none;
    width: 30px;
    height: 3px;
    background-color: rgb(5, 5, 5);
}

/* Style menu bar for tablates */
#menu {
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    background-color: #d1ccccdc;
    width: 300px;
    height: 100vh;
    position: fixed;
    top: 0;
    right: -300px;
    transition: right 0.8s ease-in-out;
}

.phone-menu .menu {
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: start;
    gap: 10px;
    padding-top: 50PX;
}

.phone-menu .menu .menu-item {
    font-size: 25px;
}

.phone-menu .dropDownMenu {
    display: none;
    height: 300px;
    position: absolute;
    top: 10px;
    left: 50px;
    background-color: #fff;
    box-shadow: 0px 0px 10px #007bff;
    text-align: start;
    padding: 10px;
    border-radius: 4px;
    z-index: 9999;
}

.phone-menu .DropDownMenu1 {
    width: 150px;
    height: 170px;
}

.phone-menu .DropDownMenu2 {
    width: 200px;
    height: 170px;
}

.phone-menu .DropDownMenu3 {
    width: 200px;
    height: 140px;
}

.phone-menu .DropDownMenu4 {
    width: 230px;
    height: 140px;
}


/* style menu for big devices */
.nav-links .menu {
    display: flex;
    flex-wrap: wrap;
    /* gap: 35px; */
    justify-content: space-around;
    padding: 5px;
    gap: 5px;
}

.menu-item a {
    gap: 5;
    font-size: 20px;
    color: rgb(10 10 10);
    font-weight: bold;
    transition: all 0.2s ease;
}

.menu-item:hover .fa-regular {
    transform: rotate(90deg);
}

.menu-item {
    padding: 10px;
    position: relative;
}

.dropdown:hover .dropDownMenu {
    display: block;
}

.dropDownMenu {
    display: none;
    height: 300px;
    position: absolute;
    top: 100%;
    background-color: #fff;
    box-shadow: 0px 0px 10px #007bff;
    text-align: start;
    padding: 10px;
    border-radius: 4px;
}

.DropDownMenu1 {
    width: 150px;
    height: 170px;
}

.DropDownMenu2 {
    width: 210px;
    height: 170px;
}

.DropDownMenu3 {
    width: 200px;
    height: 140px;
}

.DropDownMenu4 {
    width: 260px;
    height: 140px;
}

.dropDownMenu li {
    padding: 10px;
}

.dropDownMenu li a {
    font-size: 16px;
    z-index: 20;
}


.dropDownMenu li:hover {
    background-color: #f8f1f1;
}

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
    border-radius: 5px;
    margin: 20px auto;
    display: block;
}

/* .search-Container input {
    width: 100%;
    padding: 5px;
    border: none;
    outline: none;
    font-size: 20px;
} */

.search-Container {
    border: 1px solid black;
    border-radius: 50px;

}

.search-Container:hover {
    border: 2px solid black;
}

.nav-icons {
    max-width: 200px;
    display: flex;
    gap: 30px;
    justify-content: space-between;
    align-items: center;
    font-size: 25px;
    padding: 10px 30px;
}





@media (min-width: 320px) and (max-width: 479px) {
    marquee {
        font-size: 12px;
    }

    .header {
        width: 100%;
        height: 75px;
    }

    /* .navbar {
        padding: 2px;
    } */

    .navbar {
        height: 40px;
    }

    .logo {
        display: none;
    }

    .phone-menu {
        display: block;
    }

    .phone-menu .menu {
        width: 100%;
    }

    .search-Container {
        height: 20px;
        min-width: 100px;
    }

    /* .search-Container input {
        width: 100%;
        height: 16px;
        font-size: 14px;
    }

    .searcher-icons {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 40px;
    } */


    .login_btn {
        font-size: 12px;
    }

    .logo {
        font-size: 20px;
    }

    #search-box {
        margin: 5px auto;
    }

    .nav-icons {
        font-size: 18px;
        width: 160px;
        gap: 6px;
    }

    .menu-item a {
        font-size: 13px;
    }

    .icon-box a {
        font-size: 13px;
    }

    .loginBtn button {
        padding: 5px 3px;
        font-size: 13px;
    }

    .search-box {
        padding: 5px;
    }

    .hamburger {
        height: 30px;
        width: 30px;
    }

    .hamburger span {
        display: block;
        width: 25px;
        height: 2px;
        background-color: rgb(5, 5, 5);
    }

    .nav-links .menu {
        display: none;
    }

    .menu-item a {
        font-size: 13px;
    }

    .icon-box a {
        font-size: 13px;
    }

    .loginBtn button {
        padding: 5px 3px;
        font-size: 13px;
    }

    .search-box {
        padding: 5px;
    }
}

@media (min-width: 480px) and (max-width: 767px) {
    marquee {
        font-size: 12px;
    }

    .logo {
        display: none;
    }

    .phone-menu {
        display: block;
    }

    .search-container {
        display: none;
    }

    .searcher-icons {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 40px;
    }

    .menu-item a {
        font-size: 20px;
    }

    .icon-box a {
        font-size: 13px;
    }

    .loginBtn button {
        padding: 5px 3px;
        font-size: 13px;
    }

    .search-box {
        padding: 5px;
    }

    .hamburger span {
        display: block;
        width: 30px;
        height: 3px;
        background-color: rgb(5, 5, 5);
    }

    .nav-links .menu {
        display: none;
    }

    .menu-item a {
        font-size: 13px;
    }

    .icon-box a {
        font-size: 13px;
    }

    .loginBtn button {
        padding: 5px 3px;
        font-size: 13px;
    }

    .search-box {
        padding: 5px;
    }
}

@media (min-width: 768px) and (max-width: 1024px) {
    .navbar {
        height: 60px;
    }

    .hamburger span {
        display: block;
        width: 30px;
        height: 3px;
        background-color: rgb(5, 5, 5);
    }

    .nav-links .menu {
        display: none;
    }

    #search-box {
        margin: 10px auto;
    }

    .menu-item a {
        font-size: 13px;
    }

    .icon-box a {
        font-size: 13px;
    }


    .loginBtn button {
        padding: 5px 3px;
        font-size: 13px;
    }

    .search-box {
        padding: 5px;
    }
}
</style>

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
                <a href="<?php echo $base_url; ?>dashboard/userDashboard.php"> <i class="fa-solid fa-user"></i></a>
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