<?php include('includes/after_login_header.php'); ?>

<!-- Custom CSS -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f7f8fa;
        margin: 0;
        padding: 0;
    }

    /* Ensure content does not overlap with the navbar */
    .wishlist-container {
        max-width: 1200px;
        margin: 80px auto 20px; /* Added top margin to avoid navbar overlap */
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .wishlist-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .wishlist-header h2 {
        font-size: 28px;
        font-weight: 600;
        color: #333;
    }

    .wishlist-header button {
        background-color: #ff9900;
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .wishlist-header button:hover {
        background-color: #e68a00;
        transform: translateY(-2px);
    }

    .wishlist-items {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .wishlist-item {
        display: flex;
        align-items: center;
        padding: 20px;
        border: 1px solid #eaeaea;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .wishlist-item:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transform: translateY(-2px);
    }

    .wishlist-item img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
        margin-right: 20px;
    }

    .wishlist-item-details {
        flex: 1;
    }

    .wishlist-item-details h3 {
        font-size: 18px;
        font-weight: 500;
        color: #333;
        margin-bottom: 8px;
    }

    .wishlist-item-details p {
        font-size: 14px;
        color: #666;
        margin-bottom: 10px;
    }

    .wishlist-item-details .price {
        font-size: 18px;
        font-weight: 600;
        color: #b12704;
    }

    .wishlist-item-actions {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .wishlist-item-actions button {
        background-color: #ff9900;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .wishlist-item-actions button:hover {
        background-color: #e68a00;
        transform: translateY(-2px);
    }

    .wishlist-item-actions .btn-remove {
        background-color: #e74c3c;
    }

    .wishlist-item-actions .btn-remove:hover {
        background-color: #c0392b;
    }

    /* Responsive Design */
    @media (max-width: 767px) {
        .wishlist-item {
            flex-direction: column;
            align-items: flex-start;
            text-align: center;
        }

        .wishlist-item img {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .wishlist-item-actions {
            width: 100%;
            justify-content: space-between;
        }

        .wishlist-header {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }

        .wishlist-header button {
            width: 100%;
        }
    }
</style>

<div class="wishlist-container">
    <div class="wishlist-header">
        <h2>My Wishlist</h2>
        <button onclick="moveAllToCart()">Move All to Cart</button>
    </div>

    <!-- Wishlist Items -->
    <div class="wishlist-items" id="wishlistItems">
        <div class="wishlist-item">
            <img src="assets/CAR1.jpg" alt="Product Image">
            <div class="wishlist-item-details">
                <h3>Product 1</h3>
                <p>Description of Product 1. This is a sample description for the product.</p>
                <p class="price">$49.99</p>
            </div>
            <div class="wishlist-item-actions">
                <button onclick="addToCart('Product 1')">Add to Cart</button>
                <button class="btn-remove" onclick="removeItem('Product 1')">Remove</button>
            </div>
        </div>

        <div class="wishlist-item">
            <img src="assets/pro1.jpeg" alt="Product Image">
            <div class="wishlist-item-details">
                <h3>Product 2</h3>
                <p>Description of Product 2. This is a sample description for the product.</p>
                <p class="price">$59.99</p>
            </div>
            <div class="wishlist-item-actions">
                <button onclick="addToCart('Product 2')">Add to Cart</button>
                <button class="btn-remove" onclick="removeItem('Product 2')">Remove</button>
            </div>
        </div>

        <div class="wishlist-item">
            <img src="assets/DEMO.jpg" alt="Product Image">
            <div class="wishlist-item-details">
                <h3>Product 3</h3>
                <p>Description of Product 3. This is a sample description for the product.</p>
                <p class="price">$69.99</p>
            </div>
            <div class="wishlist-item-actions">
                <button onclick="addToCart('Product 3')">Add to Cart</button>
                <button class="btn-remove" onclick="removeItem('Product 3')">Remove</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Interactivity -->
<script>
    function addToCart(productName) {
        alert(`Added "${productName}" to cart!`);
        // Add your logic to handle adding to cart here
    }

    function removeItem(productName) {
        if (confirm(`Are you sure you want to remove "${productName}" from your wishlist?`)) {
            alert(`Removed "${productName}" from wishlist!`);
            // Add your logic to handle removal here
        }
    }

    function moveAllToCart() {
        if (confirm("Are you sure you want to move all items to your cart?")) {
            alert("All items moved to cart!");
            // Add your logic to handle moving all items to cart here
        }
    }
</script>

<?php include('includes/footer.php'); ?>