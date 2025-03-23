<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="assetsadmin/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(to right, #343a40, #343a40);
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container" style="max-width: 400px; margin-top: 120px;">
        <div class="card shadow-sm border-light rounded">
            <div class="card-body">
                <h3 class="card-title text-center text-black mb-4">Admin Login</h3>
                <form id="loginForm" action="admin_dashboard.php" method="POST" onsubmit="return validateForm()">
                    <div class="form-group mb-3">
                        <label for="username" class="font-weight-bold">Username</label>
                        <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Enter username">
                    </div>
                    <div class="form-group mb-4">
                        <label for="password" class="font-weight-bold">Password</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn btn-dark btn-lg btn-block">Login</button>
                </form>
                <!-- Error message display -->
                <div id="errorMessage" class="error-message"></div>
                <!-- Optional: Add Forgot password link -->
                <div class="mt-3 text-center">
                    <a href="#" class="text-muted">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and optional dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function validateForm() {
            // Default credentials
            const defaultUsername = "admin";
            const defaultPassword = "123";

            // Get input values
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            // Check if credentials match
            if (username === defaultUsername && password === defaultPassword) {
                // Clear error message
                document.getElementById("errorMessage").innerText = "";
                return true; // Allow form submission
            } else {
                // Display error message
                document.getElementById("errorMessage").innerText = "Invalid username or password.";
                return false; // Prevent form submission
            }
        }
    </script>
</body>

</html>