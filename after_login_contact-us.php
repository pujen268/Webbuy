<?php include('includes/after_login_header.php'); ?>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to right, #eef2f3, #dfe9f3);
    }

    .contact-section {
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

    .contact-info,
    .contact-form {
        background-color: #fff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .contact-info:hover,
    .contact-form:hover {
        transform: translateY(-5px);
    }

    .contact-info h4,
    .contact-form h4 {
        font-size: 22px;
        font-weight: 600;
        color: #343a40;
    }

    .btn-primary {
        background: linear-gradient(45deg, #007bff, #0056b3);
        border: none;
        transition: background 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, #0056b3, #007bff);
    }
</style>

<!-- Main Content -->
<div class="container contact-section">
    <h2 class="text-center">Contact Us</h2>

    <div class="row mb-4">
        <div class="col-md-6 contact-info">
            <h4>Contact Information</h4>
            <p>If you have any questions, feel free to reach out to us.</p>
            <ul class="list-unstyled">
                <li><strong>Email:</strong> support@webbuy.com</li>
                <li><strong>Phone:</strong> +1 800-123-4567</li>
                <li><strong>Address:</strong> 1234 Shopping St, Cityville, ST 56789</li>
            </ul>
            <h5>Our Working Hours:</h5>
            <ul class="list-unstyled">
                <li>Monday to Friday: 9:00 AM - 6:00 PM</li>
                <li>Saturday: 10:00 AM - 4:00 PM</li>
                <li>Sunday: Closed</li>
            </ul>
            <h4>Find Us on the Map</h4>
            <iframe src="https://www.google.com/maps/embed?..." width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="col-md-6 contact-form">
            <h4>Contact Form</h4>
            <p>Send us a message, and we'll get back to you soon.</p>
            <form method="POST" action="contact-us.php" id="contactForm">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" data-validation="required alpha">
                    <div class="invalid-feedback" id="nameError"></div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" data-validation="required email">
                    <div class="invalid-feedback" id="emailError"></div>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" data-validation="required min:10"></textarea>
                    <div class="invalid-feedback" id="messageError"></div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>

        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>