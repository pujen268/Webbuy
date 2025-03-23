<?php include('includes/after_login_header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f7f7f7;
        }

        .product-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
        }

        .product-image img {
            width: 100%;
            border-radius: 6px;
        }

        .product-title {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .rating {
            color: #ffa41c;
        }

        .price {
            font-size: 1.6rem;
            color: #b12704;
            font-weight: bold;
        }

        .btn {
            padding: 10px 15px;
            font-size: 1rem;
            border-radius: 4px;
            transition: 0.3s;
        }

        .btn-add-to-cart {
            background: #ffa41c;
            color: #fff;
        }

        .btn-buy-now {
            background: #ff9900;
            color: #fff;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .review-card {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .review-card .user {
            font-weight: bold;
        }

        .review-card .rating {
            font-size: 0.9rem;
        }

        .review-card .comment {
            font-size: 0.9rem;
            color: #555;
        }

        .carousel-item img {
            height: 400px;
            object-fit: cover;
            border-radius: 6px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            background-color: rgba(0, 0, 0, 0.5);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
        }

        /* Fixed size for recommendation cards */
        .recommendation-card img {
            height: 200px; /* Fixed height for images */
            object-fit: cover; /* Ensures the image covers the area without distortion */
            border-radius: 6px 6px 0 0; /* Rounded corners only at the top */
        }

        .recommendation-card .card-body {
            padding: 15px;
        }

        .recommendation-card .card-title {
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .recommendation-card .price {
            font-size: 1.2rem;
            color: #b12704;
            font-weight: bold;
        }

        .recommendation-card .btn {
            font-size: 0.9rem;
            padding: 8px 12px;
        }

        /* Quantity Selector Styles */
        .quantity-selector {
            display: inline-flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
        }

        .quantity-selector button {
            background: #f8f9fa;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s;
        }

        .quantity-selector button:hover {
            background: #e9ecef;
        }

        .quantity-selector input {
            width: 50px;
            text-align: center;
            border: none;
            font-size: 1rem;
            padding: 8px;
        }

        .quantity-selector input:focus {
            outline: none;
        }
    </style>
</head>
<body>
    <!-- Product Details Section -->
    <div class="container mt-4">
        <div class="row product-container">
            <!-- Image Slider -->
            <div class="col-md-5">
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/DEMO.jpg" class="d-block w-100" alt="Product Image">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/pro1.jpeg" class="d-block w-100" alt="Product Image">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/CAR1.jpg" class="d-block w-100" alt="Product Image">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-7">
                <h2 class="product-title">Product 1</h2>
                <p class="rating">⭐ 4.5 | 152 Reviews</p>
                <p>This is a description for Product 1.</p>
                <p class="price">$20</p>
                
                <!-- Quantity Selector with + and - Buttons -->
                <label for="quantity">Quantity: </label>
                <div class="quantity-selector">
                    <button type="button" id="decrement">-</button>
                    <input type="number" id="quantity" value="1" min="1" max="10">
                    <button type="button" id="increment">+</button>
                </div>
                
                <br><br>
                <a href="cart.php?add=1" class="btn btn-add-to-cart">Add to Cart</a>
                <a href="checkout.php?buy=1" class="btn btn-buy-now">Buy Now</a>
            </div>
        </div>

        <!-- Ratings and Reviews Section -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h4>Ratings & Reviews</h4>
                <div class="review-card">
                    <div class="user">John Doe</div>
                    <div class="rating">⭐ 5</div>
                    <div class="comment">Great product!</div>
                </div>
                <div class="review-card">
                    <div class="user">Jane Smith</div>
                    <div class="rating">⭐ 4</div>
                    <div class="comment">Good quality, but could be better.</div>
                </div>
                <div class="review-card">
                    <div class="user">Alice Johnson</div>
                    <div class="rating">⭐ 3</div>
                    <div class="comment">Average product.</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recommendations Section -->
    <div class="container mt-5 mb-5">
        <h4>Customers Also Bought</h4>
        <div class="row">
            <div class="col-md-3">
                <div class="card recommendation-card">
                    <img src="assets/DEMO.jpg" class="card-img-top" alt="Recommended Product">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="price">$15</p>
                        <a href="#" class="btn btn-sm btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card recommendation-card">
                    <img src="assets/pro1.jpeg" class="card-img-top" alt="Recommended Product">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="price">$25</p>
                        <a href="#" class="btn btn-sm btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card recommendation-card">
                    <img src="assets/CAR1.jpg" class="card-img-top" alt="Recommended Product">
                    <div class="card-body">
                        <h5 class="card-title">Product 4</h5>
                        <p class="price">$30</p>
                        <a href="#" class="btn btn-sm btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card recommendation-card">
                    <img src="assets/DEMO.jpg" class="card-img-top" alt="Recommended Product">
                    <div class="card-body">
                        <h5 class="card-title">Product 5</h5>
                        <p class="price">$35</p>
                        <a href="#" class="btn btn-sm btn-primary">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- JavaScript for Quantity Buttons -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const quantityInput = document.getElementById('quantity');
            const incrementButton = document.getElementById('increment');
            const decrementButton = document.getElementById('decrement');

            // Increment quantity
            incrementButton.addEventListener('click', function () {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue < 10) {
                    quantityInput.value = currentValue + 1;
                }
            });

            // Decrement quantity
            decrementButton.addEventListener('click', function () {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });

            // Prevent manual input outside the range
            quantityInput.addEventListener('change', function () {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue < 1) quantityInput.value = 1;
                if (currentValue > 10) quantityInput.value = 10;
            });
        });
    </script>
</body>
</html>

<?php include('includes/footer.php'); ?>