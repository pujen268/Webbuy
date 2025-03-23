<?php include('includes/after_login_header.php'); ?>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    .cart-section {
        padding: 20px;
    }

    .cart-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .cart-header {
        font-size: 32px;
        font-weight: 600;
        color: #333;
        margin-bottom: 30px;
        text-align: center;
    }

    .cart-item {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        padding: 20px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
    }

    .cart-item img {
        width: 150px; /* Larger image */
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
        margin-right: 20px;
    }

    .cart-item-details {
        flex: 1;
    }

    .cart-item-title {
        font-size: 22px;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
    }

    .cart-item-description {
        font-size: 16px;
        color: #666;
        margin-bottom: 10px;
    }

    .cart-item-price {
        font-size: 18px;
        color: #007bff;
        margin-bottom: 10px;
    }

    .cart-item-quantity {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .quantity-btn {
        background: #007bff;
        color: #fff;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .quantity-btn:hover {
        background: #0056b3;
    }

    .quantity-input {
        width: 50px;
        text-align: center;
        margin: 0 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 5px;
    }

    .cart-item-remove {
        background: #ff4d4d;
        color: #fff;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .cart-item-remove:hover {
        background: #cc0000;
    }

    .cart-summary {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        padding: 20px;
        margin-top: 30px;
    }

    .cart-summary-title {
        font-size: 24px;
        font-weight: 600;
        color: #333;
        margin-bottom: 20px;
    }

    .cart-summary-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        font-size: 18px;
        color: #555;
    }

    .cart-summary-total {
        font-size: 22px;
        font-weight: 600;
        color: #333;
        margin-top: 20px;
    }
    
    .checkout-btn {
    background: #007bff;
    color: #fff;
    border: none;
    padding: 12px 24px;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    width: 100%;
    transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
    text-decoration: none; /* Remove underline from link */
    display: inline-block; /* Make it behave like a button */
    box-shadow: 0 4px 6px rgba(0, 123, 255, 0.2); /* Subtle shadow */
}

.checkout-btn:hover {
    background: #0056b3;
    transform: translateY(-2px); /* Slight lift on hover */
    box-shadow: 0 6px 12px rgba(0, 123, 255, 0.3); /* Enhanced shadow on hover */
}

.checkout-btn:active {
    background: #004080;
    transform: translateY(0); /* Reset lift on click */
    box-shadow: 0 4px 6px rgba(0, 123, 255, 0.2); /* Reset shadow on click */
}

    /* Responsive Design */
    @media (max-width: 768px) {
        .cart-item {
            flex-direction: column;
            text-align: center;
        }

        .cart-item img {
            margin-right: 0;
            margin-bottom: 15px;
        }

        .cart-item-quantity {
            justify-content: center;
        }

        .cart-summary {
            margin-top: 20px;
        }
    }
</style>

<!-- Main Content -->
<div class="cart-section">
    <div class="cart-container">
        <h1 class="cart-header">Your Cart</h1>

        <!-- Cart Items -->
        <div id="cart-items">
            <!-- Cart items will be dynamically inserted here -->
        </div>

        <!-- Cart Summary -->
        <div class="cart-summary">
            <h2 class="cart-summary-title">Order Summary</h2>
            <div class="cart-summary-item">
                <span>Subtotal</span>
                <span>$<span id="subtotal">0.00</span></span>
            </div>
            <div class="cart-summary-item">
                <span>Shipping</span>
                <span>$<span id="shipping">5.00</span></span>
            </div>
            <div class="cart-summary-total">
                <span>Total</span>
                <span>$<span id="total-price">0.00</span></span>
            </div>
            <a href="checkout.php" class="checkout-btn">Proceed to Checkout</a>
        </div>
    </div>
</div>

<!-- JavaScript for Dynamic Cart -->
<script>
    // Sample cart data (can be fetched from a backend API)
    const cartData = [
        { 
            id: 1, 
            name: "Wireless Headphones", 
            description: "High-quality wireless headphones with noise cancellation.", 
            price: 99.99, 
            image: "assets/DEMO.jpg", 
            quantity: 1 
        },
        { 
            id: 2, 
            name: "Smartwatch", 
            description: "Latest smartwatch with fitness tracking and heart rate monitor.", 
            price: 149.99, 
            image: "assets/pro1.jpeg", 
            quantity: 1 
        },
        { 
            id: 3, 
            name: "Bluetooth Speaker", 
            description: "Portable Bluetooth speaker with 20-hour battery life.", 
            price: 59.99, 
            image: "assets/CAR1.jpg", 
            quantity: 1 
        },
    ];

    // Function to render cart items
    function renderCart() {
        const cartItemsContainer = document.getElementById('cart-items');
        cartItemsContainer.innerHTML = '';

        let subtotal = 0;

        cartData.forEach(item => {
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;

            const cartItem = `
                <div class="cart-item">
                    <img src="${item.image}" alt="${item.name}">
                    <div class="cart-item-details">
                        <div class="cart-item-title">${item.name}</div>
                        <div class="cart-item-description">${item.description}</div>
                        <div class="cart-item-price">$${item.price.toFixed(2)}</div>
                        <div class="cart-item-quantity">
                            <button class="quantity-btn" onclick="updateQuantity(${item.id}, -1)">-</button>
                            <input type="text" class="quantity-input" value="${item.quantity}" readonly>
                            <button class="quantity-btn" onclick="updateQuantity(${item.id}, 1)">+</button>
                        </div>
                        <button class="cart-item-remove" onclick="removeItem(${item.id})">Remove</button>
                    </div>
                </div>
            `;
            cartItemsContainer.innerHTML += cartItem;
        });

        // Update summary
        const shipping = 5.00;
        const total = (subtotal + shipping).toFixed(2);

        document.getElementById('subtotal').textContent = subtotal.toFixed(2);
        document.getElementById('total-price').textContent = total;
    }

    // Function to update quantity
    function updateQuantity(itemId, change) {
        const item = cartData.find(item => item.id === itemId);
        if (item) {
            item.quantity += change;
            if (item.quantity < 1) item.quantity = 1; // Prevent quantity from going below 1
            renderCart();
        }
    }

    // Function to remove item
    function removeItem(itemId) {
        const index = cartData.findIndex(item => item.id === itemId);
        if (index !== -1) {
            cartData.splice(index, 1);
            renderCart();
        }
    }

    // Initial render
    renderCart();
</script>

<?php include('includes/footer.php'); ?>