// For top banner Messages
const messages = [
    "Gift Yourself Some shine - Flat 25% OFF on Silver Bracelets!",
    "Free Express Shipping on All Orders Above Rs.999! Limited Time Only!",
    "Trusted bt Thousands - Join Our Silver Hewelery Community!",
];

let index = 0;
const marquee = document.getElementById("dynamicMarquee");
const scrollDuration = 10; // Time for the message to scroll completely (in seconds)

function changeMarqueeText() {
    index = (index + 1) % messages.length;
    marquee.innerHTML = messages[index];
}

// Scroll event tracking
function startScroll() {
    setTimeout(() => {
        changeMarqueeText(); // Change message after full scroll
        startScroll(); // Keep the scrolling going
    }, scrollDuration * 3000); // Adjust the time for the full scroll duration
}

startScroll(); // Start scrolling and changing messages
// ---------------------------------------------------------------------------------------------
// For Hamburger Icon
document.getElementById("menu-toggle").addEventListener("click", function () {
    var menu = document.getElementById("menu");
    if (menu.style.right === "-500px" || menu.style.right === "") {
        menu.style.right = "0";
    } else {
        menu.style.right = "-500px";
    }
});
// --------------------------------------

// For Trending section to add products dynamically
// Sample trending products data
const trendingProducts = [
    { name: "Silver Bracelet", price: "\u20B9" + "1,299", image: "./jwelry-website/assets/images/trend1.jpg" },
    { name: "Elegant Ring", price: "\u20B9" + "1,999", image: "./jwelry-website/assets/images/trend2.jpg" },
    { name: "Luxury Necklace", price: "\u20B9" + "30,999", image: "./jwelry-website/assets/images/trend3.jpg" },
    { name: "Silver Earrings", price: "\u20B9" + "3,999", image: "./jwelry-website/assets/images/trend4.jpg" }
];
// Function to display trending products
function displayTrendingProducts() {
    const container = document.getElementById("products-container");
    container.innerHTML = ""; // Clear old products before adding new ones

    trendingProducts.forEach((product, index) => {
        const productDiv = document.createElement("div");
        productDiv.classList.add("product");

        productDiv.innerHTML = `
            <img src="${product.image}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p class="price">${product.price}</p>
            <button onclick="buyNow(${index})">Buy Now</button>
        `;

        container.appendChild(productDiv);
    });
}
// Function to handle "Buy Now"
function buyNow(index) {
    const selectedProduct = trendingProducts[index];
    alert(`You selected: ${selectedProduct.name} for ${selectedProduct.price}`);
    // Redirect to checkout page with product details
    window.location.href = `./jwelry-website/pages/checkout.php?name=${encodeURIComponent(selectedProduct.name)}&price=${encodeURIComponent(selectedProduct.price)}&image=${encodeURIComponent(selectedProduct.image)}`;
}

// Load products when page loads
document.addEventListener("DOMContentLoaded", displayTrendingProducts);


// Commond to add products
// trendingProducts.push({
//     name: "Silver Pendant",
//     price: "$90",
//     image: "https://via.placeholder.com/200"
// });


// FAQs section-----------------------------

document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const parent = question.parentElement;
        const answer = question.nextElementSibling;
        parent.classList.toggle('expanded');
        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
    });
});

// for checkout page

// Function to get product details from the URL
// function getQueryParams() {
//     const params = new URLSearchParams(window.location.search);
//     return {
//         name: params.get("name"),
//         price: params.get("price"),
//         image: params.get("image")
//     };
// }


// Function to update the checkout page dynamically
// function displayCheckoutProduct() {
//     const product = getQueryParams();
//     if (product.name && product.price && product.image) {
//         document.getElementById("checkout-name").textContent = product.name;
//         document.getElementById("checkout-price").textContent = product.price;
//         document.getElementById("checkout-image").src = product.image;
//     } else {
//         document.body.innerHTML = "<h2>No product selected!</h2>";
//     }
// }

// // Call the function when the checkout page loads
// document.addEventListener("DOMContentLoaded", displayCheckoutProduct);
// --------------------------------------------------------------------------------------------
// List of daily offer products


const dailyOffers = [
    { name: "Silver Bracelet", price: "\u20B9" + "1,299", image: "./jwelry-website/assets/images/offer1.jpg" },
    { name: "Luxury Necklace", price: "\u20B9" + "30,999", image: "./jwelry-website/assets/images/offer2.jpg" },
    { name: "Elegant Ring", price: "\u20B9" + "19,299", image: "./jwelry-website/assets/images/offer3.jpg" }
];

// Function to select one offer product per day
function selectDailyOffer() {
    const today = new Date().getDate(); // Get the day of the month
    const offerIndex = today % dailyOffers.length; // Select offer based on day
    return dailyOffers[offerIndex];
}

// Display the selected offer banner
function displayOfferBanner() {
    const offerProduct = selectDailyOffer();
    document.getElementById("offer-name").textContent = offerProduct.name;
    document.getElementById("offer-price").textContent = "Special Price: " + offerProduct.price;
    document.getElementById("offer-image").src = offerProduct.image;
}

// Redirect user to checkout page when they click the offer banner
function buyOfferProduct() {
    const offerProduct = selectDailyOffer();
    window.location.href = `../pages/ checkout.php?name=${encodeURIComponent(offerProduct.name)}&price=${encodeURIComponent(offerProduct.price)}&image=${encodeURIComponent(offerProduct.image)}`;
}

// Load the offer banner when the page loads
document.addEventListener("DOMContentLoaded", displayOfferBanner);

// ---------------------------------------------------------------------
// Sample Product List
const products = [
    { name: "Silver Bracelet", price: "$40", image: "https://via.placeholder.com/100" },
    { name: "Luxury Necklace", price: "$100", image: "https://via.placeholder.com/100" },
    { name: "Elegant Ring", price: "$70", image: "https://via.placeholder.com/100" },
    { name: "Silver Earrings", price: "$30", image: "https://via.placeholder.com/100" }
];

// Function to handle search when Enter is pressed
function handleSearch(event) {
    if (event.key === "Enter") {
        const searchQuery = document.getElementById("search-box").value.trim().toLowerCase();
        if (searchQuery !== "") {
            window.location.href = `./jwelry-website/pages/search.php?query=${encodeURIComponent(searchQuery)}`;
        }
    }
}
