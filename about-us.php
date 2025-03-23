<?php include('includes/header.php'); ?>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to right, #eef2f3, #dfe9f3);
    }

    .about-us-section {
        background-color: #f8f9fa;
        padding: 60px 0;
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .about-us-content {
        text-align: center;
        margin-bottom: 30px;
        animation: slideUp 1s ease-in-out;
    }

    @keyframes slideUp {
        from {
            transform: translateY(30px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .about-us-content h2 {
        font-size: 40px;
        color: #343a40;
        font-weight: 600;
    }

    .about-us-content p {
        font-size: 18px;
        color: #6c757d;
    }

    .about-us-image {
        text-align: center;
        margin-bottom: 40px;
    }

    .about-us-image img {
        max-width: 75%;
        height: auto;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease-in-out;
    }

    .about-us-image img:hover {
        transform: scale(1.05);
    }

    .about-us-values {
        background-color: #fff;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        transition: transform 0.3s ease-in-out;
    }

    .about-us-values:hover {
        transform: translateY(-5px);
    }

    .about-us-values h3 {
        font-size: 30px;
        color: #343a40;
        font-weight: 600;
    }

    .about-us-values p,
    .about-us-values ul {
        font-size: 18px;
        color: #6c757d;
    }
</style>

<!-- Main Content -->
<div class="container about-us-section">
    <div class="row">
        <div class="col-md-12 about-us-content">
            <h2>About Us</h2>
            <p>At WebBuy, we are passionate about providing our customers with the best products at affordable prices. Our mission is to create an exceptional shopping experience with top-notch quality, affordability, and innovation.</p>
        </div>
    </div>

    <!-- Our Story Section -->
    <div class="row align-items-center">
        <div class="col-md-6 about-us-image">
            <img src="assets/DEMO.jpg" alt="About Us Image" />
        </div>
        <div class="col-md-6 about-us-values">
            <h3>Our Story</h3>
            <p>Founded in 2023, WebBuy started with a simple idea — to provide customers with a one-stop online shop for a wide range of products. We believe in making online shopping easy, fast, and secure.</p>
        </div>
    </div>

    <!-- Our Values Section -->
    <div class="row mt-5">
        <div class="col-md-12 about-us-values">
            <h3>Our Values</h3>
            <ul>
                <li><strong>Customer-Centric:</strong> We prioritize our customers and their needs above all else.</li>
                <li><strong>Quality Assurance:</strong> We carefully curate our product range to ensure only the best.</li>
                <li><strong>Affordable Pricing:</strong> Our aim is to bring you excellent products at the best prices.</li>
                <li><strong>Reliable Service:</strong> From browsing to delivery, we ensure a smooth shopping experience.</li>
                <li><strong>Innovation:</strong> We stay ahead of trends, bringing you the latest products and technology.</li>
            </ul>
        </div>
    </div>

    <!-- Contact Us Section -->
    <div class="row mt-5">
        <div class="col-md-12 about-us-content">
            <h3>Get in Touch</h3>
            <p>We love hearing from our customers! Whether you have a question, suggestion, or just want to say hi, feel free to reach out to us. Our customer service team is always here to help!</p>
            <a href="contact-us.php" class="btn btn-primary">Contact Us</a>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>