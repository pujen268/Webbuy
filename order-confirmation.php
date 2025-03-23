<?php include('includes/after_login_header.php'); ?>

<!-- Custom CSS -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f3f3f3;
    }

    .confirmation-container {
        max-width: 900px;
        margin: 50px auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .confirmation-header {
        text-align: center;
    }

    .confirmation-header h2 {
        color: #008000;
        font-size: 28px;
        font-weight: 600;
    }

    .confirmation-header p {
        font-size: 18px;
        color: #333;
    }

    .order-details, .order-summary {
        padding: 20px;
        background-color: #f8f8f8;
        border-radius: 8px;
        margin-top: 20px;
    }

    .order-details h4, .order-summary h4 {
        font-size: 20px;
        font-weight: bold;
        color: #111;
        margin-bottom: 15px;
    }

    .table th, .table td {
        padding: 10px;
        font-size: 16px;
    }

    .total-price {
        font-size: 18px;
        font-weight: bold;
        color: #b12704;
    }

    .btn-primary, .btn-success {
        font-size: 18px;
        font-weight: bold;
        border-radius: 6px;
        padding: 12px;
        width: 100%;
    }

    .btn-primary {
        background-color: #ffd814;
        border: none;
        color: #111;
    }

    .btn-primary:hover {
        background-color: #f7ca00;
    }

    .btn-success {
        background-color: #008000;
        border: none;
    }

    .btn-success:hover {
        background-color: #006400;
    }

    @media (max-width: 767px) {
        .btn {
            width: 100%;
            margin-bottom: 10px;
        }
    }
</style>

<div class="container confirmation-container">
    
    <!-- Confirmation Header -->
    <div class="confirmation-header">
        <h2>Thank you for your order!</h2>
        <p>Your order has been placed successfully. A confirmation email has been sent to <strong><?php echo htmlspecialchars($_POST['email'] ?? ''); ?></strong>.</p>
    </div>

    <!-- Order Details -->
    <div class="order-details">
        <h4>Order Details</h4>
        <table class="table">
            <tr>
                <th>Order Number:</th>
                <td>#<?php echo rand(100000, 999999); ?></td> <!-- Simulated Order Number -->
            </tr>
            <tr>
                <th>Name:</th>
                <td><?php echo htmlspecialchars($_POST['fullName'] ?? 'John Doe'); ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo htmlspecialchars($_POST['email'] ?? 'johndoe@example.com'); ?></td>
            </tr>
            <tr>
                <th>Shipping Address:</th>
                <td><?php echo htmlspecialchars($_POST['address'] ?? '1234 Elm Street, Springfield, IL 62701'); ?></td>
            </tr>
            <tr>
                <th>Payment Method:</th>
                <td><?php echo htmlspecialchars($_POST['paymentMethod'] ?? 'Credit Card'); ?></td>
            </tr>
        </table>
    </div>

    <!-- Order Summary -->
    <div class="order-summary">
        <h4>Order Summary</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Product 1</td> 
                    <td>$20.00</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td class="total-price"><strong>$20.00</strong></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Action Buttons -->
    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-success">Continue Shopping</a>
        <a href="order-history.php" class="btn btn-primary mt-2">View Order History</a>
    </div>

</div>

<?php include('includes/footer.php'); ?>
