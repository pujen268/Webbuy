<?php include('includes/header.php'); ?>

<!-- Custom CSS (same as sign-up page) -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to right, #eef2f3, #dfe9f3);
    }

    .fade-in {
        opacity: 0;
        animation: fadeIn 1s forwards;
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    .form-container {
        background: rgba(255, 255, 255, 0.7);
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 0 auto;
    }

    .form-control {
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        max-width: 100%;
    }

    .form-control:focus {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        border-color: #007bff;
    }

    .invalid-feedback {
        font-size: 0.9rem;
        color: #e74c3c;
    }

    @media (max-width: 767px) {
        .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .btn {
            width: 100%;
            margin-top: 10px;
        }

        .form-control {
            width: 100%;
        }
    }
</style>

<div class="container mt-5 fade-in">
    <h2 class="text-center mb-4">Forgot Password</h2>

    <!-- Form container -->
    <div class="form-container">
        <!-- Start of Forgot Password Form -->
        <form method="POST" action="send-reset-link.php" id="forgotPasswordForm">
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" data-validation="required email">
                <div class="invalid-feedback" id="emailError"></div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg">Send Reset Link</button>
        </form>
    </div>

    <hr>

    <!-- Links to Change Password and Sign Up -->
    <p class="text-center">
        Already have a reset link? <a href="change-password.php">Change your password here</a>.
        <br>
        Don't have an account? <a href="sign-up.php">Sign up here</a>.
    </p>
</div>

<?php include('includes/footer.php'); ?>