<?php include('includes/header.php'); ?>

<!-- Custom CSS -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to right, #eef2f3, #dfe9f3);
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .hero-section {
        background: url('assets/bgdemo1.jpg') center/cover no-repeat;
        height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #2c3e50;
        position: relative;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4); /* Dark overlay for better text visibility */
    }

    .hero-content {
        position: relative;
        z-index: 1;
    }

    .hero-content h1 {
        font-size: 56px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #fff;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
    }

    .hero-content p {
        font-size: 22px;
        max-width: 700px;
        margin: 0 auto 30px auto;
        color: #f0f0f0;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
    }

    .btn-primary {
        font-size: 18px;
        padding: 12px 24px;
        border-radius: 30px;
        background: linear-gradient(to right, #007bff, #0056b3);
        color: white;
        text-transform: uppercase;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        border: none;
        cursor: pointer;
    }

    .btn-primary:hover {
        background: linear-gradient(to right, #0056b3, #007bff);
        transform: scale(1.05);
    }

    .features-section {
        text-align: center;
        padding: 80px 20px;
        background-color: #ffffff;
    }

    .features-section h2 {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #2c3e50;
    }

    .features-section p {
        font-size: 18px;
        color: #555;
        max-width: 800px;
        margin: 0 auto 40px auto;
    }

    .feature-cards {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .feature-card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding: 30px;
        max-width: 300px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-10px);
    }

    .feature-card i {
        font-size: 40px;
        color: #007bff;
        margin-bottom: 20px;
    }

    .feature-card h3 {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 15px;
        color: #2c3e50;
    }

    .feature-card p {
        font-size: 16px;
        color: #666;
    }

    .testimonials-section {
        text-align: center;
        padding: 80px 20px;
        background: linear-gradient(to right, #f9f9f9, #e3e7ea);
    }

    .testimonials-section h2 {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 40px;
        color: #2c3e50;
    }

    .testimonial-cards {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .testimonial-card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding: 30px;
        max-width: 300px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-10px);
    }

    .testimonial-card img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-bottom: 20px;
    }

    .testimonial-card p {
        font-size: 16px;
        color: #555;
        margin-bottom: 15px;
    }

    .testimonial-card h4 {
        font-size: 18px;
        font-weight: 600;
        color: #007bff;
    }

    .cta-section {
        text-align: center;
        padding: 80px 20px;
        background: #007bff;
        color: white;
    }

    .cta-section h2 {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .cta-section p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .btn-secondary {
        font-size: 18px;
        padding: 12px 24px;
        border-radius: 30px;
        background: white;
        color: #007bff;
        text-transform: uppercase;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        border: none;
        cursor: pointer;
    }

    .btn-secondary:hover {
        background: #0056b3;
        color: white;
    }
</style>

<!-- Hero Section -->
<div class="hero-section">
    <div class="hero-content">
        <h1>Welcome Back to WebBuy!</h1>
        <p>Explore the latest deals and products tailored just for you.</p>
        <a href="gallery.php" class="btn-primary">Continue Shopping</a>
    </div>
</div>

<!-- Features Section -->
<div class="features-section">
    <h2>Exclusive Benefits for Members</h2>
    <p>Get access to special discounts, fast delivery, and personalized recommendations.</p>
    <div class="feature-cards">
        <div class="feature-card">
            <i class="fas fa-tags"></i>
            <h3>Exclusive Discounts</h3>
            <p>Enjoy member-only discounts on a wide range of products.</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-shipping-fast"></i>
            <h3>Fast Delivery</h3>
            <p>Get your orders delivered quickly and reliably.</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-user-cog"></i>
            <h3>Personalized Service</h3>
            <p>Receive recommendations tailored to your preferences.</p>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="testimonials-section">
    <h2>What Our Customers Say</h2>
    <div class="testimonial-cards">
        <div class="testimonial-card">
            <img src="assets/user1.jpg" alt="User 1">
            <p>"WebBuy has transformed my shopping experience. Fast delivery and great products!"</p>
            <h4>Alex J.</h4>
        </div>
        <div class="testimonial-card">
            <img src="assets/user2.jpg" alt="User 2">
            <p>"Amazing deals and customer service. Highly recommend WebBuy!"</p>
            <h4>Sarah M.</h4>
        </div>
        <div class="testimonial-card">
            <img src="assets/user3.jpg" alt="User 3">
            <p>"The best online shopping platform I've ever used. Love the discounts!"</p>
            <h4>John D.</h4>
        </div>
    </div>
</div>

<!-- Call to Action Section -->
<div class="cta-section">
    <h2>Ready to Discover More?</h2>
    <p>Join thousands of happy shoppers and enjoy exclusive offers today!</p>
    <a href="signup.php" class="btn-secondary">Join Now</a>
</div>

<?php include('includes/footer.php'); ?>