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

    <?php
include '../includes/footer.php'; 
?>

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