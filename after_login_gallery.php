<?php include('includes/after_login_header.php'); ?>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #f7f8fa;
    }

    .gallery-section {
        padding: 60px 0;
    }

    .gallery-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .gallery-header h2 {
        font-size: 40px;
        color: #343a40;
        font-weight: 600;
    }

    .search-filter {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-bottom: 30px;
        padding: 0 20px;
    }

    .search-bar {
        width: 400px;
        margin-left: auto;
    }

    .search-bar .form-control {
        border-radius: 0;
    }

    .search-bar .btn {
        border-radius: 0;
    }

    .filter-options {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .filter-options select {
        padding: 8px 12px;
        border-radius: 5px;
        border: 1px solid #ddd;
        font-size: 14px;
        background: #fff;
        cursor: pointer;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 0 20px;
    }

    .gallery-item {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .gallery-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .gallery-info {
        padding: 20px;
        text-align: center;
    }

    .gallery-info h5 {
        font-size: 18px;
        font-weight: 600;
        color: #343a40;
        margin-bottom: 10px;
    }

    .gallery-info p {
        font-size: 16px;
        color: #6c757d;
        margin-bottom: 15px;
    }

    .btn-view {
        background: #007bff;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    .btn-view:hover {
        background: #0056b3;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }

    .pagination a {
        color: #007bff;
        padding: 8px 16px;
        text-decoration: none;
        border: 1px solid #ddd;
        margin: 0 4px;
        border-radius: 5px;
    }

    .pagination a.active {
        background: #007bff;
        color: #fff;
    }
</style>

<div class="container gallery-section">
    <!-- Gallery Header -->
    <div class="gallery-header">
        <h2>Product Gallery</h2>
    </div>

    <!-- Search and Filter Section -->
    <div class="search-filter">
        <!-- Search Bar -->
        <div class="search-bar">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search products..." aria-label="Search">
                <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

        <!-- Filter Options -->
        <div class="filter-options">
            <select>
                <option value="">All Categories</option>
                <option value="electronics">Electronics</option>
                <option value="clothing">Clothing</option>
                <option value="accessories">Accessories</option>
                <option value="home">Home & Kitchen</option>
            </select>
            <select>
                <option value="">Price Range</option>
                <option value="0-50">$0 - $50</option>
                <option value="50-100">$50 - $100</option>
                <option value="100+">$100+</option>
            </select>
            <select>
                <option value="">Sort By</option>
                <option value="price-low">Price: Low to High</option>
                <option value="price-high">Price: High to Low</option>
                <option value="popularity">Popularity</option>
            </select>
        </div>
    </div>

    <!-- Product Grid -->
    <div class="gallery-grid">
        <!-- Product 1 -->
        <div class="gallery-item">
            <img src="assets/pro1.jpeg" alt="Product 1">
            <div class="gallery-info">
                <h5>Product 1</h5>
                <p>$20</p>
                <a href="product-detail.php?id=1" class="btn-view">View Details</a>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="gallery-item">
            <img src="assets/DEMO.jpg" alt="Product 2">
            <div class="gallery-info">
                <h5>Product 2</h5>
                <p>$30</p>
                <a href="product-detail.php?id=2" class="btn-view">View Details</a>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="gallery-item">
            <img src="assets/DEMO.jpg" alt="Product 2">
            <div class="gallery-info">
                <h5>Product 2</h5>
                <p>$30</p>
                <a href="product-detail.php?id=2" class="btn-view">View Details</a>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="gallery-item">
            <img src="assets/DEMO.jpg" alt="Product 2">
            <div class="gallery-info">
                <h5>Product 2</h5>
                <p>$30</p>
                <a href="product-detail.php?id=2" class="btn-view">View Details</a>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="gallery-item">
            <img src="assets/DEMO.jpg" alt="Product 2">
            <div class="gallery-info">
                <h5>Product 2</h5>
                <p>$30</p>
                <a href="product-detail.php?id=2" class="btn-view">View Details</a>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="gallery-item">
            <img src="assets/DEMO.jpg" alt="Product 2">
            <div class="gallery-info">
                <h5>Product 2</h5>
                <p>$30</p>
                <a href="product-detail.php?id=2" class="btn-view">View Details</a>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="gallery-item">
            <img src="assets/DEMO.jpg" alt="Product 2">
            <div class="gallery-info">
                <h5>Product 2</h5>
                <p>$30</p>
                <a href="product-detail.php?id=2" class="btn-view">View Details</a>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="gallery-item">
            <img src="assets/DEMO.jpg" alt="Product 2">
            <div class="gallery-info">
                <h5>Product 2</h5>
                <p>$30</p>
                <a href="product-detail.php?id=2" class="btn-view">View Details</a>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="gallery-item">
            <img src="assets/DEMO.jpg" alt="Product 2">
            <div class="gallery-info">
                <h5>Product 2</h5>
                <p>$30</p>
                <a href="product-detail.php?id=2" class="btn-view">View Details</a>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="gallery-item">
            <img src="assets/DEMO.jpg" alt="Product 2">
            <div class="gallery-info">
                <h5>Product 2</h5>
                <p>$30</p>
                <a href="product-detail.php?id=2" class="btn-view">View Details</a>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="gallery-item">
            <img src="assets/DEMO.jpg" alt="Product 2">
            <div class="gallery-info">
                <h5>Product 2</h5>
                <p>$30</p>
                <a href="product-detail.php?id=2" class="btn-view">View Details</a>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="gallery-item">
            <img src="assets/DEMO.jpg" alt="Product 2">
            <div class="gallery-info">
                <h5>Product 2</h5>
                <p>$30</p>
                <a href="product-detail.php?id=2" class="btn-view">View Details</a>
            </div>
        </div>

        <!-- Add more products as needed -->
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
    </div>
</div>

<?php include('includes/footer.php'); ?>