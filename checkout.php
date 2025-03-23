<?php include('includes/after_login_header.php'); ?>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to right, #eef2f3, #dfe9f3);
    }

    .checkout-section {
        padding: 60px 0;
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .billing-info {
        background-color: #fff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .billing-info:hover { transform: translateY(-5px); }
    .billing-info h3 { font-size: 22px; font-weight: 600; color: #343a40; }
    .btn-primary {
        background: linear-gradient(45deg, #007bff, #0056b3);
        border: none;
        transition: background 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, #0056b3, #007bff);
    }

    .error { color: red; font-size: 14px; display: none; }
    .hidden { display: none; opacity: 0; transition: opacity 0.5s ease-in-out; }
    .show { display: block; opacity: 1; }
</style>

<!-- Main Content -->
<div class="container checkout-section">
    <h2 class="text-center">Checkout</h2>

    <!-- Billing Information Form -->
    <div class="billing-info">
        <h3>Billing Information</h3>
        <form method="POST" action="order-confirmation.php" id="checkoutForm">
            <!-- Full Name -->
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" data-validation="required alpha" placeholder="John Doe">
                <span id="fullNameError" class="error">Full Name is required</span>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" data-validation="required email" placeholder="john.doe@example.com">
                <span id="emailError" class="error">Valid Email is required</span>
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label for="address" class="form-label">Shipping Address</label>
                <textarea class="form-control" id="address" name="address" rows="4" data-validation="required" placeholder="123 Main St, Apt 4B, Springfield, IL, 62701"></textarea>
                <span id="addressError" class="error">Address is required</span>
            </div>

            <!-- Payment Method -->
            <div class="mb-3">
                <label for="paymentMethod" class="form-label">Payment Method</label>
                <select class="form-select" id="paymentMethod" name="paymentMethod" data-validation="required">
                    <option value="">Select Payment Method</option>
                    <option value="creditCard">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bankTransfer">Bank Transfer</option>
                    <option value="googlePay">Google Pay</option>
                    <option value="applePay">Apple Pay</option>
                    <option value="cod">Cash on Delivery</option>
                    <option value="crypto">Cryptocurrency</option>
                </select>
                <span id="paymentMethodError" class="error">Payment Method is required</span>
            </div>

            <!-- Credit Card Fields -->
            <div id="creditCardFields" class="hidden">
                <h4>Credit Card Details</h4>
                <div class="mb-3">
                    <label for="cardNumber" class="form-label">Card Number</label>
                    <input type="text" class="form-control" id="cardNumber" name="cardNumber" data-validation="required numeric min:16 max:16" placeholder="1234 5678 9012 3456">
                    <span id="cardNumberError" class="error">16-digit Card Number is required</span>
                </div>
                <div class="mb-3">
                    <label for="expiryDate" class="form-label">Expiry Date</label>
                    <input type="month" class="form-control" id="expiryDate" name="expiryDate" data-validation="required" placeholder="MM/YYYY">
                    <span id="expiryDateError" class="error">Expiry Date is required</span>
                </div>
                <div class="mb-3">
                    <label for="cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cvv" name="cvv" data-validation="required numeric min:3 max:3" placeholder="123">
                    <span id="cvvError" class="error">3-digit CVV is required</span>
                </div>
            </div>

            <!-- PayPal Fields -->
            <div id="paypalFields" class="hidden">
                <h4>PayPal Payment</h4>
                <div class="mb-3">
                    <label for="paypalEmail" class="form-label">PayPal Email</label>
                    <input type="email" class="form-control" id="paypalEmail" name="paypalEmail" data-validation="required email" placeholder="john.doe@example.com">
                    <span id="paypalEmailError" class="error">Valid PayPal Email is required</span>
                </div>
            </div>

            <!-- Bank Transfer Fields -->
            <div id="bankTransferFields" class="hidden">
                <h4>Bank Transfer Details</h4>
                <div class="mb-3">
                    <label for="bankName" class="form-label">Bank Name</label>
                    <input type="text" class="form-control" id="bankName" name="bankName" data-validation="required alpha" placeholder="Example Bank">
                    <span id="bankNameError" class="error">Bank Name is required</span>
                </div>
                <div class="mb-3">
                    <label for="accountNumber" class="form-label">Account Number</label>
                    <input type="text" class="form-control" id="accountNumber" name="accountNumber" data-validation="required numeric" placeholder="1234567890">
                    <span id="accountNumberError" class="error">Account Number is required</span>
                </div>
            </div>

            <!-- Google Pay -->
            <div id="googlePayFields" class="hidden">
                <h4>Google Pay</h4>
                <div class="mb-3">
                    <label for="googlePayPhone" class="form-label">Google Pay Phone Number</label>
                    <input type="tel" class="form-control" id="googlePayPhone" name="googlePayPhone" data-validation="required numeric min:10 max:15" placeholder="+1 234 567 8901">
                    <span id="googlePayPhoneError" class="error">Valid Phone Number is required</span>
                </div>
            </div>

            <!-- Apple Pay -->
            <div id="applePayFields" class="hidden">
                <h4>Apple Pay</h4>
                <div class="mb-3">
                    <label for="appleID" class="form-label">Apple ID</label>
                    <input type="email" class="form-control" id="appleID" name="appleID" data-validation="required email" placeholder="john.doe@example.com">
                    <span id="appleIDError" class="error">Valid Apple ID is required</span>
                </div>
            </div>

            <!-- Cryptocurrency -->
            <div id="cryptoFields" class="hidden">
                <h4>Cryptocurrency Payment</h4>
                <div class="mb-3">
                    <label for="cryptoWallet" class="form-label">Wallet Address</label>
                    <input type="text" class="form-control" id="cryptoWallet" name="cryptoWallet" data-validation="required alphanumeric" placeholder="1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa">
                    <span id="cryptoWalletError" class="error">Wallet Address is required</span>
                </div>
            </div>

            <!-- Coupon Section -->
            <div class="mb-3">
                <label for="couponCode" class="form-label">Apply Coupon</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="couponCode" placeholder="Enter coupon code">
                    <button type="button" class="btn btn-secondary" onclick="applyCoupon()">Apply</button>
                </div>
                <span id="couponMessage" class="error"></span>
            </div>

            <!-- Total Amount Display -->
            <div class="mb-3">
                <p><strong>Total: $<span id="totalAmount">100.00</span></strong></p>
                <p><strong>Discount: $<span id="discountAmount">0.00</span></strong></p>
                <p><strong>Final Amount: $<span id="finalAmount">100.00</span></strong></p>
            </div>

            <button type="submit" class="btn btn-primary btn-lg w-100">Proceed to Confirmation</button>
        </form>
    </div>
</div>

<script>
    // Hardcoded coupon data
    const coupons = [
        { code: 'SAVE10', discountType: 'percentage', discountValue: 10, expirationDate: '2025-12-31' }, // Updated expiration date
        { code: 'WELCOME20', discountType: 'fixed', discountValue: 20, expirationDate: '2025-12-31' }, // Updated expiration date
    ];

    // Function to apply coupon
    function applyCoupon() {
        const couponCode = document.getElementById('couponCode').value.trim();
        const couponMessage = document.getElementById('couponMessage');
        const totalAmountElement = document.getElementById('totalAmount');
        const discountAmountElement = document.getElementById('discountAmount');
        const finalAmountElement = document.getElementById('finalAmount');

        const totalAmount = parseFloat(totalAmountElement.innerText); // Get the total amount from the UI

        console.log("Coupon Code Entered:", couponCode); // Debugging
        console.log("Total Amount:", totalAmount); // Debugging

        // Find the coupon in the list
        const coupon = coupons.find(c => c.code === couponCode);

        if (coupon) {
            console.log("Coupon Found:", coupon); // Debugging

            const currentDate = new Date().toISOString().split('T')[0]; // Get current date in YYYY-MM-DD format
            console.log("Current Date:", currentDate); // Debugging
            console.log("Coupon Expiration Date:", coupon.expirationDate); // Debugging

            // Check if the coupon is expired
            if (coupon.expirationDate >= currentDate) {
                let discount = 0;

                // Calculate discount based on type
                if (coupon.discountType === 'percentage') {
                    discount = totalAmount * (coupon.discountValue / 100);
                } else if (coupon.discountType === 'fixed') {
                    discount = coupon.discountValue;
                }

                console.log("Discount Calculated:", discount); // Debugging

                // Update the total amount
                const finalAmount = totalAmount - discount;

                // Update the UI in real time
                discountAmountElement.innerText = discount.toFixed(2);
                finalAmountElement.innerText = finalAmount.toFixed(2);

                // Display success message
                couponMessage.innerText = `Coupon applied! You saved $${discount.toFixed(2)}.`;
                couponMessage.style.color = 'green';
            } else {
                couponMessage.innerText = 'Coupon has expired.';
                couponMessage.style.color = 'red';
            }
        } else {
            console.log("Coupon Not Found"); // Debugging
            couponMessage.innerText = 'Invalid coupon code.';
            couponMessage.style.color = 'red';
        }
    }

    // Payment method fields visibility
    document.getElementById('paymentMethod').addEventListener('change', function() {
        let fields = ['creditCardFields', 'paypalFields', 'bankTransferFields', 'googlePayFields', 'applePayFields', 'cryptoFields'];
        fields.forEach(field => document.getElementById(field).classList.add('hidden'));

        let selectedField = this.value + 'Fields';
        if (document.getElementById(selectedField)) {
            document.getElementById(selectedField).classList.remove('hidden');
        }
    });

    // Handle form submission
    document.getElementById('checkoutForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Validate the form
        if (validateForm()) {
            // If validation passes, redirect to order-confirmation.php
            window.location.href = 'order-confirmation.php';
        }
    });

    // Validation function
    function validateForm() {
        let isValid = true;

        // Validate Full Name
        const fullName = document.getElementById('fullName').value.trim();
        if (!fullName) {
            document.getElementById('fullNameError').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('fullNameError').style.display = 'none';
        }

        // Validate Email
        const email = document.getElementById('email').value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email || !emailPattern.test(email)) {
            document.getElementById('emailError').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('emailError').style.display = 'none';
        }

        // Validate Address
        const address = document.getElementById('address').value.trim();
        if (!address) {
            document.getElementById('addressError').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('addressError').style.display = 'none';
        }

        // Validate Payment Method
        const paymentMethod = document.getElementById('paymentMethod').value;
        if (!paymentMethod) {
            document.getElementById('paymentMethodError').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('paymentMethodError').style.display = 'none';
        }

        // Validate Payment-Specific Fields
        if (paymentMethod === 'creditCard') {
            const cardNumber = document.getElementById('cardNumber').value.trim();
            const expiryDate = document.getElementById('expiryDate').value.trim();
            const cvv = document.getElementById('cvv').value.trim();

            if (!cardNumber || cardNumber.length !== 16) {
                document.getElementById('cardNumberError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('cardNumberError').style.display = 'none';
            }

            if (!expiryDate) {
                document.getElementById('expiryDateError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('expiryDateError').style.display = 'none';
            }

            if (!cvv || cvv.length !== 3) {
                document.getElementById('cvvError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('cvvError').style.display = 'none';
            }
        }

        // Add similar validation for other payment methods (PayPal, Bank Transfer, etc.)

        return isValid; // Return true if all validations pass
    }
</script>

<?php include('includes/footer.php'); ?>